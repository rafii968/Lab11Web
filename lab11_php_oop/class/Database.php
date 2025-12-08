<?php 
class Database 
{
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    public $conn;

    public function __construct()
    {
        $this->getConfig();

        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->db_name,
        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    private function getConfig()
    {
        include(__DIR__ . "/../config.php"); 
        
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }

    public function escape($value)
    {
        if ($this->conn) {
             return $this->conn->real_escape_string($value);
        }
        return $value;
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function get($table, $where = null)
    {
        if ($where) {
            $where = " WHERE " . $where;
        }
        
        $sql = "SELECT * FROM " . $table . $where;
        $result = $this->conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    }

    public function insert($table, $data)
    {
        if (is_array($data)) {
            $columns = [];
            $values = [];
            
            foreach ($data as $key => $val) {
                $columns[] = $key;
                $values[]  = "'" . $this->escape($val) . "'"; 
            }

            $columns = implode(",", $columns);
            $values  = implode(",", $values);
        } else {
            return false;
        }

        $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ")";
        $result = $this->conn->query($sql);

        return $result === true;
    }

    public function update($table, $data, $where)
    {
        $update_value = [];

        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $update_value[] = $key . "='" . $this->escape($val) . "'";
            }
            $update_value = implode(",", $update_value);
        } else {
            return false;
        }
        
        $sql = "UPDATE " . $table . " SET " . $update_value . " WHERE " . $where;
        $result = $this->conn->query($sql);

        return $result === true;
    }

    public function delete($table, $where)
    {
        if (empty($where)) {
            return false;
        }
        
        $sql = "DELETE FROM " . $table . " WHERE " . $where;
        $result = $this->conn->query($sql);

        return $result === true;
    }
}
?>