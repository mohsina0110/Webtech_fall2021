<?php
    class db
    {
        function OpenCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "mydb";
    
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

            if($conn->connect_error)
            {
                die("connection failed: " . $conn->connect_error);
            }

            return $conn;
        }

        function CheckEmployee($conn, $table, $id)
        {
            $result = $conn->query("SELECT * FROM ". $table." WHERE ID='". $id."'");
            return $result;
            
        }

        function UpdateEmployee($conn, $table, $id, $name, $dept, $date, $sal)
        {
            $result = $conn->query("UPDATE $table SET Name ='$name', Department='$dept', JoiningDate='$date', Salary='$sal' WHERE ID='$id'");
            return $result;
            
        }
    }
?>