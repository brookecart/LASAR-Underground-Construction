<!doctype html>
 <html class="no-js" lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LASER Underground</title>
     <link rel="stylesheet" href="css/app.css">
     <link rel="shortcut icon" type="image/x-icon" href="cone.png" />
     <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
       <link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="css/materialize.min.css">
   </head>
    <body>
     <div class="wrapper">
        <div class="row">
         <form action="form.php" method="get">

           <div class="row">
                <div class="input-field col s6">
                <input type="text" id="first-name" class="validate">
                 <label for="first-name">First Name</label>
                 
                 </div>
                 <div class="input-field col s6">
                <input type="text" id="last-name" class="validate">
                 <label for="last-name">Last Name</label>
               </div>
             </div>
             
             <div class="row">
                 <div class="input-field col s12">
                  <input type="tel" id="phone">
                  <label for="phone">Phone Number</label>
              </div>
             </div>
              <div class="row">
                 <div class="input-field col s12">
                  <input type="email" id="email">
                  <label for="email" data-error="Invalid Email">Email</label>
              </div>
             </div>
              <div class="row">
                 <div class="input-field col s12">
                  <input type="text" id="subj">
                  <label for="subj">Subject</label>
              </div>
             </div>
              <div class="row">
                   <div class="input-field col s12">
                 <textarea id="message" class="materialize-textarea" data-length="300"></textarea>
                    <label for="message">Message</label>
                  <button class="btn waves-effect waves-light center-align" type="submit" name="action" style="background-color: #2E7D32;">Submit
                    <i class="material-icons right">send</i>
                  </button>
              </div>
             </div>
         </form>
         </div>
         </div>
