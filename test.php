<form action="/test.php" method="POST">
    <input type="text" name="name" id="name">
    <input type="text" name="hello" id="hello">
    <button type="submit">submit</button>
</form>

<?php
    if (isset($_POST["name"])) {

        echo $_POST["name"] . "<br>";
        echo $_POST["hello"] . "<br>";


        include 'dbconfig.php';
        
        //query from the table that we create
        $sql = "SELECT rowid, * FROM members";
        $query = $db->query($sql);

        print_r($query->fetchArray());
    }


?>