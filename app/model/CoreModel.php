<?php


namespace app\model;


class CoreModel
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'ts_store';
    private $conn;


    protected $table;

    public function __construct()
    {
        if(!$this->table)
            die ('No table name provided');
    }


    private function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, 3307);

        if (!$this->conn) {
            die("could not connect");
        }

        $this->conn->set_charset("utf8mb4");

    }

    protected function query(string $query)
    {
        $this->connect();

        $result = $this->conn->query($query);


        if ($result) {
            $this->conn->close();
            return $result;

        }
        print_r($this->conn);
        $this->conn->close();
        die();
    }



// $query = "SELECT `id`,`name` FROM `bakery_products` ORDER BY `name` ASC";

// $result = db_query($query);
// foreach ($result as $key => $value)
// {
// 	//print_r($value);
// }

    protected function generateQuery( array $data, bool $uuid = false): string
    {
        if ($uuid)
            $data['id'] = uniqid();


        $keys = $values = '';
        foreach ($data as $key => $value) {
            $keys .= "`$key`, ";
            $values .= "'$value',";
        }


        $keys = rtrim($keys, ", ");
        $values = rtrim($values, ", ");

        $query = "INSERT INTO `" . $this->table . "`($keys) VALUES ($values)";
        print_r($query);


        return $query;
    }
    public function list()
    {
        $query = "SELECT  * FROM `" . $this->table . "` ";
        return $this->query($query);
    }
    public function find(string $id)
    {

        $query = "SELECT  * FROM `" . $this->table . "`WHERE `id`='$id'";
        return $this->query($query);
    }
    public function update($id)
    {

        $data =$_POST;
        $options='';
        print_r($this->table);
        print_r($data);

        foreach ($data as $key => $value)
        {
            $options .= " `$key` = '$value',  ";
        }

        $options = rtrim($options, ", ");

        $query ="UPDATE `" . $this->table . "` SET " . $options . " WHERE `id`='$id'";


        return $this->query($query);


    }
    public function delete($id)
    {
        $data =$_POST;
        $options='';

        foreach ($data as $key => $value)
        {
            $options .= " `$key` = '$value',  ";
        }

        $options = rtrim($options, ", ");

        $query ="DELETE FROM `" . $this->table . "` WHERE `id`='$id'";


        return $this->query($query);

    }
}
