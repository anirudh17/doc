<?php
include '../config/connection.php';
session_start();
if(isset($_SESSION['admin_id']))
{
	$admin_id = $_SESSION['admin_id'];
	$admin_name = $_SESSION['admin_name'];

?>
<!doctype html>
<html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<!-- <title>Blank Page | Okler Themes | Porto-Admin</title> -->
		<title>Create</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		 <!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
		<script src="assets/vendor/jquery/jquery.js"></script>

	</head>
	<style>
	table {
			 table-layout: fixed;
			 word-wrap: break-word;
	 }

			table th, table td {
					 overflow: hidden;
					 max-width:200px;
					 word-wrap: break-word;
					 white-space: nowrap;
					 text-overflow: ellipsis;
					 height: 2em;
	 			 	line-height: 1em;
					margin-bottom: 12px;
					cursor: pointer;
			 }
			  table th, table td:hover{
					overflow: visible;
					white-space: normal;
	 				height:auto;
				}
			 </style>
	<body>
		<section class="body">
			<!-- start: header -->
			<?php include 'header.php';?>
			<!-- end: header -->
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include 'left_side_bar.php';?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Create</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<!-- <li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li> -->
								<li><span></span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<header class="panel-heading">

					</header>

					<div class="panel-body" id="shopkeeperform">
						<span id="msg1"></span>
						<form name="submitshopkeeperform" id="submitshopkeeperformdata"  method="post"   >

						<div class="row form-group">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Scan Document :</label>
									<input type="text" name="contactperson" id="contactperson"  placeholder="Subject" class="form-control" autocomplete="off" onchange="scanDocument(this.value)" />
									<!-- <input type="hidden" name="shopkeeper_id" id="shopkeeper_id"/> -->
							</div>
						</div>



					</div>
						<div class="row form-group">
							<div class="col-lg-12">
								<div class="form-group">
								</div>
							</div>
						</div>
			</form>
		</div>
				<div class="panel-body" id="shoptable" style="display:none;">
					<div class="row form-group">
					</div>
					<div class="tables-responsive">
					<table class="table table-bordered table-striped mb-none" id="datatable-default">
						<thead>
							<tr>
								<th class="text-center">Sr No.</th>
								<th class="text-center" >Document Name</th>
								<th class="text-center">Sender ID</th>
								<th class="text-center">Print</th>
							</tr>
						</thead>
						<tbody id="shopmaninfodata" >
						</tbody>
					</table>

				</div>
			</div>
			<div id="qrcode" style="width:100px; height:100px; margin-top:15px;" style="display:none;"></div>
	</div>
				</div>
					<!-- end: page -->
				</section>
			</div>

			<!-- </div> -->
			<?php include 'rightSidebar.php';?>

		</section>
		<!-- Vendor -->

		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		<!-- <script src="assets/javascripts/tables/examples.datatables.default.js"></script> -->
		<script src="../js/validate.js" type="text/javascript"></script>
		<script src="../js/additional-methods.js" type="text/javascript" ></script>
		<script src="../js/shopvalidationrules.js" type="text/javascript" ></script>
		<script src="../js/country_state_city.js" type="text/javascript" ></script>

		<script src="../js/shopavailability.js" type="text/javascript" ></script>
		<script src="../js/all_function.js" type="text/javascript" ></script>
		<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh2sgKfwvLeTx36tIEj81_BVEC6hv0JkA"
		type="text/javascript"></script> -->
	</body>
	  <script type="text/javascript" src="../js/qrcode.js"></script>
	<script type="text/javascript">
	$('#contactperson').focus();
	function scanDocument(param){
		$.ajax({
			type:'POST',
			url:'checkCode.php',
			data:({SenderId:param}),
			success:function(msg){
				alert(msg);
			}
		});
	}
	</script>
</html>
<?php
}
else {
	header("Location:./");
}
?>
