<?php

// get all products
function getAll(){
    $pdo = Database::getInstance()->getConnection();

    $get_blog_query = "SELECT * FROM tbl_blog";
    $blog = $pdo->query($get_blog_query);

    if($blog){
        return $blog;
    }else{
        return false;
    }
}


// delete post
function deletePost($id){
    $pdo = Database::getInstance()->getConnection();

    $delete_post_query = "DELETE FROM tbl_blog WHERE post_id = :id";
    $delete_post_set = $pdo->prepare($delete_post_query);
    $delete_post_result = $delete_post_set->execute(
        array(
            ':id'=>$id
        )
    );

    if($delete_post_result && $delete_post_set->rowCount() > 0){
        redirect_to('admin_deletepost.php');
    }else{
        // product does not exist
        return false;
    }
}

// get single post for editing
function getSinglePost($id){
    $pdo = Database::getInstance()->getConnection();

    $get_post_query = 'SELECT * FROM tbl_blog WHERE post_id= :id';
    $get_post_set = $pdo->prepare($get_post_query);
    $get_post_result = $get_post_set->execute(
        array(
            ':id'=>$id
        )
    );

    if($get_post_result){
        return $get_post_set;
    }else{
        return 'post could not be updated';
    }
}


// edit products
function editPost($id, $post_title, $post_body){
    $pdo = Database::getInstance()->getConnection();

    $update_post_query = "UPDATE tbl_blog SET post_title = :post_title, post_body = :post_body, WHERE post_id= :id";
    $update_post_set = $pdo->prepare($update_post_query);
    $get_post_result = $update_post_set->execute(
        array(
            ':id'=>$id,
            ':post_title'=>$post_title,
            ':post_body'=>$post_body,
        )
    );

    if($get_post_result){
        redirect_to('index.php');
    }else{
        // product does not exist
        return 'Post could not be updated, please try again';
    }
}


// create a new product
function createPost($id, $post_title, $post_body){
    $pdo = Database::getInstance()->getConnection();
    
    //TODO: finish the below so that it can run a SQL query
    // to create a new product with provided data
    $create_post_query = 'INSERT INTO tbl_products(post_title, post_body) VALUES (:post_title, :post_body)';

    $create_post_set = $pdo->prepare($create_post_query);
    $create_post_result = $create_post_set->execute(
        array(
            ':post_title'=>$post_title,
            ':post_body'=>$post_body, 
        )
    );
    //TODO: redirect to index.php if creat user successfully
    // otherwise, return a error message
    if($create_post_result){
        redirect_to('index.php');
    }else{
        return 'The product was not created';
    }
}