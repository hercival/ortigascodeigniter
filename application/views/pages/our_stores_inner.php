<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<div id="section-stores-content">
	<div class="row no-pad">
		<div id="stores-list" class="col-md-3">
				<form action="<?=base_url()?>stores/locator" method="post">
			    <div class="input-group search-bar">
        
			    	<input type="text" class="form-control" placeholder="Search for..." name="search" id="search" value="<?=$this->input->post('search')?>">
			    	<span class="input-group-btn">
			        	<button class="btn btn-secondary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			      </span>
        
			    </div>
  			</form>
		    <div class="stores-address">
            <?php foreach ($results as $result): ?>            
				    	<address>
				    		<?php if(isset($result['branch_name']) && $result['branch_name'] != ''): ?><strong><span class="red branch_name" id="<?=$result['slug']?>"><?=$result['branch_name']?></span></strong><br /><?php endif; ?>
				    		<?php if(isset($result['branch_address']) && $result['branch_address'] != ''): ?><span class="glyphicon glyphicon-map-marker"></span> <?=$result['branch_address']?><br /><?php endif; ?>
				    		<?php if(isset($result['contact']) && $result['contact'] != ''): ?><span class="glyphicon glyphicon-earphone"></span> <?=$result['contact']?><br /><?php endif; ?>
				    		<?php if(isset($result['schedule_open']) && $result['schedule_open'] != ''): ?><span class="glyphicon glyphicon-time"></span> <?=$result['schedule_open']?><br /><?php endif; ?>
				    		<?php if(isset($result['notes']) && $result['notes'] != ''): ?><span class="glyphicon glyphicon-time"></span> <?=$result['notes']?><br /><?php endif; ?>
				    		<?php if(isset($result['serves_bf']) && $result['serves_bf'] == 1): ?><span class="glyphicon glyphicon-check"></span> Serves Breakfast<br /><?php endif; ?>
				    	</address>
            <?php endforeach; ?>
		    </div>

		</div>
		<div id="stores-map" class="col-md-9 hidden-xs hidden-sm">
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15447.093634339572!2d121.02617718226315!3d14.554946353757297!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1448529207075" width="600" height="450" frameborder="0" style="border:0"></iframe> -->
		</div>
	</div>
</div>