<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="?p=1-main">
                        главная
                    </a>
                </li>
                <li>
                    <a href="?p=2-catalog">
                        каталог
                    </a>
                </li>
                <li>
                    <a href="?p=4-contact">
                        контакты
                    </a>
                </li>
                <li>
                    <a href="#">
                        о нас
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            <img src="./assets/img/detvora-logo.png" /> &copy; 
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="#" style="text-decoration: none; color: initial" id="sign"> Deryglazov</a>
            <!-- <img style="margin-top: -20px;" src="assets/img/sig.png" height="80"> -->
        </div>
    </div>
</footer>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
<script src="assets/js/moment.min.js"></script>

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
<script src="assets/js/bootstrap-tagsinput.js"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
<script src="assets/js/jasny-bootstrap.min.js"></script>

<!--    Plugin For Google Maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBacwMcsQnTaJRh1-0JV24qFM7zNmfVz_c"></script>

<script src="assets/assets-for-demo/vertical-nav.js" type="text/javascript"></script>


<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
<script src="assets/js/material-kit.js?v=1.3.0" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function() {

        materialKitDemo.initContactUs2Map();
    });
</script>

<?php include("4-scripts.php") ?>

</html>