<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 3.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo site_url('assets/images/favicon/favicon-32x32.png'); ?>" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('assets/images/favicon/apple-touch-icon-152x152.png'); ?>">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo site_url('assets/images/favicon/mstile-144x144.png'); ?>">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?php echo site_url('assets/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo site_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo site_url('assets/css/custom/custom.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo site_url('assets/css/layouts/page-center.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo site_url('assets/js/plugins/prism/prism.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo site_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <?php echo form_open(); ?>
        <input name="redirect" type="hidden" value="<?php echo isset($redirect) && html_escape($redirect) ? $redirect : ''; ?>">
        <div class="row margin">
          <?php echo validation_errors(); ?>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" name="email" type="text">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" name="submit" value="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/jquery-1.11.2.min.js'); ?>"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo site_url('assets/js/materialize.js'); ?>"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/prism/prism.js'); ?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins.js'); ?>"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/custom-script.js'); ?>"></script>

</body>

</html>