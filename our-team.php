<?php
// autentication
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();
//setTitle
require_once __DIR__ . '/source/php/work-with-data.php';
setTitle('Our Team');
// header
require_once __DIR__ . '/content/header.php';
?>



    <div id="team">

        <img  src="/content/images/team.jpg" class="col-xs-12 col-sm-12" id="teamPicture" alt="team-picture">
        <p>From the left: Nina Luong, Marcus Waldal Ephithite, Thomas René Gabrielsen, Thomas August Nikolaisen, Nikita Zhevnitskiy,    Johannes Husa</p>
    </div>




<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>