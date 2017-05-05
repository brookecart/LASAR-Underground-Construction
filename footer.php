<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LASAR Underground</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="cone.png" />
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  </head>
      <body class="lsr-body">
       <div class="lsr-over">
<div class="wrapper large-7 lsr-wrapper">
 <div class=".position-left column small-5">
<form action="form.php" method="get">
<div class="row">
                <label for="Firstname" class="column small-5">
                    <h5>First Name</h5>
                 </label>
              <input type="text" name="FirstName" class="column small-5"> 
            </div>
                <!-- function of this item -->
            <div class="row">
                 <label for="Lastname" class="column small-5">
                    <h5>Last Name</h5>
                 </label>
                <input type="text" name="LastName" class="column small-5"> 
             </div>
             
             <div class="row">
                  <label for="phone" class="column small-5">
                      <h5>Phone Number</h5>
                  </label>
                  <input type="tel" name="phone" class="column small-5">
              </div>
              
              <div class="row">
              <label for="email" class="column small-5">
                  <h5>Email</h5>
              </label>
              <input type="email" name="email" class="column small-5"> <br>
              </div>
               <!-- radios = more then one option -->
             <input type="radio" name="color" value="red"> Red <br>
             <input type="radio" name="color" value="blue"> Blue <br>
             <input type="radio" name="color" value="magenta">Pink <br> <br>
               <!-- multiple lets you select more then onw thing, select alone only allows one -->
             <select name="best Gem" multiple>
                <!--  these are the options for the select -->
                 <option value="P">Pearl</option>
                 <option value="G">Garnet</option>
                 <option value="A">Amythest</option>
                 <option value="S">Steven</option>
                 <option value="L">Lapis</option>
                 <option value="P">Peridot</option>
                 
             </select>  <br><br>
             <!-- its a checkbox man -->
             <input type="checkbox" value="op1" checked> option 1 <br>
             <input type="checkbox" value="op2"> option 2  <br>
             <input type="checkbox" value="op3"> option 3 <br>    <br> 
             
             <label for="text"> My text:</label> <br>
              <!-- its just text -->
             <textarea name="text" cols ="30" rows="10">
             </textarea>  <br> <br>
               <!-- normal button -->
             <button type="button" name="ClickMe" value="clicked" onclick="alert('Stop pushing my button!')"> Click Me!</button> <br> <br>
             
             <button type="reset">Reset</button>
             
             <input type="submit">
         </form>
         </div>
         </div>
         </div>
<footer>
    <div class="footer" class="wrap row small-up-1 medium-up-4">
        <div class="column">
            <br>
            <h5> LASAR Underground Construction</h5>
            <hr>
            <p>Designed and developed by CART Group 6</p>
        </div>
        
        <div class="column">
            <p>We proudly service some of the leading companies in the Fresno Area.</p>
            <hr>
            <ul>
                <li>AT&amp;T Communications</li>
                <li>Beal Properties</li>
                <li>City of Clovis</li>
                <li>City of Fresno</li>
                <li>Fresno Flood Control District</li>
                <li>Gerawan Farming</li>
                <li>Moser Electric</li>
            </ul>
        </div>
        
        <div class="column">
            <p><span>EMAIL</span> undergroundemail@email.com</p>
            <p><span>PHONE</span> 559.291.0124</p>
            <p><span>FAX</span> 559.291.0624</p>
        </div>
        
        <div class="column">
            <br>
            <h5>LOCATIONS</h5>
            <hr>
            <p>2545 N. Sunnyside Ave.</p>
        </div>
    </div>
</footer>
   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>   
    
    </body>
</html>