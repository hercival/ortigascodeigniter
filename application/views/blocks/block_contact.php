<div id="contactform" class="dark">
    <div class="container">
        <form method="post" action="<?=base_url()?>contact">
            <input type="hidden" name="page" value="<?=@$page?>">
            <div class="row">
                <h4 class="text-uppercase"><center>Contact Form</center></h4>
            </div>
            
            <div class="row">
                <?php if ($this->session->flashdata('mail_sent')): ?>
                    <div class="col-md-8 col-md-push-2 alert alert-success"><?=$this->session->flashdata('mail_sent')?></div>
                <?php  endif; ?>
                <?php if ($this->session->flashdata('mail_error')): ?>
                    <div class="col-md-8 col-md-push-2 alert alert-danger"><?=$this->session->flashdata('mail_error')?></div>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-push-2">
                    <input type="text" class="form-control" placeholder="Name" name="full_name">
                </div>

                <div class="col-md-4 col-md-push-2">
                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-push-2">
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                </div>
                <div class="col-md-5 col-md-push-2">
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-push-2">
                    <textarea class="form-control" rows="3" placeholder="Your Message" name="message"></textarea>
                </div>
            </div>

            <div class="row">
                <center><input class="btn btn-default btn-primary btn-md" type="submit" value="Send Message"></center>
            </div>
        </form>
    </div>
</div>