<?php
    include('../components/connect-db.php');
    include('functions.php');

    $email_receive = clearString($_POST["email-house"]);
    $password_receive = clearString($_POST["password-house"]);

    if($email_receive != "" AND $password_receive !== ""){
        $stmt = $conn->prepare("SELECT * FROM house_config WHERE (email_house=:email)");
        $stmt->bindParam(':email', $email_receive);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            if($obj=$stmt->fetch()){
                if(password_verify($password_receive, $obj['password_house'])){
                    session_start();

                    $_SESSION['ucn_house'] = $obj['ucn_house'];
                    $_SESSION['name_house'] = $obj['name_house'];
                    $_SESSION['email_house'] = $obj['email_house'];
                    $_SESSION['cpfcnpj_house'] = $obj['cpfcnpj_house'];
                    $_SESSION['musical_tags'] = $obj['musical_tags'];
                    $_SESSION['local_json'] = $obj['local_json'];
                    $_SESSION['last_update'] = $obj['last_update'];
                    $_SESSION['status_house'] = $obj['status_house'];

                    header("Location: ../index");
                }else{
                    header("Location: ../login?error=ERR00003");
                }
            }
        }else{
            header("Location: ../login?error=ERR00002");
        }
    }else{
        header("Location: ../login?error=ERR00001");
    }
?>