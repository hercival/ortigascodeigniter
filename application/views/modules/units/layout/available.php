<!--form action="<?php echo base_url();?>units/search" method="post" -->
    <div class="container search-container home-search">
        <div class="row">
            <div class="col-sm-12 search-statement">
                <h3 style="color: #ffffff; padding-bottom: 15px;">FIND WHAT YOU ARE LOOKING FOR</h3>

                <div class="col-sm-6" >
                  <div class="form-group form-group-location">
                    <select class="form-control" id="location" name="location">
                      <option value="pasig-city-result">Pasig City</option>
                      <option value="quezon-city-result">Quezon City</option>
                      <option value="viridian-in-greenhills">Greenhills</option>               
                    </select>
                  </div>                  
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-property">
                    <select class="form-control" id="property" name="development_type">
                      <option value="Condominium">Condominium</option>
                      <option value="Residential">Residential</option>
                      <!--option value=">House & Lot">House & Lot</option-->               
                    </select>
                  </div>                  
                </div>
                <!--div class="col-sm-4">
                  <div class="form-group form-group-price">
                    <select class="form-control" id="price" name="price">
                      <option value="5000000">5M</option>
                      <option value="5000000-10000000">5M-10M</option>               
                    </select>
                  </div>                   
                </div-->  
                <div class="col-sm-12 align-center-mobile">
                    <!--button type="submit" class="btn btn-searchProperty">SEARCH PROPERTY</button-->
                    <a href="<?php echo base_url(); ?>estate/pasig-city-result" id="search_link" class="btn btn-searchProperty">SEARCH PROPERTY</a>        
                </div>

            </div>
        </div>
    </div>
<!-- /form -->
<div class="container-fluid">
    <div class="row">
      <div class="search-bg"></div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#location').change(function(){
            var baseurl = '<?php echo base_url(); ?>';
            var state = $(this).val();
            var thelink = baseurl+'estate/'+state;
            console.log(thelink);
            $('#search_link').attr('href', thelink);
        });
    });
</script>
