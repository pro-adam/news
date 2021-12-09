<?php require('header.php'); ?>
<main class="container mt-3 mb-5">
	<h3 class="border-bottom pb-1 my-4">All News</h3>
	<!-- News Box -->
	<?php for($i=1; $i<=10; $i++){ ?>
	<div class="card mb-4 shadow">
	  <div class="row no-gutters">
	    <div class="col-md-3">
	      <img src="<?php echo $baseUrl; ?>/imgs/3.jpg" class="card-img" alt="...">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h5 class="card-title">Card title</h5>
	        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
	        <p class="card-text"><a href="#" class="btn btn-sm btn-primary">Read Full</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	<?php } ?>
</main>
<?php require('footer.php'); ?>