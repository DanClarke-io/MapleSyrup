<!DOCTYPE html>
<html lang="en">
<head>


  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MapleSyrup</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">

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
  .device-container { margin:40px auto 0 auto; display:flex; flex-direction: column-reverse; justify-content: center; align-content:center; align-items: center; width:320px; }
  .device-container .page-container {
    top:0;
    border-radius: 5px; overflow:hidden; float:left; width:100%;  width:320px; background:#FFF;
    -webkit-box-shadow: 0px 0px 43px -21px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 43px -21px rgba(0,0,0,0.75); box-shadow: 0px 0px 43px -21px rgba(0,0,0,0.75);
  }
  .device-container .page-container .page-item { float:left; width:100%; }
  .device-container .page-container .page-item h2 { font-weight:normal; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; margin:0 0 20px 0; color:#FFF; background:#329CC3; width:100%; line-height: 1em; padding:5px 10px 10px 10px; float:left; }
  .device-container .page-container .page-item h2 small { color:#FFF; }
  .device-container .page-container .page-item h3 { padding:0 10px; margin:0; float:left; width:100%; background:#CCC;  border-top:1px solid #888; border-bottom:1px solid #888; }
  .device-container .page-container .page-item .content { padding:20px; }
  .device-container .page-container .page-item.loading { position: relative; }
  .device-container .page-container .page-item.loading::before {
    content:""; left:0; position:absolute; width:100%; height:100%; background:rgba(255,255,255,0.8);
  }
  input { background:#FFFACE;  border:1px solid #CCC; margin:0 0 10px 0; }
  .subjects { width:100%; float:left; padding:0; margin:-20px 0 0 0; }
  .subjects li { cursor: pointer; width:100%; float:left; padding:10px 10px; border-bottom:1px solid #CCC; margin:0; }
  .subjects li:after { content: "\f054"; font-family: 'FontAwesome'; float:right; }
  .subjects li:hover { background:rgba(200,200,200,0.5); }

  .keyfact-box textarea { width:100%; }

  .add-line { padding:10px; float:left; width:100%; }

  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="device-container">

        <div class="page-container login-container animated bounceInDown">
          <div class="page-item login-box">
            <h2><strong>Maple</strong>Syrup</h2>
            <div class="content">
              <form method="post" class="login-form">
                <div class="form-group"><input name="login-email" type="email" class="login-email form-control" placeholder="Email address" /></div>
                <div class="form-group"><input name="login-password" type="password" class="login-password form-control" placeholder="Password" /></div>
                <div class="clear"></div>
                <label for="rememberme"><input id="rememberme" name="rememberme" type="checkbox"> Remember me</label>
                <button type="button" style="float:right;" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>
        <div class="page-container animated subject-container" style="display:none;">
          <div class="page-item subject-box">
            <h2><strong>Maple</strong>Syrup: <small>Subjects</small></h2>
            <ul class="subjects">
              <li>Subject 1</li>
              <li>Subject 2</li>
              <li>Subject 3</li>
              <li>Subject 4</li>
              <li>Subject 5</li>
            </ul>
            <div class="add-line"><button class="btn btn-primary">Add subject</button></div>
            <div class="add-box"></div>
          </div>
        </div>

        <div class="page-container animated subject-object-container" style="display:none;">
          <div class="page-item subject-object-box">
            <h2><strong>Maple</strong>Syrup: <small>Subject</small></h2>
            <ul class="subjects">
              <li>To add a bold tag, you use &lt;b&gt;</li>
              <li>To add a italic tag, you use &lt;em&gt;</li>
              <li>To add a paragraph tag, you use &lt;p&gt;</li>
              <li>To add a video tag, you use &lt;video&gt; and &lt;source&gt;</li>
              <li>To add a img tag, you use &lt;img src="yourvideo" /&gt;</li>
            </ul>
            <div class="add-line"><button class="btn btn-primary">Add note</button></div>
            <div class="add-box"></div>
          </div>
        </div>

        <div class="page-container animated keyfact-container" style="display:none;">
          <div class="page-item keyfact-box">
            <h2><strong>Maple</strong>Syrup</h2>
            <div class="content">
              <div class="form-group">
                <label for="keyfact-header">Key fact</label>
                <textarea class="form-control keyfact-header" name="keyfact-header" id="keyfact-header" disabled>Keyfact title</textarea>
              </div>
              <div class="form-group">
                <label for="explanation">Explanation</label>
                <textarea class="form-control keyfact-explanation" disabled>I figured this out because I'm awesome.</textarea>
              </div>
              <div class="form-group">
                <label for="explanation">Citation</label>
                <textarea class="form-control keyfact-citation" disabled>I figured this out because I'm awesome.</textarea>
              </div>
            </div>
            <div class="add-line"><button class="btn btn-primary">Edit</button></div>
            <div class="add-box"></div>
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
    //$('.page-container').show();
    $('.page-container.subject-container ul').on('click','li',function() {
      var title = $(this).html();
      var container = $(this);
      var subjectId = $(this).attr('data-id');
      $.ajax({
        url:'query.php',
        method:'POST',
        data:{'act':'notes','id':subjectId}
      }).done(function(data) {
        $('.page-item.login-box').removeClass('loading');
        if(data.response=='error') { $(container).append('<div style="">'+data.message+'</div>'); }
        else {
          $('.page-container.subject-object-container ul.subjects li').remove();
          $(data.data).each(function(x,e) {
            $('.page-container.subject-object-container ul.subjects').append('<li data-id="'+e.id+'">'+e.title+'</li>');
          })
          $('.page-container.subject-container').addClass('fadeOutLeftBig');
          setTimeout(function() {$('.page-item.subject-box').hide();},700);
          setTimeout(function() {$('.page-container.subject-object-container').show().addClass('bounceInRight');},200);
        }
      })

    });
    $('.page-container.subject-container .add-line button').on('click',function() {
      console.log('test');
      $('.add-box',$(this).parent().parent()).append('<div class="form-group"><input type="text" class="form-control subject-name" placeholder="Subject name" />');
    })
    $('.page-container.subject-object-container').on('click','li',function() {
      var title = $(this).text();
      var container = $(this);
      var noteId = $(this).attr('data-id');
      $.ajax({
        url:'query.php',
        method:'POST',
        data:{'act':'note','id':noteId}
      }).done(function(data) {
        $('.page-item.login-box').removeClass('loading');
        if(data.response=='error') { $(container).append('<div style="">'+data.message+'</div>'); }
        else {
          $('.page-container.keyfact-container textarea.keyfact-header').val(data.data[0].title);
          $('.page-container.keyfact-container textarea.keyfact-explanation').val(data.data[0].explanation);
          $('.page-container.keyfact-container textarea.keyfact-citation').html(data.data[0].source);
          $('.page-container.subject-object-container').addClass('fadeOutLeftBig');
          setTimeout(function() {$('.page-item.subject-object-box').hide();},700);
          setTimeout(function() {$('.page-container.keyfact-container').show().addClass('bounceInRight');},200);
        }
      })
    });
    $('.login-form button').on('click',function() {
      $('.page-item.login-box').addClass('loading');
      $.ajax({
        url:'query.php',
        method:'POST',
        data:{'act':'login','email':$('.page-item.login-box input.login-email').val(),'password':$('.page-item.login-box input.login-password').val()}
      }).done(function(data) {
        $('.page-item.login-box').removeClass('loading');
        if(data.response=='error') { $('form.login-form').append('<div style="">'+data.message+'</div>'); }
        else {
          $('.page-container.login-container').addClass('fadeOutLeftBig');
          setTimeout(function() {$('.page-item.login-box').hide();},700);
          setTimeout(function() {
            $('.page-container.subject-container ul.subjects li').remove();
            $(data.data).each(function(x,e) {
              $('.page-container.subject-container ul.subjects').append('<li data-id="'+e.id+'">'+e.name+'</li>');
            })
            $('.page-container.subject-container').show().addClass('bounceInRight');
          },200);
        }
      })
    })
  </script>
</body>
</html>
