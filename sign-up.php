	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<html>
<link rel="stylesheet" href="cloudStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
<script>
$('.ui.dropdown')
  .dropdown()
;
</script>
<style type="text/css">

.signup-colorblocktop {
  padding-top: 100px;

  -webkit-animation: fadeInRight 2s;
  animation: fadeInRight 2s;
}

.signup-center.text {
  color: white;
  font-family: 'Questrial', sans-serif;
  text-align: center;
}
  .signup-background {
  background: url("https://images.unsplash.com/photo-1503582490911-31f54e0b9783?auto=format&fit=crop&w=800&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") no-repeat center center fixed;
  background-size: cover;
  min-height: 600px;
  opacity: 0.8;
}

  </style>
  <div class="ui borderless inverted top fixed menu">
    <div class="ui container">
      <a href="index.html" class="item">
        Home
      </a>
    </div>
  </div>

 <body style="padding-top: 56px;">
  <div class="signup-background" style="padding-top: 56px;">
    <div class="ui container signup-colorblocktop">
      <div class="ui centered grid">
        <div class="column" style="max-width: 450px">
          <h2 class="ui white header">
            <div class="signup-center text">
              Signup
            </div>
          </h2>
          <form id="create" action="sign-up.php" class="ui large form" method="POST">
            <div class="ui stacked segment">
              <div class="field">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input type="text" id="username" name="username" placeholder="Username">
                </div>
              </div>
              <div class="field">
                <div class="ui left icon input">
                  <i class="lock icon"></i>
                  <input type="text" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <input type="submit" name="Signup" style="background-color: #2f3946;">
            </div>
          </form>
        </div>
      </div>
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
      </div>
    </div>
  </div>
</body>
<!--
    <form id="create" action="sign-up.php" method="POST">
Username: <input type="text" id="username" name="username"><br>
Password: <input type="text" id="password" name="password"><br>
<input type="submit" name="Signup">
</form> -->
</html>
