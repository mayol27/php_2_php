<?php
class Database{
    private $con;
    public $servername="localhost";
    public $username="root";
    public $password="";
    public $dbname = "mayol";

    public function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
    }

    public function execute($sql){
        if(mysqli_query($this->con, $sql))
        {
            return 1;
        }
        else
        {
            return 0;
        }

        // return mysqli_query($this->con, $sql);
    }

    public function __destruct(){
        mysqli_close($this->con);
    }
}
?>