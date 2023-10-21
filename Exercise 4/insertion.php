<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting</title>
    <h1>
        WELCOME TO CRAYDEL ONLINE LIBRARY
    </h1>
</head>
<body>
    <center>
        <?php
        require "library.php";

        $Name = $_REQUEST["Name"];
        $Card_Number = $_REQUEST["Card_Number"];
        $Book_Title = $_REQUEST["Book_Title"];
        $Author = $_REQUEST["Author"];
        $Publisher = $_REQUEST["Publisher"];
        $ISBN = $_REQUEST["ISBN"];

        $sql = "INSERT INTO Records (Name, Card_Number, Book_Title, Author, Publisher, ISBN) VALUES ('Name', 'Card_Number', 'Book_Title', 'Author', 'Publisher', 'ISBN')";
        if($conn->query($sql)===true){
            echo 'records inserted';
        }else{
            echo 'error';
        }
        ?>
    </center>
</body>
</html>