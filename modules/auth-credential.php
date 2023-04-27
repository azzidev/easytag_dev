<?php
    include('../components/connect-db.php');
    include('functions.php');

    $email_receive = clearString($_POST["email-house"]);
    $password_receive = clearString($_POST["password-house"]);

    if($email_receive != "" AND $password_receive !== ""){
        $query = mysqli_query($conn, "SELECT * FROM `house_config` WHERE email_house='$email_receive'");

        if(mysqli_num_rows($query) == 1){
            if($obj=mysqli_fetch_object($query)){
                if(password_verify($password_receive, $obj->password_house)){
                    session_start();

                    $_SESSION['ucn_house'] = $obj->ucn_house;
                    $_SESSION['name_house'] = $obj->name_house;
                    $_SESSION['email_house'] = $obj->email_house;
                    $_SESSION['cpfcnpj_house'] = $obj->cpfcnpj_house;
                    $_SESSION['musical_tags'] = $obj->musical_tags;
                    $_SESSION['local_json'] = $obj->local_json;
                    $_SESSION['last_update'] = $obj->last_update;
                    $_SESSION['status_house'] = $obj->status_house;

                    header("Location: ../index.php");
                }else{
                    header("Location: ../login.php?error=ERR00003");
                }
            }
        }else{
            header("Location: ../login.php?error=ERR00002");
        }
    }else{
        header("Location: ../login.php?error=ERR00001");
    }
?>