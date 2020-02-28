<?php

function createUser($fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();

    // check if the user exists already
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_users WHERE user_name= :username';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':username' => $username,
        )
        );

    // if the user doesn't exit create the user
    if($user_set->fetchColumn()>0){
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
        }
    }else{
        // user does not exist
        return 'User could not be created, try again!';
    }

    
}