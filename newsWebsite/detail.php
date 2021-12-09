<?php require('header.php'); ?>
<main class="container mt-3 mb-5">
	<!-- featured news -->
	<div class="row my-3">
		<!-- Left -->
		<div class="col-md-8">
			<div class="card mb-3">
			  <img src="<?php echo $baseUrl; ?>/imgs/1.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <hr/>
			    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
			  </div>
			  <div class="card-footer">
			  	In <a href="#">Category 1</a>
			  </div>
			</div>

			<!-- Comments -->
			<div class="card my-4">
				<h6 class="card-header">Add Comment</h6>
				<div class="card-body">
					<form method="post">
						<div class="form-group row">
							<label class="col-md-2">Name<span class="text-danger">*</span></label>
							<div class="col-md-10">
								<input type="text" name="name" required class="form-control" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2">Email<span class="text-danger">*</span></label>
							<div class="col-md-10">
								<input type="temailext" name="email" required class="form-control" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2">Comment<span class="text-danger">*</span></label>
							<div class="col-md-10">
								<textarea class="form-control" name="message" required></textarea>
							</div>
						</div>
						<input type="submit" class="btn btn-primary" />
					</form>
				</div>
			</div>
			<!-- Previous Comments -->
			<div class="card my-4">
				<h6 class="card-header">Comments</h6>
				<div class="card-body">
					<?php for($i=1; $i<=3; $i++){ ?>
					<blockquote class="blockquote text-right">
					  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					  <footer class="blockquote-footer">Name <cite title="Source Title">Email</cite></footer>
					</blockquote>
					<hr/>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- Related News -->
		<div class="col-md-4">
			<h3 class="mb-3 border-bottom pb-1">From this Category</h3>
			<!-- Category Box -->
			<?php for($i=1; $i<=5; $i++){ ?>
			<div class="card mb-3 shadow">
			  <img src="<?php echo $baseUrl; ?>/imgs/1.jpg" class="card-img-top" alt="News 1">
			  <div class="card-body">
			    <h5 class="card-title">News title</h5>
			    <hr/>
			    <p class="card-text"><a href="<?php echo $baseUrl; ?>/detail.php" class="btn btn-sm btn-primary">Read Full</a></p>
			  </div>
			</div>
			<?php } ?>
		</div>
	</div>
</main>
<?php require('footer.php'); ?>