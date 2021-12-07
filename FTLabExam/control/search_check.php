<?php
    include("model/db.php"); 

    $msg=$name=$dept=$date=$sal=$id="";
    
    if(isset($_POST["search"]))
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery=$connection->CheckEmployee($conobj,"employee",$_POST["id"]);
        
        if($userQuery !== false && $userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $id = $row["ID"];
                $name = $row["Name"];
                $dept = $row["Department"];
                $date = $row["JoiningDate"];
                $sal = $row["Salary"];
            }
        } 
        else 
        {
            echo "0 results";
        }
    }

    if(isset($_POST["update"]))
    {
        $id = $_POST["id1"];
        $name = $_POST["name"];
        $dept = $_POST["dept"];
        $date = $_POST["date"];
        $sal = $_POST["sal"];

        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery=$connection->UpdateEmployee($conobj,"employee", $id, $name, $dept, $date, $sal);

        if($conobj->query($userQuery) != TRUE) 
        {
            $msg = "Updated successfully!";
        }
        else 
        {
            $msg = "Update Failed!";
        }
     
    }
?>