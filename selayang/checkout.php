<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// This file demonstrates a basic checkout page

// If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>QuickTime Delivery - Shopping Cart</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../bootstrap.css" rel="stylesheet">
     <!-- Le javascript-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="topbar-inner">
        <div class="container-fluid">
          <a class="brand" href="../">QuickTime Delivery</a>
          <ul class="nav">
            <li><a href="../">Home</a></li>
            <li><a href="../aboutus.html">About Us</a></li>
             <li><a data-controls-modal="modal-from-dom" data-backdrop="true" data-keyboard="true">Contact Us</a></li>
          
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="sidebar">
        
      </div>
      <div class="content">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
          <p><?php $jcart->display_final_cart();?></p>
        </div>
       
        
       
        <!-- Example row of columns -->
        
        <footer>
          <p>&copy; Thisco.de 2011</p>
          
          <!-- Contact US Form -->
          <div id="modal-from-dom" class="modal hide fade">
            <div class="modal-header">
              <a href="#" class="close">&times;</a>
              <h3>Contact us</h3>
            </div>
            <div class="modal-body">
         
               <form>
        <fieldset>
          <div class="clearfix">
            <label for="xlInput">Name</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text" />
            </div>
          </div><!-- /clearfix -->
		  <div class="clearfix">
            <label for="xlInput">Email</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text" />
            </div>
          </div><!-- /clearfix -->
    
          
          <div class="clearfix">
            <label for="textarea">Feedback</label>
            <div class="input">
              <textarea class="xlarge" id="textarea2" name="textarea2" rows="3"></textarea>
              <span class="help-block">
                
              </span>
            </div>
          </div><!-- /clearfix -->
         
         
          
        </fieldset>
          
            </div>
            
             <div class="modal-footer">
              <a href="#" class="btn primary">Send</a>
              <a href="#" class="btn secondary">Cancel</a>
            </div>
          </div>
          <!-- /end contact form -->
         
        </footer>
      </div>
    </div>
			<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
			<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
  </body>
</html>