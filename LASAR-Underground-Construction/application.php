<?php require('navbar.php')?>

<div class="parallax-container" style="width: 100%">
          <div class="parallax">
            <img src="img/IMG_1564.jpeg" alt="Space" style="display:block">
          </div>
        </div>

    <!--== BODY HTML CONTENT ==-->

   <div class="row center-align container">
    <h1 class="hide-on-small-only">Employment</h1>
    <h3 class="hide-on-med-and-up">Employment</h3>
    </div>

    <div style="padding-bottom: 30px;" class="container s12">
             <p class="flow-text">LASAR Undergound Consttruction, Inc. takes safety very seriously. We ensure all employees are educated in OSHA safety practices. Each employee gets a copy of the Safety and Illness Prevention Guide which is in all new employee packages. Employees are required to read, understand, and obey the practices of the guide. All employees undergo drug testing. LASAR Undergound Construction, Inc. conducts quarterly safety meetings with all staff. Our supervisors, foremen, and laborers also hold weekly "tailgate" meetings to review and address any new specific safety concerns or updates.<b> LASAR Underground Construction, Inc. is an equal opporunity employer.</b></p>
         </div>

 <ul style="margin-bottom: 70px;" class="collection container">

    <li class="collection-item avatar">
        <a href="#modal2"><i class="material-icons circle green">work</i></a>
        <span class="title">Job Title</span>
        <p>Short job description</p>
        <a class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
        <a href="#modal2"><i class="material-icons circle green">work</i></a>
        <span class="title">Job Title</span>
        <p>Short job description</p>
        <a class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
        <a href="#modal2"><i class="material-icons circle green">work</i></a>
        <span class="title">Job Title</span>
        <p>Short job description</p>
        <a class="secondary-content"><i class="material-icons">grade</i></a>
    </li>

    <li class="collection-item avatar">
        <a href="#modal2"><i class="material-icons circle green">work</i></a>
        <span class="title">Job Title</span>
        <p>Short job description</p>
        <a class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>

    <div id="modal2" class="modal">
        <div class="modal-content">
         <h4>Application Form</h4>
          <?php require('app-form.php');?>
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
