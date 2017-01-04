<div id="carousel-example-generic" class="featured-img-inner carousel slide carousel-fade" data-ride="carousel"> 
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url(<?php echo base_url(); ?>includes/uploads/<?php echo $details->featured_image; ?>)"></div> 
        </div>     
    </div> 
</div>
<ol class="breadcrumb">
    <li><a href="news.html">News</a></li>
    <li class="active"><?php echo $details->title; ?></li>
</ol>    
    <center><div class="border"></div></center>

    <div class="container-fluid">
      <div class="row news-details">
        <div class="col-md-9">
          <h3><?php echo $details->title; ?></h3>
          <h6>Date posted <?php echo date('F d, Y', strtotime($details->date_publish)); ?></h6>
          <br>
            <?php echo $details->content; ?>

          <div class="gdn-728x90-slot defaultMarginTop">
            <img src="<?php echo base_url(); ?>includes/img/gdn-728x90.jpg">
          </div>
          <br>
          <?php $url=current_url();?>
          <p>Like <span style="font-weight: bold; display: inline-block; vertical-align:middle;">Ortigas & Co</span> on Facebook</p>
          <span style="display: inline-block; padding-left: 8px; ">
              <iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo $url;?>%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="100" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </span>
        </div>

        <div class="col-md-3 archive-box">
          <h5><span class="glyphicon glyphicon-calendar" style="padding-right: 6px;"></span>News Archive</h5>
          <br>
          <form role="form">
              <div class="form-group form-group-dates">
                <label for="sel1">Year</label>
                <select class="form-control" id="sel1">
                  <option>2000</option>
                  <option>2001</option>
                  <option>2003</option>
                  <option>2004</option>
                  <option>2005</option>
                  <option>2006</option>
                  <option>2007</option>
                  <option>2008</option>
                  <option>2009</option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>                    
                </select>
              </div>
            </form>          
          <br>
          <form role="form">
              <div class="form-group form-group-dates">
                <label for="sel1">Month</label><br>
                <select class="form-control" id="sel1">
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>                  
                </select>
              </div>
            </form> 
          <br>
          <button type="submit" class="btn btn-primary align-center-desktop">FIND ARCHIVE</button> 
          <br>
          <div class="gdn-300x250-slot defaultMarginTop">
            <img src="<?php echo base_url(); ?>includes/img/gdn-300x250.jpg">
          </div>          
        </div>
      </div>  
    </div>