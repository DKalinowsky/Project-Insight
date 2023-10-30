<!DOCTYPE HTML>
<html lang="pl">
<head>
  <script type="text/javascript"
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Insight</title>
<link rel="stylesheet" href="style.css">
<style>
    * {
      box-sizing: border-box;
    }
    
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }
    
    input[type=submit] {
      background-color: #333;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }
    
    input[type=submit]:hover {
      background-color: #ffffff;
      color: black;
    }
    
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }
    
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
    </style>
</head>
<body>
    <header>
        <img src="Preview Insight.jpg" alt="IMG1">
    </header>
    <div class="topnav" id="myTopnav">
      <div class="mode">
        Dark mode:            
        <span class="change">OFF</span>
    </div>
        <a href="Insight.php" class="active">Insight - Home</a>
        <a href="OFirmie.php">About Us</a>
        <a href="Oferta.php">FeedBack</a>
        <a href="Kontakt.php">Contact</a>
        <a href="CheckIt.php">Check it out</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <script type="text/javascript">
        $(function () {
            $('a').click(function () {
                $('body').load($(this).attr('href'));
                return false;
            });
    });
    </script>
      <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script>
  $(document).ready(function(){
    $("input[type=submit]").mouseover(function(){
      $("input[type=submit]").css("background-color", "lightgrey");
      $("input[type=submit]").css("width", "100%");
      $("input[type=submit]").css("height", "100%");
    });
    $("input[type=submit]").mouseout(function(){
      $("input[type=submit]").css("background-color", "black");
      $("input[type=submit]").css("width", "auto");
      $("input[type=submit]").css("height", "auto");
    });
  });
  </script>
    <details>
        <summary>Give us feedback about our site</summary>
        <h3>Give us feedback about our site</h3>
    <label for="rangeinput">How do you rate our site ?</label>
    <input id="rangeinput" type="range" min="0" max="10" value="5" onchange="rangevalue.value=value"></input>
    Current value:
    <output id="rangevalue">5</output>
    <br></br>
    <div class="container">
        <form >
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="country">Country</label>
          </div>
          <div class="col-75">
            <select id="country" name="country">
              <option value="PL">Poland</option>
              <option value="USA">USA</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">What can we change ?</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
        </form>
      </div>
        </details>
        <details>
            <summary>Do you want to join us ? Fill online recruitment survey.</summary>
            <h3>Aplication</h3>
            <div class="container">
                <form>
                <div class="row">
                  <div class="col-25">
                    <label for="fname">First Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="lname">Last Name</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="country">Department you want to apply for:</label>
                  </div>
                  <div class="col-75">
                    <select id="dep" name="dep">
                      <option value="Laboratory">Laboratory</option>
                      <option value="IT">IT</option>
                      <option value="Administration">Administration</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="number">Phone Number</label>
                    </div>
                    <div class="col-75">
                      <input type="number" id="nm" name="number" placeholder="Your phone number..">
                    </div>
                  </div>
                <div class="row">
                    <div class="col-25">
                      <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                      <input type="email" id="email" name="email" placeholder="Your email adress..">
                    </div>
                  </div>
                <div class="row">
                  <div class="col-25">
                    <label for="subject">Why should we hire you ?</label>
                  </div>
                  <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  </div>
                </div>
                <br>
                Send us your résumé
                <input type="file" name="nazwa">
                <div class="row">
                  <input type="submit" value="Submit">
                </div>
                </form>
              </div>
            <form>
        </details>
    </section>
    <script>
      $( ".change" ).on("click", function() {
          if( $( "body" ).hasClass( "dark" )) {
              $( "body" ).removeClass( "dark" );
              $( ".change" ).text( "OFF" );
          } else {
              $( "body" ).addClass( "dark" );
              $( ".change" ).text( "ON" );
          }
      });
    </script>
    <script>
      $(document).keypress(function(e){
        var key = e.which;
        if (key == 32) {
            $("img").hide();
            $("nav").hide();
            $("p").hide();
            $("h1").hide();
            alert("You are entering DeepWeb");
            $("body").addClass("hidden");
        }
        else if (key == 13) {
            $("img").hide();
            $("nav").hide();
            $("p").hide();
            $("h1").hide();
            alert("You are entering DarkWeb");
            $("body").addClass("hidden");
        }
        else {
            alert("You are entering SurfaceWeb");
            $("body").removeClass("hidden");
            $("img").show();
            $("nav").show();
            $("p").show();
            $("h1").show(); 
        }
    });
    </script>
    <footer>
    <p>Dawid Kalinowski © 2022</p>
    </footer>
</body>
<script src="code.js"></script>
</html>