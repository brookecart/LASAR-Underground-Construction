<?php require('navbar.php')?>

<div class="parallax-container" style="width: 100%">
          <div class="parallax">
            <img src="img/IMG_1564.jpeg" alt="Space" style="display:block">
          </div>
        </div>

    <!--== BODY HTML CONTENT ==-->

   <div class="row center-align container">
    <h1 class="hide-on-small-only">Job Application</h1>
    <h1 class="hide-on-med-and-up">Job App.</h1>
    </div>

            <div style="padding-bottom: 30px;" class="container row">
                <div class="col l5 s12">
                    <?php require('app-form.php');?>
                </div>
</div>
                <div class="col s4 hide-on-med-and-down">
                    <blockquote style="border-left: 5px solid #2e7d32;">
                    LASAR Undergound Consttruction, Inc. takes safety very seriously. We ensure all employees are educated in OSHA safety practices. Each employee gets a copy of the Safety and Illness Prevention Guide which is in all new employee packages. Employees are required to read, understand, and obey the practices of the guide. All employees undergo drug testing. LASAR Undergound Construction, Inc. conducts quarterly safety meetings with all staff. Our supervisors, foremen, and laborers also hold weekly "tailgate" meetings to review and address any new specific safety concerns or updates.<b> LASAR Underground Construction, Inc. is an equal opporunity employer.</b>
                    </blockquote>
                </div>
         <div style="padding-bottom: 30px;" class="container s12 hide-on-large-only">
             <p class="flow-text">LASAR Undergound Consttruction, Inc. takes safety very seriously. We ensure all employees are educated in OSHA safety practices. Each employee gets a copy of the Safety and Illness Prevention Guide which is in all new employee packages. Employees are required to read, understand, and obey the practices of the guide. All employees undergo drug testing. LASAR Undergound Construction, Inc. conducts quarterly safety meetings with all staff. Our supervisors, foremen, and laborers also hold weekly "tailgate" meetings to review and address any new specific safety concerns or updates.<b> LASAR Underground Construction, Inc. is an equal opporunity employer.</b></p>
         </div>

<?php require('footer.php');?>
   <script>$(document).ready(function(){
      $('.parallax').parallax();
    $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
    });</script>
