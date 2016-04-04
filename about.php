<?php
// autentication
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();
//setTitle
?>

<?php
require_once __DIR__ . '/source/php/work-with-data.php';
setTitle('About');
// header
require_once __DIR__ . '/content/header.php';
?>

    <div id="video-container">
        <video id="video-about" src="content/video/video.mp4" muted="muted" autoplay="autoplay" resource="video/mp4" loop="loop">
        </video>
    </div>







<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>