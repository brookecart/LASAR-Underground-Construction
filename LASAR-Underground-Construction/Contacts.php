<?php require('navbar.php');?>
<br>
<div class="">
        <div class="row">
            <div class="col">
                <h3>Send a Message</h3>
            <?php require('msgform.php');?>
            </div>
            <div class="s2 col"></div>
            <div class="row col">
                <div class="row hide-on-med-and-down">
                    <?php
                        function location($location, $mapSize, $lsrText, $txtSize) {
                         echo "<div class='row $mapSize'>".
                                $location.
                            "</div>".
                            "<div class='row $txtSize'>".
                                "<p>$lsrText</p>".
                            "</div>"; 
                        }
                    ?>

                    <?php  location("<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12783.487837144074!2d-119.6919882!3d36.773639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3733227db16a15e!2sLasar+Construction!5e0!3m2!1sen!2sus!4v1494209808579' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>", "", "<h5>Address:</h5> 2565 N Sunnyside Ave, 93727 Fresno, United States <br> <h5>Phone Number:</h5> (559) 291-1024", "small-6");
                    ?>

                </div>
            </div>
            
        </div> 
        <br>
        <div class="row">
            <a class="button column lsrBorder large-4" href="#">
                       <br>
                        <h4>Request a Bid</h4>
                    <br> <br>    
            </a>
        </div>
    </div>
    <?php require('footer.php');?>
