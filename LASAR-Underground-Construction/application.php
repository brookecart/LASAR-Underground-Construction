<?php require('navbar.php')?>

    <!--== BODY HTML CONTENT ==-->
        <div class="row large-" style="margin-top:15px;">
         <form action="form.php" method="get">
            <h1 style="font-size:60px;">Job Application</h1>
           <div class="row">
                <div class="input-field col s3">
                <input type="text" id="first-name" class="validate no-b">
                 <label for="first-name">First Name</label>

                 </div>
                 <div class="input-field col s3">
                <input type="text" id="last-name" class="validate no-b">
                 <label for="last-name">Last Name</label>
               </div>
             </div>
             <div class="row">
                 <div class="input-field col s6">
                  <input type="tel" id="phone">
                  <label for="phone">Phone Number</label>
                </div>
             </div>
              <div class="row">
                 <div class="input-field col s6">
                  <input type="email" id="email">
                  <label for="email" data-error="Invalid Email">Email</label>
              </div>
             </div>
              <div class="row">
                 <div class="input-field col s6">
                  <input type="text" id="Address">
                  <label for="Address">Address</label>
              </div>
             </div>
             <div class="row">
                 <div class="input-field col s6">
                  <input type="text" id="JobTitle">
                  <label for="JobTitle">What position are you applying for?</label>
              </div>
             </div>
              <div class="row">
                   <div class="input-field col s8">
                 <textarea id="?1" class="materialize-textarea" data-length="500"></textarea>
                    <label for="?1">Why do you want to work here?</label>
              </div>
             </div>
             <div class="row">
                   <div class="input-field col s8">
                 <textarea id="?2" class="materialize-textarea" data-length="500"></textarea>
                    <label for="?2">Give a breif summary of your credentials</label>
              </div>
             </div>
             <div class="row">
                  <label style="font-size:15px; padding-left:12px;">Please submit your resume</label>
                   <div class="input-field col s12">
                 <input type="file" id="resume">
              </div>
             </div>
             <div class="row">
                 <input type="submit" class="button lsrBorder green darken-3" style="font-size:18px;">
             </div>
         </form>
         </div>

<?php require('footer.php');?>
