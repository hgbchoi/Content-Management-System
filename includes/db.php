<?php
class dbManager {

  static $dbServer;
  static $dbLoginPW;
  static $dbLoginID;
  static $dbName;
  static $conn;
  static $isInit;

  public static function initialize($dbServer, $dbLoginID, $dbLoginPW, $dbName){


    self::$dbServer = $dbServer;
    self::$dbLoginID = $dbLoginID;
    self::$dbLoginPW = $dbLoginPW;
    self::$dbName = $dbName;
    self::$isInit = 'True';
  }

  public static function dbConnect(){
    self::$conn = mysqli_connect(self::$dbServer, self::$dbLoginID, self::$dbLoginPW, self::$dbName);
  }

  public static function fetchCategories(){

    $query = "SELECT * FROM categories";
    return mysqli_query(self::$conn, $query);

  }

  public static function insertCategory($cat_title){
    $query = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";
    mysqli_query(self::$conn, $query);
  }

  public static  function insertPost($post_title, $post_author, $post_date, $post_image){
     // TODO: write this function

  }

  public static function fetchPosts(){

      $query = "SELECT * FROM posts";
      return mysqli_query(self::$conn, $query);

  }

  function fetchByUserSearch($tag){

    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$tag%'";
    return mysqli_query(self::$conn, $query);
  }

  public static function checkIfSet_POST($name){

  if (isset($_POST[$name]))
    return true;
  return false;


  }
}
?>
