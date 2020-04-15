<?php

function getBlog(){
    $pdo = Database::getInstance()->getConnection();
    $query = 'SELECT * FROM tbl_blog GROUP BY id';
    $getBlog = $pdo->prepare($query);
    $getBlog->execute();

    return $getBlog;
}