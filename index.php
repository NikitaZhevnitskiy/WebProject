
<?php
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();

echo $_SESSION['Name'].'</br>';
echo $_SERVER['SCRIPT_NAME'];
