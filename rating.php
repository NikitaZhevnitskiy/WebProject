<?php
// autentication
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();
//setTitle
require_once __DIR__ . '/source/php/work-with-data.php';
setTitle('Rating');
// header
require_once __DIR__ . '/content/header.php';
?>








<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>