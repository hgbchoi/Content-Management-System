<?php
class dbManager {

  var $dbServer;
  var $dbLoginPW;
  var $dbLoginID;
  var $dbName;
  var $conn;

  function __construct($dbServer, $dbLoginID, $dbLoginPW, $dbName){

    $this -> dbServer = $dbServer;
    $this -> dbLoginID = $dbLoginID;
    $this -> dbLoginPw = $dbLoginPW;
    $this -> dbName = $dbName;

  }

  function dbConnect(){
    $this -> conn = mysqli_connect($this->dbServer, $this->dbLoginID, $this->dbLoginPW, $this->dbName);
  }

  function fetchCategories(){

    $query = "SELECT * FROM categories";
    return mysqli_query($this -> conn, $query);

  }

  function insertCategory($cat_title){
    $query = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";
    mysqli_query($this -> conn, $query);
  }

  function insertPost($post_title, $post_author, $post_date, $post_image){
     // TODO: write this function

  }

  function fetchPosts(){

      $query = "SELECT * FROM posts";
      return mysqli_query($this -> conn, $query);
  }

  function fetchByUserSearch($tag){

    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$tag%'";
    return mysqli_query($this -> conn, $query);

  }

}







?>
