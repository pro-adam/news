<?php require('header.php'); ?>
<main class="container mt-3 mb-5">
	<!-- featured news -->
	<div class="row my-3">
		<!-- Left -->
		<div class="col-md-7">
			<div class="card mb-3">
			  <img src="<?php echo $baseUrl; ?>/imgs/1.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <hr/>
			    <p class="card-text"><a href="<?php echo $baseUrl; ?>/detail.php" class="btn btn-sm btn-primary">Read Full</a></p>
			  </div>
			</div>
		</div>
		<!-- Right -->
		<div class="col-md-5" style="max-height: 450px; overflow: auto;">
			<!-- News Box -->
			<div class="card">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?php echo $baseUrl; ?>/imgs/3.jpg" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			      </div>
			    </div>
			  </div>
			</div>
			<hr/>
			<!-- News Box -->
			<div class="card">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?php echo $baseUrl; ?>/imgs/3.jpg" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			      </div>
			    </div>
			  </div>
			</div>
			<hr/>
			<!-- News Box -->
			<div class="card">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?php echo $baseUrl; ?>/imgs/3.jpg" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<!-- Category Wise News -->
	<?php for($i=1; $i<=3; $i++){ ?>
	<h3 class="border-bottom pb-1">Category <?php echo $i; ?> <a href="<?php echo $baseUrl; ?>/category.php" class="float-right btn btn-sm btn-dark">In this Category</a></h3>
	<div class="row my-4">
		<!-- News box -->
		<div class="col-md-3">
			<div class="card mb-3 shadow">
			  <img src="<?php echo $baseUrl; ?>/imgs/4.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <hr/>
			    <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			  </div>
			</div>
		</div>
		<!-- News box -->
		<div class="col-md-3">
			<div class="card mb-3 shadow">
			  <img src="<?php echo $baseUrl; ?>/imgs/4.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <hr/>
			    <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			  </div>
			</div>
		</div>
		<!-- News box -->
		<div class="col-md-3">
			<div class="card mb-3 shadow">
			  <img src="<?php echo $baseUrl; ?>/imgs/4.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <hr/>
			    <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			  </div>
			</div>
		</div>
		<!-- News box -->
		<div class="col-md-3">
			<div class="card mb-3 shadow">
			  <img src="<?php echo $baseUrl; ?>/imgs/4.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <hr/>
			    <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
			  </div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- End Single Category -->
</main>
<?php require('footer.php'); ?>