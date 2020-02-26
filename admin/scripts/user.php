<?php

function createUser($fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();

    // TODO: FINISH the below so that it can run a sql query to create a new user with provided data
    $create_user_query = 'INSERT INTO tbl_user (user_fname, user_name, user_pass, user_email, user_ip) VALUES(:fname, :username, :password, :email, "no")';
    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_set->execute(
        array(
            ':username'=>$username,
            ':password'=>$password,
            ':fname'=>$fname,
            ':email'=>$email
        )
    );

    if(!$create_user_set){
        redirect_to('index.php');
    }else{
        // user does not exist
        return 'User could not be created, try again!';
    }

    
}