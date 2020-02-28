<?php

function createUser($fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();


    // if the user doesn't exit create the user
 
    $create_user_query = 'INSERT INTO tbl_users (user_fname, user_name, user_pass, user_email, user_ip) VALUES(:fname, :username, :password, :email, "no")';
    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_set->execute(
        array(
            ':username'=>$username,
            ':password'=>$password,
            ':fname'=>$fname,
            ':email'=>$email
        )
    );

    if($create_user_set){
        redirect_to('dashboard.php');
    }else{
        // user does not exist
        return 'User could not be created, try again!';
    }

    
}