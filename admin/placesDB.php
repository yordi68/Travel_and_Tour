<?php

class placesDB {
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
    
    public function insert($place_name, $price, $description, $image) {
        $sql = "INSERT INTO places (place_name, price, description, image) VALUES ('$place_name', '$price', '$description', '$image')";
        
        if ($this->conn->query($sql) === true) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    
    public function fetchdata() {
        $sql = "SELECT * FROM places";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    
    public function search($place) {
        $sql = "SELECT * FROM places WHERE place_name = '$place' ";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->$result;
        } else {
            return false;
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
        $sql = "DELETE FROM places WHERE id = '$id'";
        
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
