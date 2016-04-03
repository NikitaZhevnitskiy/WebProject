<?php
// autentication
require_once __DIR__ . '/source/php/authentication.php';
checkUserAuthentication();
// connect dataBase
require_once __DIR__ . '/source/php/database-access.php';

//setTitle
require_once __DIR__ . '/source/php/work-with-data.php';
setTitle('Rating');
// header
require_once __DIR__ . '/content/header.php';
?>


    <div id="rating-chart">


    </div>

    <?php
    $faculties = getFacultiesInfo();
    ?>

    <script type="application/javascript">
        $(window).on('resize', '#rating-chart', function() {
            chart.update();
        });

        var data ={
            labels: [
                <?php
                foreach($faculties as $faculty) {
                    echo "'". $faculty['FacultyName'] ."', ";
                }
                ?>
            ],
            series: [
                [
                    <?php
                    foreach($faculties as $faculty) {
                        echo $faculty['Points'] .", ";
                    }
                    ?>
                ]
            ]
        };



        // columns
        // bar connect with event CREATED
        window.chart = new Chartist.Bar('#rating-chart', data).on('created', function() {

            // each colums style (color)
            var bars = $('.ct-bar');
            bars.eq(0).attr('style', 'stroke: #3d9d34');
            bars.eq(1).attr('style', 'stroke: #b93e31');
            bars.eq(2).attr('style', 'stroke: #446bb9');
            bars.eq(3).attr('style', 'stroke: #b95aa0');
        });

    </script>







<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>