<?php require('navbar.php')?>

<div class="parallax-container" style="width: 100%">
          <div class="parallax">
            <img src="img/IMG_1564.jpeg" alt="Space" style="display:block">
          </div>
        </div>

    <!--== BODY HTML CONTENT ==-->
        <div class="container" style="margin-top:15px;">
         <form action="form.php" method="get">
            <h1 class="center-align" style="font-size:60px; padding: 50px; padding-bottom: 0px;">Job Application</h1>
            <div style="padding-top: 70px;">
            <div class="row">
            <div class="col l8 m12">
            <div class="row">
                <div class="input-field col s6">
                <input type="text" id="first-name" class="validate no-b">
                 <label for="first-name">First Name</label>
                 </div>
                 <div class="input-field col s6">
                <input type="text" id="last-name" class="validate no-b">
                 <label for="last-name">Last Name</label>
               </div>
             </div>
               <div class="row">
                 <div class="input-field col s5">
                  <input type="tel" id="phone">
                  <label for="phone">Phone Number</label>
                </div>
                 <div class="input-field col s7">
                  <input type="email" id="email">
                  <label for="email" data-error="Invalid Email">Email</label>
              </div>
             </div>
              <div class="row">
                 <div class="input-field col s12">
                  <input type="text" id="Address">
                  <label for="Address">Address</label>
              </div>
             </div>
             <div class="row">
                 <div class="input-field col s12">
                  <input type="text" id="JobTitle">
                  <label for="JobTitle">What position are you applying for?</label>
              </div>
             </div>
              <div class="row">
                   <div class="input-field col s12">
                 <textarea id="?1" class="materialize-textarea" data-length="500"></textarea>
                    <label for="?1">Why do you want to work here?</label>
              </div>
             </div>
             <div class="row">
                   <div class="input-field col s12">
                 <textarea id="?2" class="materialize-textarea" data-length="500"></textarea>
                    <label for="?2">Give a breif summary of your credentials</label>
              </div>
             </div>
             <div class="row">
                 <button class="btn waves-effect waves-light green darken-3" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
             </div>
            </div>
                <div class="col s3 hide-on-med-and-down">
                    <blockquote style="border-left: 5px solid #2e7d32;">
                    LASAR Undergound Consttruction, Inc. takes safety very seriously. We ensure all employees are educated in OSHA safety practices. Each employee gets a copy of the Safety and Illness Prevention Guide which is in all new employee packages. Employees are required to read, understand, and obey the practices of the guide. All employees undergo drug testing. LASAR Undergound Construction, Inc. conducts quarterly safety meetings with all staff. Our supervisors, foremen, and laborers also hold weekly "tailgate" meetings to review and address any new specific safety concerns or updates.<b> LASAR Underground Construction, Inc. is an equal opporunity employer.</b>
                    </blockquote>
                </div>
            </div>
            </div>
         </form>
         <div style="padding-bottom: 70px;" class="s12 row hide-on-large-only">
             <p>LASAR Undergound Consttruction, Inc. takes safety very seriously. We ensure all employees are educated in OSHA safety practices. Each employee gets a copy of the Safety and Illness Prevention Guide which is in all new employee packages. Employees are required to read, understand, and obey the practices of the guide. All employees undergo drug testing. LASAR Undergound Construction, Inc. conducts quarterly safety meetings with all staff. Our supervisors, foremen, and laborers also hold weekly "tailgate" meetings to review and address any new specific safety concerns or updates.<b> LASAR Underground Construction, Inc. is an equal opporunity employer.</b></p>
         </div>
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
