<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name1=test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $website=test_input($_POST["webiste"]);
    $comment=test_input($_POST["comment"]);
    $gender=test_input($_POST["gender"]);
}
echo $name1. <"br">.$email. <"br">.$webiste. <"br">.$comment. <"br">.$gender;
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>