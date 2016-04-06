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


    <iframe id="video-about" src="https://www.youtube.com/embed/vsiFqr4eluQ"></iframe>

    <div id="video-description">
        <h2>
            Westerdals tournament
        </h2>
        <p>

            The idea is about making a webpage for a competition that lasts
            the entire year, where you are split into 4 teams.
            It will work pretty similar to the house competition from Harry Potter.
            You can receive points from having the highest average on exams,
            weekly competitions that usually involves sport but also other things you can compete in.  There will be selected a best student,
            a best team and a best teacher by the end of the year, who will be awarded with a great prize. The webpage is given
            the assignment of storing the points of the students in a database, and show how many points the different teams have.
            It will be possible to add points on the webpage.
        </p>
    </div>







<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>