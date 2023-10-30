<!DOCTYPE HTML>
<html lang="pl" id="abc">
<head>
  <script type="text/javascript"
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Insight</title>
<link rel="stylesheet" href="style.css">

</head>
<body id="body">
    <header>
        <img src="Preview Insight.jpg" alt="IMG1">
    </header>
    <div class="topnav">
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
      <nav class="nav">
        <ul>
          <li class="drop"><a href="#">Moje Konto</a>
            <ul class="dropdown">
              <li><a href="form06_post.php">Zarejestreuj się</a></li>
              <li><a href="index.php">Zaloguj się</a></li>
            </ul>
          </li>
        </ul>
      </nav>
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
$(".drop")
  .mouseover(function() {
  $(".dropdown").show(300);
});
$(".drop")
  .mouseleave(function() {
  $(".dropdown").hide(300);     
});
</script>
<script>
  $(document).keypress(function(e){
    var key = e.which;
    if (key == 32) { //spacja
        alert("You are entering SurfaceWeb");
        $("body").removeClass("hidden");
        $("img").show();
        $("nav").show();
        $("p").show();
        $("h1").show(); 
    }
    else if (key == 13) { //enter
        $("img").hide();
        $("nav").hide();
        $("p").hide();
        $("h1").hide();
        alert("You are entering DarkWeb");
        $("body").addClass("hidden");
    }
});
</script>
    <h1 id="title">Insight</h1>
    <p>The INSIGHT platform will put into the hands of its users a powerful set of tools to generate and disseminate advanced analytical products to support investigations and decision-making.

        It will leverage cutting-edge analytics with artificial intelligence, natural language processing, entity recognition and matching, machine learning, and process automation to handle the ever-growing volumes and varieties of data generated in today’s law enforcement investigations.
        
        At all times, it will operate responsibly and within INTERPOL’s rules, guidelines and policies on the use of data.</p>
        <button>Get JSON data</button><br>


  <br></br>
          <div2></div2>
          <script>
            $("button").click(function(){
                $.getJSON("https://jsonplaceholder.typicode.com/comments/1", function(data) {
                  var dane = `Uzyskane dane <br>
                              PostId: ${data.postId}<br>
                              Name: ${data.name}<br>
                              Email: ${data.email}<br>
                              <br>`
                    $("div2").html(dane);
                });
            });
            </script>
    </section>
    <footer>
    <p>Copyright Dawid Kalinowski © 2022</p>
    </footer>
</body>
<script src="code.js"></script>
</html>