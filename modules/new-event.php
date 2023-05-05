<?php
    include('../components/connect-db.php');
    include('functions.php');

    $POST_S = array();
    parse_str($_POST, $POST_S);

    $stmt = $conn->prepare("SELECT * FROM house_config WHERE (email_house=:email)");
    $stmt->bindParam(':email', $email_receive);
    $stmt->execute();

    if($stmt->rowCount() == 1){
        if($obj=$stmt->fetch()){
        }
    }
?>