	<div id="section-ourstores">
		<div class="container store">
			<div class="row">
				<div class="col-md-6 col-md-push-3 col-xs-12 store-search dark">
					<p><small style="font-size:80% !important;">Find a Tokyo Tokyo store near you. Just type your location below</small></p>
				   	<form action="<?=base_url()?>stores/locator" method="post">
					    <div class="input-group">
					    	<input type="text" class="form-control" placeholder="Search for..." name="search">
					    	<span class="input-group-btn">
					        	<button class="btn btn-secondary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					      	</span>
					    </div>
				    </form> 
				    <p><small><a href="<?php echo base_url()?>stores/locator/all">View all locations</a></small></p>
				</div>
			</div>
		</div>
	</div>