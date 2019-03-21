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
		<title>Recieved Documents</title>
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
				<h2 class="text-center">Recieved Documents</h2>
					</header>
					<div class="wizard-tabs">
						<ul class="wizard-steps">
							<li class="active">
								<a href="#" data-toggle="tab" class="text-center">
									<span class="badge " id="Shopkeeper" onclick="showshopkeepermaninfotable();">Documents</span>
								</a>
							</li>

						</ul>
					</div>

				<div class="panel-body" id="shoptable" >
					<div class="row form-group">
					</div>
					<div class="tables-responsive">
					<table class="table table-bordered table-striped mb-none" id="datatable-default">
						<thead>
							<tr>
								<th class="text-center">Sr No.</th>
									<th class="text-center" >Document Id</th>
								<th class="text-center" >Document Subject</th>
								<th class="text-center">Department</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody id="shopmaninfodata" >
						</tbody>
					</table>

				</div>
			</div>
			<div id="qrcode" style="width:100px; height:100px; margin-top:15px;" style="display:none;"></div>
			<div id="History" style="display:none;">
				<strong id="info"></strong>
				<ul class="list-group">
		  </ul>
			</div>
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
		<script src="../js/all_function.js" type="text/javascript" ></script>
		<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh2sgKfwvLeTx36tIEj81_BVEC6hv0JkA"
		type="text/javascript"></script> -->
	</body>
	<script type="text/javascript">

	 display_shopkeeper();

 function display_shopkeeper()
 {
		 $.ajax({
							 type: "POST",
							 url: "recieved_doc.php",
							 success: function(data)
							{
								var html="";
								var data = JSON.parse(data);
								var count = Object.keys(data).length;
								for (var i = 0; i < count; i++)
								 {
										html +='<tr><td class="text-center">' + (i+1)+ '</td><td class="text-center">'+ data[i]['Id']+ '</td><td class="text-center">' + data[i]['subject'] + '</td><td class="text-center">' + data[i]['DeptName'] + '</td><div class="btn btn-group"><td><button class="btn btn-success" type="button" onClick="generateQrcode(' + data[i]['Id'] + ')" title="View Document"><i class="fa fa-square"></i></button></td></div></tr>';
								}
									$('#shopmaninfodata').html(html);
									$("#datatable-default").DataTable({});
							 }
						 });
 }
 function generateQrcode(senders){
	 window.location.href = "feedbackForm.php?qrcode="+senders;
 }

	</script>
</html>
<?php
}
else {
	header("Location:./");
}
?>
