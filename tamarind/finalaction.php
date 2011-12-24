<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// This file demonstrates a basic checkout page

// If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');

session_start();

	// Empty the cart
	$jcart->empty_cart();
	
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
    

    
       <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
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
            
          
          </ul>
          
        </div>
      </div>
    </div>

	<div class="container">

      <div class="content">
        <div class="page-header">
          <h1>QuickTime Delivery <small> Food Delivered to Your Door!</small></h1>
        </div>
        
        <div class="row">
        <div class="span14">
        <table class="bordered-table zebra-striped">
        <thead>
          <tr>
            <th>Currently in Your Shopping Cart</th>
  
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td colspan="2">
              Subtotal
            </td>
            <td colspan="2">
            	
              RM <?php echo $_POST["total"]; ?>0
            </td>
          </tr>
          <tr>
            <td colspan="2">
              Shipping
            </td>
            <td colspan="2">
              RM 5.00 
            </td>
          </tr>
           <tr>
            <td colspan="2">
              <strong> Grand Total </strong>
            </td>
            <td colspan="2">
            <strong>
             RM <?php
             $subtotal = $_POST['total'];
			 $grandtotal = $subtotal + 5;
			 echo $grandtotal;
             ?>0
             </strong>
            </td>
          </tr>
        </tbody>
      </table>
		<strong>Operating Hours</strong>
		<p>10.00am-10.00pm</p>
		<strong>All orders only delivered in Operating Hours</strong>
		<br>
      <br>
      </div>
          <div class="span7">
            
           	
           	
            <div class="alert-message block-message success">
  
 			 <p><strong>Shipping Info</strong></p>
 
			</div>
            
            <form action="">
      		<div class="row">
        	<div class="span3">
        	<div class="clearfix">First name<br><br> <input class="span3" id="" name="" type="text" placeholder="first name" /></div>
      		</div>
            <div class="span3">
        	<div class="clearfix">Last name <br><br><input class="span3" id="" name="" type="text" placeholder="last name" /></div>
      		</div>
      		</div>
      		
      		<div class="alert-message block-message error">
        	<p>All Order only Available for delivery at <strong>IIUM Area</strong> </p>   
      		</div>
      		
      		 <div class="span3">
        	<div class="clearfix">Street address <br><br><input class="span6" id="" name="" type="text" placeholder="Street Address" /></div>
        	<div class="clearfix"><input class="span6" id="" name="" type="text" placeholder="Street Address 2" /></div>
      		</div>
      		<div class="span3">
        	<div class="clearfix">City <br><br><input class="span6" id="" name="" type="text" placeholder="City" /></div>
      
      		</div>
      		
      		
      		<div class="span3">
        	<div class="clearfix">Postal Code <br><br><input class="span6" id="" name="" type="text" placeholder="Postal Code" /></div>

      		</div>
      	

      		<p><br><a href="../thanks.html" class="btn primary large">Pay Now &raquo;</a></p>
          </div>
          <div class="span7">
            
          
            <div class="alert-message block-message success">
  
 			 <p><strong>Payment Info</strong></p>
 			 
			</div>
            
            <div class="clearfix">Credit Card <br><br>
       		<select name="stackedSelect" id="stackedSelect">
                <option>MasterCard</option>
                <option>Visa</option>
                <option>Amex</option>
              </select></div></br>
              
      		</div>
            
      		<div class="span6">
       		 <div class="clearfix">Name (as it appears on your card)<br><br> <input class="span6" id="" name="" type="text" placeholder="Name" /></div><br>
      		</div>
      		
      		<div class="span6">
       		 <div class="clearfix">Card number (no dashes or spaces)<br><br> <input class="span6" id="" name="" type="text" placeholder="Card Number" /></div><br>
      		</div>
      	
      		<div class="span6">
       		 <div class="clearfix">Security code (3 on back, Amex: 4 on front)<br><br> <input class="span2" id="" name="" type="text" placeholder="Security Code" /></div>
      		</div>
     	 	
    		
    		
            
          </div>
     
     </div>


 	
       
        
       
        <!-- Example row of columns -->
        
        <footer>
          <p>&copy; Thisco.de 2011</p>
          
        </footer>
      </div>
    </div>
			<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
			<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
  </body>
</html>