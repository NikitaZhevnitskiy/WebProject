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

    <div id="rank-description">
        <h2>
            Faculties points
        </h2>
    </div>


    <?php
    // get information from dataBase
    $faculties = getFacultiesInfo();
    ?>

    <script type="application/javascript">
        // update grafikk table with rank on events(resize screen)
        $(window).on('resize', '#rating-chart', function() {
            chart.update();
        });

        var data ={
            labels: [
                <?php
                foreach($faculties as $faculty) {
                    echo "'". $faculty['facultyName'] ."', ";
                }
                ?>
            ],
            series: [
                [
                    <?php
                    foreach($faculties as $faculty) {
                        echo $faculty['points'] .", ";
                    }
                    ?>
                ]
            ]
        };



        // columns
        // bar connect with event CREATED
        window.chart = new Chartist.Bar('#rating-chart', data).on('created', function() {

            // each columns style (color)
            var bars = $('.ct-bar');
            bars.eq(0).attr('style', 'stroke: #fed167');
            bars.eq(1).attr('style', 'stroke: #61afca');
            bars.eq(2).attr('style', 'stroke: #7b5781');
            bars.eq(3).attr('style', 'stroke: #7ec79c');
        });

    </script>







<?php
//footer
require_once  __DIR__ . '/content/footer.php';
?>