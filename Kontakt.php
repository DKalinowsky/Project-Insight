<!DOCTYPE HTML>
<html lang="pl">
<head>
  <script type="text/javascript"
  src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Insight</title>
<link rel="stylesheet" href="style.css">
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
        <tr><a href="Insight.php" class="active">Insight - Home</a></tr>
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
<section id="main1">
    <a href="https://www.facebook.com/">Facebook</a><br></br>
    <a href="https://www.instagram.com/">Instagram</a><br></br>
    <a href="https://www.twitter.com/">Twitter</a><br></br>
    <a href="https://pl.linkedin.com/">LinkedIn</a><br></br>
    <a href="https://github.com/">GitHub</a><br></br>
    </section>
    <footer>
    <p>Dawid Kalinowski © 2022</p>
    </footer>
</body>
</html>