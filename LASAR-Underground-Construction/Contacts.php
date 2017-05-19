<?php require('navbar.php');?>
<div class="parallax-container" style="width: 100%">
          <div class="parallax">
            <img src="img/IMG_1503.jpeg" alt="Space" style="display:block">
          </div>
        </div>
<br>
       <div class="row center-align container">
        <h1 class="hide-on-small-only">Contact Information</h1>
        <h1 class="hide-on-med-and-up">Contact</h1>
    </div>
        <div class="container row" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="col l5 s12">
                <h4 style="margin-left:-13px">Send a Message</h4>
                <?php require('msgform.php');?>
            </div>
            <div class="col s6 offset-s1 hide-on-med-and-down">
                    <div>
                        <iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12783.487837144074!2d-119.6919882!3d36.773639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3733227db16a15e!2sLasar+Construction!5e0!3m2!1sen!2sus!4v1494209808579' width='470' height='350' frameborder='0' style='border:0' allowfullscreen></iframe>
                    </div>
                    <div>
                        <h5>Address:</h5>
                        <p>2565 N Sunnyside Ave, 93727 Fresno, United States</p>
                        <h5>Phone Number:</h5>
                        <p>(559) 291-1024</p>
                    </div>
                    <div>
                 <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn-large white green-text text-darken-3" style="border: 2px solid #2e7d32; font-weight:500;" href="#modal1">Request a Bid</a>
                    </div>
                </div>
                <div class="col s12 hide-on-large-only">
                    <div class="row">
                        <h5>Address:</h5>
                        <p>2565 N Sunnyside Ave, 93727 Fresno, United States</p>
                        <h5>Phone Number:</h5>
                        <p>(559) 291-1024</p>
                    </div>
                    <div class="row">
                        <a class="waves-effect waves-light btn-large white green-text text-darken-3" style="border: 2px solid #2e7d32; font-weight:500;" href="#modal1">Request a Bid</a>
                    </div>
                </div>
            </div>
            <div id="modal1" class="modal">
                <div class="modal-content">
                 <h4>Bid Form</h4>
                  <?php require('BID.php');?>
                </div>
                <div class="modal-footer">
                  <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>

  <!-- Modal Structure -->

        <br>
    <?php require('footer.php');?>
   <script>$(document).ready(function(){
      $('.parallax').parallax();
    $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
    $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .25, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
    }
  );
    });</script>
