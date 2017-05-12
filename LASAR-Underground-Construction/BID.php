<?php require('navbar.php');?>
    <!--== BODY HTML CONTENT ==-->
        <div class="row large-" style="margin-top:15px;">
         <form action="form.php" method="get">
            <h1 style="font-size:60px;">Request a Bid</h1>
           <div class="row">
                <div class="input-field col s6">
                <input type="text" id="Company" class="validate">
                <label for="Company">Company</label>
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
                  <input type="text" id="Job">
                  <label for="Job">Bid Title</label>
              </div>
             </div>
             <div class="row">
                 <div class="input-field col s6">
                  <input type="text" id="BidLocation">
                  <label for="BidLocation">Bid Location</label>
              </div>
             </div>
              <div class="row">
                   <div class="input-field col s12">
                 <textarea id="jobDesc" class="materialize-textarea" data-length="500"></textarea>
                    <label for="jobDesc">Bid Description</label>
              </div>
             </div>
             <div class="row">
                 <input type="submit" class="button lsrBorder green darken-3" style="font-size:18px;">
             </div>
         </form>
         </div>
<?php require('footer.php');?>