<?php

// this function will send an email to all users who signup for the mailing list

function sendMail($email, $subject, $body){
    $pdo = Database::getInstance()->getConnection();

    // check if the user exists already or not in the db
    $check_mail_query = 'SELECT COUNT(*) FROM tbl_signup WHERE signup_email = :email'; 
    $mail_set = $pdo->prepare($check_user_query);
    $mail_set->execute(
        array(
            ':email'=>$email
        )
    );

    $row = $mail_set->fetch(PDO::FETCH_ASSOC);

    // if else statement to continue the create function or stop cause user is taken
    if($row['num'] > 0){

        $message = 'Mail could not send';

    }else{


    //sending the email to users in the mailing list 

    //phpmailer config
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    
    // defining the gmail accound used. PLEASE DONT STEAL MY ACCOUNT!:)
    $mail->Username='gv.user.create@gmail.com';
    $mail->Password='Wilson10'; 

    $mail->addAddress($email);
    $mail->setFrom('gv.user.create@gmail.com');
    
    // this is the email template that will send to new users
    $mail->isHTML(true);
    $mail->Subject='Welcome New User!'; 
    $mail->Body='
    Congrats, your new account has been made!<br><br>
    I hope you are as excited for this as much as I am!<br><br>
    Best,<br><br>
    Graham Vickers<br><br>
    <br><br><br>

    Here are your login credentials:<br><br>
    ------------------------<br>

    Email: '.$username.'<br><br>
    Password: '.$password.'<br><br>
    * Note: if you do not sign in with these credentials within 24 hours of recieving this email, your account will be deactivated
    ------------------------<br>
    <br><br><br>
    ';
    
    // this will either send the email and create the user. Or stop cause the email could not be sent

    // if the mail wasnt sent render the message
    if(!$mail->send()){

        $message= $mail->ErrorInfo;
        return 'Sorry, but the email could not be sent. Plase try again';
    }else{
        // this will run if the mail could be sent
        // if everything ran right user will be rediirected back to the index
        redirect_to('index.php');
        $message = 'Eamil successfuly sent!';
    }  
  }
}