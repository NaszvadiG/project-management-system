<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Project Management System</title>
    <link rel="icon" href="<?php echo base_url()?>img/favicon.ico" type="image/gif">
    <meta name="author" content="Srinu Basava">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <script src="/PMS/js/html5-trunk.js"></script>
    <link href="/PMS/icomoon/style.css" rel="stylesheet">
    <link href="/PMS/css/main.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
          <div class="signin">
              <?php echo $this->session->flashdata('notification'); ?>

            <form action="<?php echo site_url('login/index'); ?>" class="signin-wrapper" method="post">
              <div class="content">
                  <img src="<?php echo base_url() ?>img/logo.jpg"/>
                <input class="input input-block-level" name="email" placeholder="Email" type="email" value="">
                <input class="input input-block-level" name="pwd" placeholder="Password" type="password">

                <input type="hidden" name="trigger" value="do_login" />
              </div>
              <div class="actions">
                                  <a href="index.html" class="pull-left">Forgot Password</a>
                <input class="btn btn-info pull-right" type="submit" value="Login">
<!--                <span class="checkbox-wrapper">
                  <a href="index.html" class="pull-left">Forgot Password</a>
                </span>-->
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <script src="/PMS/js/jquery.min.js"></script>
    <script src="/PMS/js/bootstrap.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-41161221-1', 'srinu.me');
      ga('send', 'pageview');

    </script>
  </body>
</html>