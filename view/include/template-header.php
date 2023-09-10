<!DOCTYPE html>
<html class="dark">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!---------======== CSS ========--------->
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="<?php echo HOME_URI."view/js/sweetalert2/dark.css"; ?>">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo HOME_URI."view/assets/css/datatable-theme.css"; ?>">
	<link rel="stylesheet" href="<?php echo HOME_URI."view/assets/css/stylesheet.css"; ?>">

	<!---------======== BoxIcons CSS ========--------->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!---------======== JS Libraries ========--------->
	<script src="<?php echo HOME_URI."view/js/jquery.min.js"; ?>"></script>
	<script src="<?php echo HOME_URI."view/js/functions.js"; ?>"></script>
	<script src="<?php echo HOME_URI."view/js/sweetalert2/sweetalert2.min.js"; ?>"></script>

	<title>ERP System</title>
</head>
<body class="bg-zinc-700 flex">
	<?php if(isset($_GET['path']) && !str_contains($_GET['path'], 'access/login')){ 
		require ABSPATH."/view/include/sidebar.php";
		require ABSPATH."/view/include/page-title.php"; 
	}?>