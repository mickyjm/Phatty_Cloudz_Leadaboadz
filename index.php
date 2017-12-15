	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> <html>

<head>

  <title>Welcome to da Leaderboardz</title>
  <link rel="stylesheet" href="cloudStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>

  <style type="text/css">
    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }

    .masthead .logo.item img {
      margin-right: 1em;
    }

    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }

    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }

    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }

    .ui.vertical.stripe h3 {
      font-size: 2em;
    }

    .ui.vertical.stripe .button+h3,
    .ui.vertical.stripe p+h3 {
      margin-top: 3em;
    }

    .ui.vertical.stripe .floated.image {
      clear: both;
    }

    .ui.vertical.stripe p {
      font-size: 1.33em;
    }

    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }

    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }
  </style>

  <script>
    $(document)
      .ready(function() {
        // fix menu when passed
        $('.masthead')
          .visibility({
            once: false,
            onBottomPassed: function() {
              $('.fixed.menu').transition('fade in');
            },
            onBottomPassedReverse: function() {
              $('.fixed.menu').transition('fade out');
            }
          });
        // create sidebar and attach to menu open
        $('.ui.sidebar')
          .sidebar('attach events', '.toc.item');
      });

  </script>

</head>

<body>
    
  <!-- Following Menu -->
  <div class="ui large top fixed hidden menu">
    <div class="ui container">
      <a class="item">Home</a>
      <a href="about_us.php" class="item">About Us</a>
      <a class="item">Regions</a>

      <div class="right menu">
        <div class='item'><a href='login.php' class='ui button'>Login</a></div><div class='item'><a href='sign-up.php' class='ui primary button'>Sign Up</a></div>      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <div class="ui vertical inverted sidebar menu">
    <a class="item">Home</a>
    <a href="about_us.php" class="item">About Us</a>
    <a class="item">Regions</a>

    <a href="login.php" class="item">Login</a>
    <a href="sign-up.php" class="item">Signup</a>
  </div>


  <!-- Page Contents -->
  <div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

      <div class="ui container">
        <div class="ui large secondary inverted pointing menu">
          <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
          <a class="item">Home</a>
          <a href="about_us.php" class="item">About Us</a>
          <a class="item">Regions</a>

          <div class="right item">
        <div class='item'><a href='login.php' class='ui button'>Login</a></div><div class='item'><a href='sign-up.php' class='ui primary button'>Sign Up</a></div>          </div>
        </div>
      </div>

      <div class="ui text container" style="animation-name: fadeInDown; animation-duration: 3s;">
        <h1 class="ui inverted header">
        Welcome to the Phatty Cloudz Leadaboadz!
      </h1>
        <h3></h3><br>
        <div class="ui huge primary button" style="color: white;"><a href="add_info.php" style="color: white;">Phatty Ratingz</a><i class="right arrow icon"></i></div>
      </div>

    </div>
<div class="grad-background">
    <div class="ui vertical stripe segment">
      <div class="ui middle aligned stackable grid container">
        <div class="row">
          <div class="eight wide column">
            <h3 class="ui header" style="color: white;">You think you get one Phatty Cloud? Brah put it to the test against other vapahs from around the globe! </h3>
            <p></p>
            <h3 class="ui header" style="color: white;">Lets all vape together and make one Phatty Cloud!</h3>
            <p style="color: white;">Yes that's right, even clouds can be bioengineered together</p>
          </div>
          <div class="six wide right floated column">
            <img src="https://ci.memecdn.com/9599831.jpg" alt="Vape Nation Mascot" class="ui large rounded image">
          </div>
        </div>
      </div>
    </div>
</div>

    <div class="ui vertical stripe quote segment" style="background-color: #f6f7f9;">
      <div class="ui equal width stackable internally celled grid">
        <div class="center aligned row">
          <div class="column">
            <h3>"What a Community"</h3>
            <p>That is what they all say about us</p>
          </div>
          <div class="column">
            <h3>"I've never been happier"</h3>
            <p>
              <img src="brandon.png" class="ui tiny avatar image" style="opacity: 0.8;"> satisfied phatty member
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="ui vertical stripe segment" style="background-color: #f6f7f9; min-height: 600px;">
      <div class="ui text container">
        <img class="ui left large floated rounded image" src="https://vignette.wikia.nocookie.net/kancolle/images/5/57/Vape_Salute.gif/revision/latest?cb=20161120183940" style="opacity: 0.8;">
        <h3 class="ui header">"Changed the game"</h3>
        <p>Learn how to master the art of Phatty Cloudz.</p>
        <!--
        <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
        <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
        <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
        <a class="ui large button">I'm Still Quite Interested</a>-->
      </div>
    </div>


    <div class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
          <div class="three wide column">
            <h4 class="ui inverted header">About</h4>
            <div class="ui inverted link list">
              <a href="developers.html" class="item">Developers</a>
            </div>
          </div>
          <div class="three wide column">
            <h4 class="ui inverted header">Services</h4>
            <div class="ui inverted link list">
              <a href="#" class="item">Phattys Ratingz</a>
            </div>
          </div>
          <div class="seven wide column">
          </div>
        </div>
      </div>
    </div>

  </div>
  
</body>

</html>
