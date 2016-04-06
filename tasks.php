
<?php
// autentication
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();

//setTitle
require_once __DIR__ . '/source/php/work-with-data.php';
setTitle('Current tasks');

// header
require_once __DIR__ . '/content/header.php';
?>


    <?php
    //Connect tasks files !!!!
        $tasksDir = __DIR__ .'/content/tasks/';
        $files = scandir($tasksDir); // array with files in directory
        $filesInfo = []; // array key/value  where key - time(timestamp), value fully path to file

        foreach($files as $file) {
            if(($file !== '.') && ($file !== '..')) { //miss directory file and up directory
                $filesInfo[filemtime($tasksDir . $file)] = $tasksDir . $file; // key = value
            }
        }

        krsort($filesInfo); // key(data) revert sorting. First new files

        foreach($filesInfo as $file) {
            require_once $file;
    }


    ?>






<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>