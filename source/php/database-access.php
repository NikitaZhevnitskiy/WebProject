<?php
/**
 * Created by PhpStorm.
 * User: NIK
 * Date: 31.03.16
 * Time: 20:14
 */
 
// SET UP YOUR SETTINGS HERE 
define('DB_HOST', 'localhost');
define('DB_USER', '??????????');
define('DB_PASS', '??????????');
define('DB_NAME', '??????????');

/**
 * Connection with database onCall checkUserLoginInfo function
 * prepare statement for request database, bind parameters . . .
 * user = [key, value];
 * check fields empty or not
 * password fields call hash function sha1(). Basic encryption
 * compare input data with database(userName and hashPassword)
 * success or not
 */
function checkUserLoginInfo($login, $password){
    $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $statement = $connection->prepare("SELECT * FROM users WHERE user_name=:loginString");
    $statement -> bindParam(':loginString', $login);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $user = $statement->fetch();


    if($user !== null){
        $hashPass = $user['password'];
        $inputPass = sha1($password); // 40 symbols in output after hash-function

        if($hashPass === $inputPass){
            return $user;
        } else {
            return false;
        }

    } else {
        return false;
    }

}
/**
 *  Connection with database
 *  prepare statement for request database, bind parameters . . .
 *  faculties = [key, value];
 *
 *  @return faculties
 */
function getFacultiesInfo(){
    $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $statement = $connection->prepare("SELECT * FROM faculties");
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $faculties = $statement->fetchAll();
    return $faculties;

}

?>
