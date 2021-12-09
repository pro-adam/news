<?php require('header.php'); ?>
<main class="container mt-3 mb-5">
	<h3 class="border-bottom pb-1 my-4">All Categories</h3>
	<div class="row">
		<!-- Category Box -->
		<?php for($i=1; $i<=10; $i++){ ?>
		<div class="col-md-4">
			<div class="card mb-3 shadow">
			  <img src="/media/imgs/1.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Category title</h5>
			    <hr/>
			    <p class="card-text"><a href="<?php echo $baseUrl; ?>/category.php" class="btn btn-sm btn-primary">All News</a></p>
			  </div>
			</div>
		</div>
		<?php } ?>
	</div>
</main>
<?php require('footer.php'); ?>