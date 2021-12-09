<?php $baseUrl='http://localhost/corephp/newsWebsite'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fast News</title>
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/vendor/bs4/bootstrap.min.css" />
	<!-- Main Jquery -->
	<script type="text/javascript" src="<?php echo $baseUrl; ?>/vendor/jquery.min.js"></script>
	<!-- Bootstrap Js -->
	<script type="text/javascript" src="<?php echo $baseUrl; ?>/vendor/bs4/bootstrap.min.js"></script>
</head>
<body>
	<!-- Top News -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<div class="container">
		  <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Fast News</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo $baseUrl; ?>">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo $baseUrl; ?>/all-news.php">All News</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo $baseUrl; ?>/all-categories.php">All Categories</a>
		      </li>
		    </ul>
		  </div>
	  	</div>
	</nav>