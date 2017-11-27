                   <div id="footer" class="cf">
                    <div class="column three">
                        <strong>Phone</strong>
                        808-529.3819
                    </div>
                    <div class="column three">
                        <strong>Location</strong>
                        123 Boulevard Honolulu
                    </div>
                    <div class="column three last">
                        <strong>Hours</strong>
                        <em>Tuesday - Thursday</em><br>
                        1.00 - 9.00<br><br>
                        <em>Friday - Saturday</em><br>
                        4.00 - 11.00<br><br>
                        <em>Sunday - Monday</em><br>
                        Closed<br><br>
                        <?php
 
                        date_default_timezone_set("Europe/Berlin");

                        function storeOpen() {

                            $day = date("N");
                            $time = date("G");
                            $holDa = date("j");
                            $holMo = date("n");

                            if($holDa == 25 && $holMo == 12) {
                                echo "<strong class='closed'>Closed for the Holiday</strong>";

                            } elseif($holDa == 1 && $holMo == 1) {
                                echo "<strong class='closed'>Closed for the Holiday</strong>";

                            } elseif($day > 1 && $day < 5 && $time >= 13 && $time <= 21) {
                                echo "<strong class='open'>Open Now!</strong>";

                            } elseif($day == 5 || $day == 6 && $time >= 16 && $time <= 23) {
                                echo "<strong class='open'>Open Now!</strong>";

                            } else {
                                echo "<strong class='closed'>Currently Closed</strong>";
                            }
                        }

                    storeOpen();

                    ?>
                    </div>
                </div>
                <small>&copy;<?php echo date('Y'); ?> <?php echo $name; ?></small>
            </div>
        </div>
        <div class="copyright-info">
            <?php include('copyright.php'); ?>
        </div>
    </body>
</html>