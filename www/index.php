<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MapleSyrup</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">

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
  .device-container .page-container .page-item h2 small { color:#FFF; }
  .device-container .page-container .page-item .content { padding:20px; }
  .device-container .page-container .page-item.loading { position: relative; }
  .device-container .page-container .page-item.loading::before {
    content:""; left:0; position:absolute; width:100%; height:100%; background:rgba(255,255,255,0.8);
  }
  input { background:#FFFACE;  border:1px solid #CCC; margin:0 0 10px 0; }
  .subjects { width:100%; float:left; padding:0; margin:-20px 0 0 0; }
  .subjects li { cursor: pointer; width:100%; float:left; padding:10px 10px; border-bottom:1px solid #CCC; margin:0; }
  .subjects li:hover { background:rgba(200,200,200,0.5); }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="device-container">
        <div class="page-container animated bounceInDown">
          <div class="page-item login-box">
            <h2><strong>Maple</strong>Syrup</h2>
            <div class="content">
              <form method="post" class="login-form">
                <div class="form-group"><input type="email" class="form-control" placeholder="Email address" /></div>
                <div class="form-group"><input type="password" class="form-control" placeholder="Password" /></div>
                <div class="clear"></div>
                <label for="rememberme"><input id="rememberme" name="rememberme" type="checkbox"> Remember me</label>
                <button type="button" style="float:right;" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
          <div class="page-item subject-list" style="display:none" >
            <h2><strong>Maple</strong>Syrup: <small>Subjects</small></h2>
            <ul class="subjects">
              <li>Subject 1</li>
              <li>Subject 2</li>
              <li>Subject 3</li>
              <li>Subject 4</li>
              <li>Subject 5</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

    $('.login-form button').on('click',function() {

      $('.page-item.login-box').addClass('loading');
      setTimeout(function() {
        $('.page-item.login-box').removeClass('loading');
        $('.page-container').addClass('fadeOutLeftBig');
        setTimeout(function() {
          $('.page-item.login-box').hide();
          $('.page-item.subject-list').show();
          $('.page-container').removeClass('fadeOutLeftBig bounceInDown').addClass('bounceInRight');
        },1000)
      },500);
    })
  </script>
</body>
</html>
