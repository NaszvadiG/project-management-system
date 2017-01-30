<!DOCTYPE html>
  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->
 <head>
     <link rel="icon" href="<?php echo base_url()?>img/favicon.ico" type="image/gif">
    <script src="<?php echo  $js; ?>wysiwyg/wysihtml5-0.3.0.js"></script>
	<script src="<?php echo  $js; ?>jquery.min.js"></script>
	<script src="<?php echo  $js; ?>bootstrap.js"></script>
	<title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="" content="">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="Admin UI">
    <script src="<?php echo  $js; ?>html5-trunk.js"></script>
    <link href="<?php echo  $icomoon; ?>style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector: '.tarekshowkot' });</script>
    <!-- NVD graphs css -->
    <link href="<?php echo  $css; ?>nvd-charts.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="<?php echo  $css; ?>main.css" rel="stylesheet">
    <link href="<?php echo  $css; ?>wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
    <link href="<?php echo  $css; ?>wysiwyg/wysiwyg-color.css" rel="stylesheet">
    <link href="<?php echo  $css; ?>timepicker.css" rel="stylesheet">
    <link href="<?php echo  $css; ?>bootstrap-editable.css" rel="stylesheet">
    <link href="<?php echo  $css; ?>select2.css" rel="stylesheet">

    <!-- fullcalendar css -->
    <link href='<?php echo  $css; ?>fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='<?php echo  $css; ?>fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	
	

</head>

<body>
    <header>
      <a href="#" class="logo"><?php echo $title ?></a>
      <div id="mini-nav">
        <ul class="hidden-phone">
            <li>
            <a href="#documentation" data-toggle="modal" data-original-title="">
              <?php echo $username; ?>
            </a>
                        </li>
                  <li>
            <a href="<?php echo  base_url(); ?>logout"><span class="fs1" aria-hidden="true" data-icon="&#xe0b1;"></span></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </header>
    <div class="container-fluid">
      <div class="dashboard-wrapper">
        <div id="main-nav" class="hidden-phone hidden-tablet">
          <ul>
            <li>
              <a href="dashboard.php">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></span> Dashboard
              </a>
            </li>
            <li>
              <a href="product.php">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Client
              </a>
					<ul>
						<li>
                                                    <a href="<?php echo base_url(); ?>client/add">New Client</a>
						</li>
						<li>
						  <a href="productlist.php">Client List</a>
						</li>
					</ul>
            </li> 
            <li>
              <a href="product.php">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Project
              </a>
					<ul>
						<li>
                                                    <a href="<?php echo base_url(); ?>project/add">New Project</a>
						</li>
						<li>
						  <a href="productlist.php">Project List</a>
						</li>
						<li>
						  <a href="stockreport.php">Completed Project</a>
						</li>
						<li>
						  <a href="stockreport.php">Income</a>
						</li>
						<li>
						  <a href="stockreport.php">Expense</a>
						</li>
                                                <li>
						  <a href="stockreport.php">Payment</a>
						</li>
					</ul>
            </li>
            <li>
              <a href="party.php">
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Suppliers
              </a>
					<ul>
						<li>
						  <a href="partylist.php" >Add New Suppliers </a>	
						</li>
						<li>
						  <a href="purchase.php" >Suppliers List</a>	
						</li>
						<li>
						  <a href="payment.php">Payment</a>
						</li>
						<li>
						  <a href="partycredit.php">Suppliers Credit</a>
						</li>
					</ul>			  
            </li>
            <li>
              <a href="accounts.php" >
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Contractor
              </a>
					<ul>
						<li>
						  <a href="voucherposting.php">Add New Contractor</a>
						</li>
						<li>
						  <a href="incomestatement.php">Contractor List</a>
						</li>
						<li>
						  <a href="expencestatement.php">Expense Statement</a>
						</li>
						<li>
						  <a href="voucherhead.php">Voucher Head</a>
						</li>
						<li>
						  <a href="voucherreport.php">Report</a>
						</li>
					</ul>			  
            </li>
            <li>
              <a href="sales.php" >
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Sales
              </a>
					<ul>
						<li>
						  <a href="sales.php">Sales</a>
						</li>
						<li>
						  <a href="#">Item Sales</a>
						</li>
						<li>
						  <a href="#">Invoice Sales</a>
						</li>
						<li>
						  <a href="salesreturns.php">Sales Return</a>
						</li>
					</ul>			  
            </li>
            <li>
              <a href="settings.php" >
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Settings
              </a>
					<ul>
						<li>
						  <a href="#">Daily Backup</a>
						</li>
						<li>
						  <a href="#">Create User</a>
						</li>
					</ul>			  

            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        
