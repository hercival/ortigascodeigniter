<form action="<?php echo base_url();?>units/search" method="post">
    <div class="container search-container home-search">
        <div class="row">
            <div class="col-sm-12 search-statement">
                <h3 style="color: #ffffff; padding-bottom: 15px;">FIND WHAT YOU ARE LOOKING FOR</h3>

                <div class="col-sm-4" >
                  <div class="form-group form-group-location">
                    <select class="form-control" id="location" name="location">
                      <option value="Pasig City">Pasig City</option>
                      <option value="Greenhills">Greenhills</option>               
                    </select>
                  </div>                  
                </div>
                <div class="col-sm-4">
                  <div class="form-group form-group-property">
                    <select class="form-control" id="property" name="development_type">
                      <option value="Condominium">Condominium</option>
                      <option value="Residential">Residential</option>
                      <option value=">House & Lot">House & Lot</option>               
                    </select>
                  </div>                  
                </div>
                <div class="col-sm-4">
                  <div class="form-group form-group-price">
                    <select class="form-control" id="price" name="price">
                      <option value="5000000">5M</option>
                      <option value="5000000-10000000">5M-10M</option>               
                    </select>
                  </div>                   
                </div>  
                <div class="col-sm-12 align-center-mobile">
                    <button type="submit" class="btn btn-searchProperty">SEARCH PROPERTY</button>        
                </div>

            </div>
        </div>
    </div>
</form>
<div class="container-fluid">
    <div class="row">
      <div class="search-bg"></div>
    </div>
</div>

<section class="container info-tab">
    <center>
        <h1 style="color:#eeeeee;"><?php echo count($details);?> Projects Found</h1>
    </center>
</section>


<div class="container-fluid defaultMarginTop" >
    <div class=" col-sm-12 row">
       <?php if($details){ ?>
           <?php foreach($details as $units){ ?> 
            <div class="col-sm-4 col-md-3 defaultMarginBottom">
                <div class="col-sm-12 thumbnail text-right">
                    <a href="<?php echo base_url(); ?>units/<?php echo $units->alias; ?>">
                        <img class="img-responsive" src="<?php echo base_url();?>includes/uploads/<?php echo $units->schem_image; ?>">
                        <div class="caption">
                            <p><?php echo $units->name; ?> - <?php echo $units->unit_type; ?></p>
                        </div>
                    </a>    
                </div>
            </div>
            <?php } ?>  
        <?php } ?>                                                                     
    </div>
</div>