<?php

/**
 * connect script which check Autentication
 */
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();


/**
 * If request comes with POST method, means that somebody tried to authenticate.
 * Check input data
 */
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    /**
     * Connect functions needs for check dataInput
     * and prepared statement to database
     */
    require_once __DIR__ . '/source/php/work-with-data.php';
    require_once __DIR__ . '/source/php/database-access.php';

    $password  = cleanPostData($_POST['password']);
    $login     = cleanPostData($_POST['login']);

    /**
     * If have any errors, put them in array
     */
    $loginErrors = array();
    if($password === "") {
        $loginErrors[] = "Passwod field can not be empty";
    }
    if($login === "") {
        $loginErrors[] = "Login field can not be empty";
    }

    /**
     * If error's array empty, try to login user.
     * If login or password wrong write error
     */
    if(count($loginErrors) === 0) {
        $result = checkUserLoginInfo($login, $password);
        if($result !== false) {
            setUserIdentifier($result);
        } else {
            $loginErrors[] = 'Inncorect data input, try again';
        }
    }
}
?>




<?php
/** header connect */
require_once __DIR__ . '/content/header.php';
?>


<form class="form-signin" role="form" method="post" action="/login.php">
    <h2 class="form-signin-heading">Please sign in</h2>

    <?php
    /**
     * Fields show in case when input data wrong(login or password)
     */

        if(isset($loginErrors)) {
            echo '<ul class="form-error">';
            foreach($loginErrors as $error) {
                echo '<li>'.$error.'</li>';
            }
            echo  '</ul>';
        }
    ?>

    <input name="login" class="form-control" placeholder="Login" autocomplete="off">
    <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">


    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>


<?php
/** footer connect */
require_once __DIR__ . '/content/footer.php';
?>