<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  html, body { height: 100%; }
  body {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#606c88+0,3f4c6b+100;Grey+3D+%232 */
    background: #606c88; /* Old browsers */
    background: -moz-linear-gradient(top, #606c88 0%, #3f4c6b 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, #606c88 0%,#3f4c6b 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, #606c88 0%,#3f4c6b 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606c88', endColorstr='#3f4c6b',GradientType=0 ); /* IE6-9 */
  }
  .device-container { margin:40px auto 0 auto; display:flex; flex-direction: column; justify-content: center; align-content:center; align-items: center; width:320px; }
  .device-container .page-container {
    border-radius: 5px; overflow:hidden; float:left; width:100%;  width:320px; background:#FFF;
    -webkit-box-shadow: 0px 0px 43px -21px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 43px -21px rgba(0,0,0,0.75); box-shadow: 0px 0px 43px -21px rgba(0,0,0,0.75);
  }
  .device-container .page-container .page-item { float:left; width:100%; }
  .device-container .page-container .page-item h2 { font-weight:normal; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; margin:0 0 20px 0; color:#FFF; background:#329CC3; width:100%; line-height: 1em; padding:5px 10px 10px 10px; float:left; }
  .device-container .page-container .page-item .content { padding:20px; }
  input { background:#FFFACE;  border:1px solid #CCC; margin:0 0 10px 0; }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="device-container">
        <div class="page-container">
          <div class="page-item login-box">
            <h2><strong>Maple</strong>Syrup</h2>
            <div class="content">
              <form method="post" class="login">
                <div class="form-group"><input type="email" class="form-control" placeholder="Email address" /></div>
                <div class="form-group"><input type="password" class="form-control" placeholder="Password" /></div>
                <div class="clear"></div>
                <label for="rememberme"><input id="rememberme" name="rememberme" type="checkbox"> Remember me</label>
                <button type="button" style="float:right;" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
