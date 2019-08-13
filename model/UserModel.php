<?php
require("../database/Database.php");

class UserModel{
    private $db;
    private $tablename = "tbuser";

    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, age, address,email) VALUES(?,?,?,?,)";
        $this->db->execute($sql);
    }
    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }
    public function __destruct(){
        unset($this->db);
    }
 }
$userModel = new UserModel();
$userModel-> name = "bodoy";
$userModel-> age = 5 ;
$userModel-> address = "carcar";
$userModel-> email = "e@e.com";