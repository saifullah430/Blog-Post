

<?php 
    define("DB_HOST",'localhost');
    define("DB_USERNAME",'root');
    define("DB_PASSWORD",'');
    define("DB_NAME",'my_first_blog_db');

    try{
        $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //    echo "Database connection successfully";
    }catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }
?>