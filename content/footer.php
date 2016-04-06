<?php
/**
 * Created by PhpStorm.
 * User: NIK
 * Date: 31.03.16
 * Time: 18:43
 */
//Authentication
require_once __DIR__ . '/../source/php/authentication.php';
checkUserAuthentication();

//require_once instead of include. use file once.
?>
        </div>

        <div id="footer">
            <div class="row">
                    <div id="About-us" class="col-xs-12 col-sm-4">
                        <h3>About us</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>

                    </div>
                    <div id="Quick-links" class="col-xs-12 col-sm-4">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="http://www.kahoot.it">www.kahoot.it</a></li>
                            <li><a href="http://www.itslearning.com">www.itslearning.com</a></li>
                            <li><a href="http://www.google.com">www.google.com</a></li>
                        </ul>
                    </div>
                    <div id="Keep-in-touch" class="col-xs-12 col-sm-4">
                        <h3>Keep in touch</h3>
                        <ul>
                            <li><a href="http://www.westerdals.no">www.westerdals.no</a></li>
                            <li><a href="mailto:post@westerdals.no">post@westerdals.no</a></li>
                            <li>22 05 75 50</li>
                        </ul>
                    </div>
            </div>
        </div>

    </body>
</html>
