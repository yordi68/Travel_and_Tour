<?php

class connectToDb {
    private $conn;
    
    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "book_db";
        
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    public function insert($name, $email, $phone, $address, $location, $guests, $arrivals, $leaving) {
        $sql = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
        
        if ($this->conn->query($sql) === true) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    
    public function fetchdata() {
        $sql = "SELECT * FROM book_form";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    
    public function fetchonerecord($userid) {
        $sql = "SELECT * FROM user WHERE id = $userid";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "No record found with the given user ID";
        }
    }
    
    public function update($userid, $name, $email, $phone) {
        $sql = "UPDATE user SET name='$name', email='$email', phone='$phone' WHERE userid = '$userid'";
        
        if ($this->conn->query($sql) === true) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM user WHERE userid = '$id'";
        
        if ($this->conn->query($sql) === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }
    
    public function __destruct() {
        $this->conn->close();
    }
}

?>
