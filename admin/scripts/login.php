<?php 

function login($username, $password, $ip){
    $pdo = Database::getInstance()->getConnection();
    //Check Existance
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_users WHERE user_name= :username';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':username' => $username,
        )
    );

    if($user_set->fetchColumn()>0){
        //user exists
        $get_user_query = 'SELECT * FROM tbl_users WHERE user_name= :username AND user_pass = :password';
        $user_check = $pdo->prepare($get_user_query);
        $user_check->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );

        while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){
            $id = $found_user['user_id'];
            // logged in!
            $message = 'you just logged in!';
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $found_user['user_fname'];

            
            $update_query = "UPDATE tbl_users SET user_ip = :ip WHERE user_id = :id";
            $update_set = $pdo->prepare($update_query);
            $update_set->execute(
                array(
                    ':ip'=>$ip,
                    ':id'=>$id
                )
            );
        }if(isset($id)){
            redirect_to('dashboard.php');
        }
    }else{
        // user does not exist
        $message = 'User does not exist';
    }

    // Log user in

    return $message;
}

function confirm_logged_in(){
    if(!isset($_SESSION['user_id'])){
        redirect_to('dashboard.php');
    }
}

function logout(){
    session_destroy();
    redirect_to('admin_login.php');
}

// this will check if the use has been verified or not. Will dictate if user is sent to dashboard or edit
function user_verification(){
    $pdo = Database::getInstance()->getConnection();

    //pull the current users row and look if user has been varified their account
    $user_verif_query = 'SELECT * FROM tbl_user WHERE user_id = :id';
    $user_verif_set = $pdo->prepare($user_verif_query);
    $user_verif_set->execute(
        array(
            ':id'=>$_SESSION['user_id']
        )    
    );
        // query result 
        $userVerification = $user_verif_set->fetch(PDO::FETCH_ASSOC);

        // checking if user is verified then continue to dashnoard or not then go to edit user page
        if($userVerification['user_verif'] == '0'){

            // if not verified yet redirect to the edit page
            redirect_to('admin_editUser.php');
        }
}