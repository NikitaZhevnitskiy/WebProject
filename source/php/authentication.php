<?php
/**
 * Created by PhpStorm.
 * User: NIK
* Date: 31.03.16
* Time: 18:11
*/


/**
 * Check user's cookies on flag authentication in current session
 * if not, go to login.php
 *
 * @return bool
 */
ob_start();
session_start();
function checkUserAuthentication(){


    if($_SESSION['login-status'] !== true) {

        if($_SERVER['SCRIPT_NAME'] !== '/login.php') {

            header('Location: /login.php', true, 302);
        }
    } else {
        if($_SERVER['SCRIPT_NAME'] === '/login.php') {
            header('Location: /index.php', true, 302);
        }
    }

}

/**
 * In cookie file write flag that user have registered
 *
 * @param $userData
 */
function setUserIdentifier($userData){
    $_SESSION['login-status'] = true;
    $_SESSION['LastName'] = $userData['LastName'];
    $_SESSION['Name']= $userData['Name'];
    $_SESSION['ID']=$userData['ID'];

    header('Location: /index.php', true, 302);
}