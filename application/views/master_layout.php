<!DOCTYPE html>
<html>

	<head>
		<title>DOCPro Business Solutions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="<?php base_url(); ?>/assets/img/favicon.ico" />
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	   
		<!-- METRO Libs -->
		<link href="<?php base_url(); ?>/libs/metro/css/metro.css" rel="stylesheet">
		<link href="<?php base_url(); ?>/libs/metro/css/metro-icons.css" rel="stylesheet">
		<link href="<?php base_url(); ?>/libs/metro/css/metro-responsive.css" rel="stylesheet">
		<link href="<?php base_url(); ?>/libs/metro/css/metro-schemes.css" rel="stylesheet">
		<link href="<?php base_url(); ?>/libs/metro/css/docs.css" rel="stylesheet">
		
		<!-- CSS Libs -->
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/checkbox3/dist/checkbox3.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/datatables/media/css/jquery.dataTables.min.css">-->
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/datatables/media/css/dataTables.bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/bower_components/select2/dist/css/select2.min.css">-->
		

		<!-- CSS App -->
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/libs/flat/css/themes/flat-blue.css">
		
		<link href='<?php base_url(); ?>/libs/hint.min.css' rel='stylesheet' type='text/css'>
		<link href='<?php base_url(); ?>/libs/hover.css' rel='stylesheet' type='text/css'>
		
		<!-- CUSTOM CSS -->
		<link href='<?php base_url(); ?>/assets/css/blank.css' rel='stylesheet' type='text/css'>
		<link href='<?php base_url(); ?>/assets/css/navbar-sidebar.css' rel='stylesheet' type='text/css'>

		<?php if(isset($head_css)){ $this->load->view($head_css); } ?>
		
		<style>
			@font-face{
				font-family: docpro;
				src: url('<?php base_url(); ?>/libs/docpro.woff');
			}
		</style>
		<style>
			@media screen and (max-width: 992px){
				#main-content .side-body {
					margin-left: 0 !important;
				}
				nav.navbar-top .navbar-body > a {
					margin-left: 0 !important;
				}
				#logout-btn{
					margin-right: 50px !important;
				}
			}
		</style>
		<style>
			.dataTables_info {
				float: left;
			}
			.dataTables_paginate{
				float: right;
			}
			.dataTable th{
				text-align: center !important;
			}
			.paginate_button a{
				width: 100% !important;
			}
		</style>
		<link href="<?php base_url(); ?>/assets/css/mobile-style.css" rel="stylesheet">

		<!-- Styles of Puerto Responsive Flat Buttons -->
		<link rel="stylesheet" href="<?php base_url(); ?>/assets/css/main.css">
		<style>
			.button-group-custom a{
				border-radius: 3px !important;
				height: 100px !important;
			}
		</style>
	</head>

	<body class="flat-blue">
		<div id='app-container' class="app-container">
		<div class="row content-container">
				<nav class="navbar navbar-default navbar-fixed-top navbar-top">
					<div class="container-fluid">
						<?php if(isset($top_navbar)){$this->load->view($top_navbar);} ?>
					</div>
				</nav>
				<div class="side-menu sidebar-inverse" id='costum-sidebar-close'>
					<nav class="navbar navbar-default" role="navigation">
						<div class="side-menu-container">
							<ul class="nav navbar-nav" id='sidebar-container'>
								<li class="<?php if($active_nav === 'home'){echo 'active';}?>">
									<a href='<?php base_url(); ?>/home' class='tooltip-toggle' title="Go to Home">
										<span class="icon fa fa-home"></span><span class="title">Home</span>
									</a>
								</li>
								<li class="<?php if($active_nav === 'transaction'){echo 'active';}?>">
									<a href="<?php base_url(); ?>/transactions" class='tooltip-toggle' title="Go to Transactions">
									   <span class="icon fa fa-money"></span><span class="title">Transactions</span>
									</a>
								</li>
								<li class="panel panel-default dropdown <?php if($active_nav === 'journals'){echo 'active';}?>">
									<a href='#dropdown-journals' class='tooltip-toggle' title='Go to Journals'>
										<span class="icon fa fa-file-text-o"></span><span class="title">Journals</span>
									</a>
									<!-- Dropdown level 1 -->
									<div id="dropdown-journals" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="nav navbar-nav">
												<li>
													<a href="<?php echo base_url('/'); ?>journals/sales" id='popover-sales-invisible'>Sales</a>
												</li>
												<li>
													<a href="<?php echo base_url('/'); ?>journals/receipts" id='popover-receipts-invisible'>Receipts</a>
												</li>
												<li>
													<a href="<?php echo base_url('/'); ?>journals/collections" id='popover-collections-invisible'>Collections</a>
												</li>
												<li>
													<a href="<?php echo base_url('/'); ?>journals/purchases" id='popover-purchases-invisible'>Purchases</a>
												</li>
												<li>
													<a href="<?php echo base_url('/'); ?>journals/disbursements" id='popover-disbursements-invisible'>Disbursements</a>
												</li>
												<li>
													<a href="<?php echo base_url('/'); ?>journals/adjustments" id='popover-adjustments-invisible'>Adjustments</a>
												</li>
												<li>
													<a href="<?php echo base_url('/'); ?>journals/specials" id='popover-specials-invisible'>Specials</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class='<?php if($active_nav === 'financialreports'){echo 'active';}?>' title='Go to Financial Reports'>
									<a href="<?php base_url(); ?>/financial_reports" class='tooltip-toggle'>
										<span class="icon fa fa-folder-open"></span><span class="title">Financial Reports</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'companyreports'){echo 'active';}?>' title='Go to Company Reports'>
									<a href="<?php base_url(); ?>/company_reports" class="tooltip-toggle">
										<span class="icon fa fa-building"></span><span class="title">Company Reports</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'bookofaccounts'){echo 'active';}?>' title='Go to Book of Accounts'>
									<a href="<?php base_url(); ?>/book_of_accounts" class="tooltip-toggle">
										<span class="icon fa fa-book"></span><span class="title">Book of Accounts</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'docprosettings'){echo 'active';}?>' title='Go to DOCPro Settings'>
									<a href="<?php base_url(); ?>/docpro_settings" class="tooltip-toggle">
										<span class="icon fa fa-gears"></span><span class="title">DOCPro Settings</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'companysettings'){echo 'active';}?>' title='Go to Company Settings'>
									<a href="<?php base_url(); ?>/company_settings" class="tooltip-toggle">
										<span class="icon fa fa-gear"></span><span class="title">Company Settings</span>
									</a>
								</li>
								<!-- Dropdown-->
								<li class='<?php if($active_nav === 'tables'){echo 'active';}?>' title='Go to Tables'>
									<a href="<?php base_url(); ?>/tables" class="tooltip-toggle">
										<span class="icon fa fa-table"></span><span class="title">Tables</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
				</nav>
			</div>
				<!-- Main Content -->
				<div id='main-content' class="container-fluid">
					<?php if(isset($content)){ $this->load->view($content); } ?>
				</div>
		   </div>
		</div>
		<!-- METRO Libs -->
		<script src='<?php base_url(); ?>/libs/js/jquery.min.js'></script>
		<script src="<?php base_url(); ?>/libs/metro/js/metro.js"></script>
		<script src="<?php base_url(); ?>/libs/metro/js/docs.js"></script>
		<!--<script src="<?php base_url(); ?>/docpro/libs/metro/js/prettify/run_prettify.js"></script>-->
		<script src="<?php base_url(); ?>/libs/metro/js/ga.js"></script>
		
		<!-- Javascript Libs -->
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/Chart.js/Chart.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
		<!--<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/bower_components/select2/dist/js/select2.full.min.js"></script>-->
		<!-- Javascript -->
		<script type="text/javascript" src="<?php base_url(); ?>/libs/flat/js/app.js"></script>


		<script>
			$(document).ready(function(){
				$('button.fa-rotate-90').on('click', function(){
					$('li.panel.dropdown > a').attr('data-toggle', 'collapse');
				});
						
				$('.tooltip-toggle').tooltip({animation: true, placement: 'right', container: 'body'});
				$('[data-toggle=popover]').popover();	
			});
		</script>
		
		<?php if(isset($footer_js)){ $this->load->view($footer_js); } ?>
	</body>

</html>
