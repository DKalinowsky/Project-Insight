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
    /* Center the loader */
    #loader {
      position: absolute;
      left: 50%;
      top: 50%;
      z-index: 1;
      width: 120px;
      height: 120px;
      margin: -76px 0 0 -76px;
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }
    
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    /* Add animation to "page content" */
    .animate-bottom {
      position: relative;
      -webkit-animation-name: animatebottom;
      -webkit-animation-duration: 1s;
      animation-name: animatebottom;
      animation-duration: 1s
    }
    
    @-webkit-keyframes animatebottom {
      from { bottom:-100px; opacity:0 } 
      to { bottom:0px; opacity:1 }
    }
    
    @keyframes animatebottom { 
      from{ bottom:-100px; opacity:0 } 
      to{ bottom:0; opacity:1 }
    }
    
    #myDiv {
      display: none;
      text-align: center;
    }
    </style>
</head>
<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>
    
    <div style="display:none;" id="myDiv" class="animate-bottom">
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
        <h1>Our roll-out</h1>
        <p>This large-scale, complex project is being implemented in several stages.

            Phase One (minimum viable platform) – 2021
            
            The first phase of the development of the INSIGHT platform was launched in June 2020 with an enhanced level of connected data sources, outputs and insights.
            
            Data sources – all priority internal INTERPOL data sources;
            INSIGHT tools and techniques – entity identification and extraction, translation, network and geographical analysis;
            Output – enhanced operational and strategic analysis.
            Phase Two (enhanced platform) – 2022-2023
            
            The second phase of development of the INSIGHT platform will expand the scope and functionalities in order to provide more in-depth analysis to member countries.
            
            Data sources – additional sources and types of data
            INSIGHT tools and techniques – exploitation of larger and more complex datasets, augmenting features and functionalities by integrating even more modern technologies
            Output – advanced analytics.
            Phase Three (target platform) – 2024-2026
            
            In the final phase, the platform will reach its full capability, incorporating all internal and relevant external data sources and advanced technologies to offer the highest quality of analytical products possible.
            
            Data sources – all internal sources, external sources such as commercial databases, etc.
            INSIGHT tools and techniques – visual, video, audio recognition, facial and bio-data matching; continuous improvement of the implemented modern technologies.
            Output – advanced and predictive analytics.
            Ultimately, the new INSIGHT platform will mean that INTERPOL can provide its member countries with the best support for their investigations in a world where organized criminal networks cross borders, span the physical-digital divide, and exploit advanced technologies to both further and hide their activities..</p>
        </section>
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
    </div>
    
    <script>
    var myVar;
    
    function myFunction() {
      myVar = setTimeout(showPage, 3000);
    }
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
    </script>
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
    <p>Copyright Dawid Kalinowski © 2022</p>
    </footer>
</body>
<script src="code.js"></script>
</html>