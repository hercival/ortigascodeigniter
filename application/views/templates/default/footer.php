            <a href="#page-top" id="scrollup" class="btn btn-circle btn-primary page-scroll back-to-top" role="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to Top">
                <span class="glyphicon glyphicon-menu-up"></span>
            </a>
            <footer class="dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <h3>Contact &amp; Information</h3>
                                <p>Looking for more information? Email Us</p>
                            </center>
                        </div>

                        <div class="col-md-6 text-right-align">
                            <?php if (isset($contact_info['office_address'])): ?>
                                <address>
                                    <strong>Head Office</strong><br />
                                    <?=nl2br($contact_info['office_address'])?>
                                </address>
                            <?php endif; ?>

                            <?php if (isset($contact_info['office_hours'])): ?>
                                <address>
                                    <strong>Office Hours</strong><br />
                                    <?=$contact_info['office_hours']?>
                                </address>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 text-left-align">
                            <?php if (@$contact_info['cs_phone'] || @$contact_info['cs_email'] || @$contact_info['cs_cellphone']): ?>
                                <strong>Customer Service</strong>
                            <?php endif; ?>
                            <p>
                                <?php 
                                    if (@$contact_info['cs_cellphone']){
                                        echo 'C <span class="red">/</span> '.$contact_info['cs_cellphone'].'<br />';
                                    }

                                    if (@$contact_info['cs_phone']){
                                        echo 'P <span class="red">/</span> '.$contact_info['cs_phone'].'<br />';
                                    }

                                    if (@$contact_info['cs_email']){
                                        echo 'E <span class="red">/</span> '.$contact_info['cs_email'];
                                    }
                                ?>
                            </p>
                        
                            <?php if (@$contact_info['catering_phone'] || @$contact_info['catering_email'] || @$contact_info['catering_cellphone']): ?>
                                <strong>Catering</strong>
                            <?php endif; ?>
                            <p>
                                <?php
                                    if (@$contact_info['catering_cellphone']){
                                        echo 'C <span class="red">/</span> '.$contact_info['catering_cellphone'].'<br />';
                                    }

                                    if (@$contact_info['catering_phone']){
                                        echo 'P <span class="red">/</span> '.$contact_info['catering_phone'].'<br />';
                                    }

                                    if (@$contact_info['catering_email']){
                                        echo 'E <span class="red">/</span> '.$contact_info['catering_email'];
                                    }
                                ?>
                            </p>

                            <?php if (@$contact_info['franchising_phone'] || @$contact_info['franchising_email'] || @$contact_info['franchising_cellphone']): ?>
                                <strong>Franchising</strong>
                            <?php endif; ?>
                            <p>
                                <?php 
                                    if (@$contact_info['franchising_cellphone']){
                                        echo 'C <span class="red">/</span> '.$contact_info['franchising_cellphone'].'<br />';
                                    }

                                    if (@$contact_info['franchising_phone']){
                                        echo 'P <span class="red">/</span> '.$contact_info['franchising_phone'].'<br />';
                                    }

                                    if (@$contact_info['franchising_email']){
                                        echo 'E <span class="red">/</span> '.$contact_info['franchising_email'];
                                    }
                                ?>
                            </p>
                        </div>  
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <center>
                            <img src="<?php echo base_url()?>includes/img/logo-desktop.png" alt="Tokyo Tokyo"><br />
                            <small>&copy;<?php echo date('Y'); ?> Tokyo Tokyo. All Rights Reserved.</small>
                            </center>
                        </div>

                        <div class="col-md-2">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?=base_url()?>">Home</a></li>
                                <li><a href="<?=base_url()?>franchising">Franchising</a></li>
                                <li><a href="<?=base_url()?>about-us">About Us</a></li>
                            </ul>
                        </div>

                        <div class="col-md-2">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?=base_url()?>whats-new">What's New</a></li>
                                <li><a href="<?=base_url()?>catering">Catering</a></li>
                                 <li><a href="<?=base_url()?>recruitment">Recruitment</a></li>
                             </ul>
                        </div>

                        <div class="col-md-2">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?=base_url()?>menu">Menu</a></li>
                                <li><a href="<?=base_url()?>our-stores">Our Stores</a></li>
                                <li><a href="<?=base_url()?>suggest-a-branch">Suggest A Branch</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-social">
                                <h5><strong>Follow us on:</strong></h5>
                                <ul class="nav navbar-nav nav-social">
                                    <li class="nav-social-fb"><a href="https://www.facebook.com/tokyotokyophilippines" title="Facebook" target="_blank"></a></li>
                                    <li class="nav-social-tw"><a href="https://twitter.com/TokyoTokyoPHL" title="Twitter" target="_blank"></a></li>
                                    <li class="nav-social-in"><a href="https://www.instagram.com/tokyotokyophilippines" title="Instagram" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

<!-- </div> end of start-content  -->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
        <script src="<?=base_url()?>includes/js/jquery.min.js"></script>
 
        <!-- jQuery include queryloader2 -->
         <script src="<?=base_url()?>includes/js/vendor/queryloader/js/queryLoader.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?=base_url()?>includes/js/libs/bootstrap.min.js"></script>
        <script src="<?=base_url()?>includes/js/libs/jquery.mobile.custom.min.js"></script>
        
        <!-- PictureFill 3.0.0 for responsive images -->
        <script src="<?=base_url()?>includes/js/libs/picturefill.min.js"></script>
		<script src="<?=base_url()?>assets/plugins/fancybox/source/jquery.fancybox.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?=base_url()?>assets/plugins/fancybox/source/helpers/jquery.fancybox-media.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>includes/js/maps.js" type="text/javascript" charset="utf-8"></script>
        

        <!-- ScrollSpy JS -->
        <script src="<?=base_url()?>includes/js/libs/jquery.easing.min.js"></script>
        <script src="<?=base_url()?>includes/js/libs/scrolling-nav.js"></script>
        
        <!-- Flickity JS -->
        <script src="<?=base_url()?>includes/js/libs/flickity.pkgd.min.js"></script>
        <script src="https://use.typekit.net/ccj5tqf.js"></script> 
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

        <!-- JS scripts -->
        <script src="<?=base_url()?>includes/js/scripts.js"></script>
    </body>
</html>