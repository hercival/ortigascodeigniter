<?php
    $form_message = '';
    $application_submitted = 'display:none;';
    if($this->input->post() && $this->input->post('token')){
        $application_submitted = '';
//        $email_subject = $mod_data->subject;
//        $email_to = $mod_data->sentto;
//        $email_cc = $mod_data->sentcc;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('position', 'Position Interested', 'required');
        $upload_file = '';

        if($this->form_validation->run() == TRUE){
            $path = './attachment/';
            
            $this->upload->initialize(array(
                "upload_path"       =>  $path,
                "allowed_types"     =>  "pdf|doc|docs|rtf|xlsx|gif|jpg|png|jpeg",
                "max_size" => "10000"
            ));
            
             if($this->upload->do_multi_upload("resume")){
                $upload_data = $this->upload->get_multi_upload_data();

                if(!$upload_data){
                    $upload_file = $upload_data = $this->upload->data();
                }
             }
            
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $position = $this->input->post('position');
            $subject = $this->input->post('subject');
            $mobile = $this->input->post('mobile');
            $message = $this->input->post('message');
            
            
            
            $uid = md5(uniqid(time()));
            $separator = "==Multipart_Boundary_x{$uid}x";
            $eol = PHP_EOL;
			$email_subject = 'Application - '.$subject;
			$message_html = '<html>
							<head>
							  <title>'.$email_subject.'</title>
							</head>
							<body>
								<p>Dear Ortigas,</p>
								<p>Career Application<br>
									Name: '.$name.'<br>
									Email: '.$email.'<br>
                                    Position Interested: '.$position.'<br>
									Contact Number: '.$mobile.'</p>
								<p>Message:<br>'.$message.'</p>
								<p>Thank you.</p>
							</body>
						</html>';
            
//            $config['protocol'] = 'smtp';
//            $config['mailpath'] = '/usr/sbin/sendmail';
//            $config['charset'] = 'UTF-8';
//            $config['wordwrap'] = TRUE;
//            //$config['smtp_host'] = 'ssl://smtp.googlemail.com';
//            $config['smtp_host'] = 'mail.virus-server.com';
//            //$config['smtp_port'] = 465;
//            $config['smtp_port'] = 25;
//            $config['smtp_user'] = 'noreply@virus-server.com';
//            $config['smtp_pass'] = 'M8j8728eJpmf5EN';
            $config['mailtype'] = 'html';
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'UTF-8';
            $config['mailtype'] = 'html';
        
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");

            $this->email->from('noreply@virus-server.com', 'ORTIGAS');
            $this->email->to('hercivalaragon@gmail.com');
            $this->email->bcc('anthony.robles@virusworldwide.com');
            $this->email->subject($email_subject);
            $this->email->message($message_html);
            
            if($upload_file){
                $this->email->attach($upload_file['full_path']);
            }
            
            
            $mail_sent = $this->email->send();

            if($mail_sent){
                $form_message = "Your Application has been submitted, Thank you.";
            }else{
                $form_message = "There was a problem in submitting your Application. Please fill-up the form and submit again.";
            }
        }
    }
?>
<div id="carousel-example-generic" class="featured-img-inner carousel slide carousel-fade" data-ride="carousel"> 
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url(<?php echo base_url(); ?>includes/uploads/<?php echo $details->featured_image; ?>)"></div> 
        </div>     
    </div> 
</div>

<ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>careers">Careers</a></li>
    <li class="active"><?php echo $details->title; ?></li>
</ol>    
<center><div class="border"></div></center>

<div class="container-fluid career-details" id="application-details">
    <h2><?php echo $details->title; ?></h2>
    <br>
    <?php echo $details->content; ?>
    <button type="submit" class="btn btn-primary" id="apply-button">APPLY NOW</button> 
</div>

<div id="application-form" style="<?php echo $application_submitted;?>">
    <section class="container career-details">
        <div class="row info-tab">
          <center>
            <h1>Join the Team</h1>      
          </center>
        </div>   
    </section>

    <div class="container form">
        <div class="row col-sm-12">
          <form class="form-horizontal form-margins" role="form" method="post" enctype="multipart/form-data">
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name *" value="" required>
              </div>
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email *" value="" required>
              </div>     
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number *" value="" required>
              </div>               
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="position" name="position" placeholder="Position Interested In *" value="<?php echo $details->title; ?>" required>
              </div>   
             <div class="form-group col-sm-12" style="margin-bottom: 15px;">
              <textarea class="form-control" rows="12" name="message" placeholder="Message (optional)" required=""></textarea>
             </div>  
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                      <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <?php if($form_message!=''): ?>
                    <div class="alert alert-info">
                        <p><?php echo $form_message; ?></p>
                    </div>
                <?php endif; ?>
                  </div>
              </div>

            <div class="checkbox" style="margin-left: 10px;">
              <label><input type="checkbox" value=""> * I accept the Website Terms and Conditions and Privacy Statement.</label>
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <input type="hidden" name="subject" value="<?php echo $details->title; ?>">
                <input type="hidden" name="token" value="<?php echo random_string('alnum', 10); ?>">
                <button type="button" id="attach_button" class="btn btn-tertiary" style="margin-top:10px;">ATTACH FILE</button>
                <input type="file" id="attach_file"class="btn btn-tertiary" name="resume" style="opacity:0;">
                <button type="submit" class="btn btn-primary" style="margin-top:10px;">SUBMIT</button>
            </div> 
            </form>                 
        </div> <!-- Form -->   
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#apply-button').click(function(){
            $('#application-details').fadeOut(function(){
                $('#application-form').fadeIn();
            });
        });
        $('#attach_button').click(function(){
            $('#attach_file').trigger('click');
        });
    });
</script>