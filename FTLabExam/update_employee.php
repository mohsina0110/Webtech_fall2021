<?php
    session_start();
    include("control/search_check.php");
?>
<html>
    <head>
        <script src = "js/srch_check.js"></script> 
        <h2>Update Employee</h2>
    </head>
    <body>
        <form action="" onsubmit="return SearchId()" method="POST">
            Search By ID:<br>
            <input type="text" name="id" id="id"><p id = "err"></p>
            <br>
            <input type="submit" name="search" value="Search">
        </form>
        <br><br>
        <form onsubmit="return Update()" method="POST">
            <input type="hidden" name="id1" id="id1" value="<?php echo $id ?>"><br>
            Name:<br>
            <input type="text" name="name" id="name" value="<?php echo $name ?>"><br>
            Department:<br>
            <input type="text" name="dept" id="dept" value="<?php echo $dept ?>"><br>
            Joining Date:<br>
            <input type="datetime" name="date" id="date" value="<?php echo $date ?>"><br>
            Salary:<br>
            <input type="text" name="sal" id="sal" value="<?php echo $sal ?>"><br><br>            
            <input type="submit" name="update" value="Update">
            <p id="err2"></p>
        </form>
        <?php echo $msg ?>
    </body>
</html>