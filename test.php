<?php
// autentication
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();


/**
 * Created by PhpStorm.
 * User: NIK
 * Date: 31.03.16
 * Time: 22:02
 */

echo "siri ".sha1('siri')."</br>";
echo "nikita ".sha1('nikita')."</br>";
echo "thomas ".sha1('thomas')."</br>";
echo "nina ".sha1('nina')."</br>";
echo "marcus ".sha1('marcus')."</br>";
echo "johannes ".sha1('johannes')."</br>";
