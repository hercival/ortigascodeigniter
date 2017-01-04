<?php
    $form_message = '';
    if($this->input->post() && $this->input->post('token')){
        $email_subject = $mod_data->subject;
        $email_to = $mod_data->sentto;
        $email_cc = $mod_data->sentcc;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //$this->form_validation->set_rules('mobile', 'Mobile', 'required');
        //$this->form_validation->set_rules('message', 'Message', 'required');


        if($this->form_validation->run() == TRUE){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $location = $this->input->post('location');
            $projects = $this->input->post('projects');
            $homenum = $this->input->post('homenum');
            $mobile = $this->input->post('mobile');
            $message = $this->input->post('message');
            
            
            
            $uid = md5(uniqid(time()));
            $separator = "==Multipart_Boundary_x{$uid}x";
            $eol = PHP_EOL;
			$subject = $email_subject;
			$message_html = '<html>
							<head>
							  <title>'.$email_subject.'</title>
							</head>
							<body>
								<p>Dear Ortigas,</p>
								<p>Inquiry Information<br>
									Name: '.$name.'<br>
									Email: '.$email.'<br>
                                    Location: '.$location.'<br>
                                    Project: '.$projects.'<br>
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
//            $config['mailtype'] = 'html';
//            
//            $this->email->initialize($config);
            $this->email->set_newline("\r\n");

            $this->email->from('noreply@virus-server.com', 'ORTIGAS');
            $this->email->to($email_to);
            $this->email->bcc($email_cc);
            $this->email->subject($subject);
            $this->email->message($message_html);
            
            $mail_sent = $this->email->send();

            if($mail_sent){
                $form_message = "Your Inquiry has been submitted, Thank you.";
            }else{
                $form_message = "There was a problem in submitting your Inquiry. Please fill-up the form and submit again.";
            }
        }
    }
?>
<section class="container-fluid defaultMarginBottom contact-bg">
    <div class="row">
        <center>
            <h1 class="defaultMarginTop">Say Hello</h1>   
            <p>We want to hear from you.</p>   
        </center>
    </div>
</section>      

<div class="container form">
    <div class="row col-md-12">
        <form class="form-horizontal form-margins" role="form" method="post">
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name *" value="<?php echo set_value('name'); ?>" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email *" value="<?php echo set_value('email'); ?>" required>
            </div>    
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="location" name="location" placeholder="Where are you located?" value="<?php echo set_value('location'); ?>">
            </div>                     
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="projects" name="projects" placeholder="Project/s Interested In" value="<?php echo set_value('projects'); ?>">
            </div>  
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="homeNum" name="homenum" placeholder="Home Number (optional)" value="<?php echo set_value('homenum'); ?>">
            </div>                     
            <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number (optional)" value="<?php echo set_value('mobile'); ?>">
            </div>               
            <div class="form-group col-sm-12" >
                <textarea class="form-control" rows="12" name="message" placeholder="Message (optional)" required=""><?php echo set_value('message'); ?></textarea>
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
            <div class="form-group" style="margin-left: 10px; margin-top: -15px;">
               <input type="hidden" name="token" value="<?php echo random_string('alnum', 10); ?>">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>  
        </form> 
                        
    </div> <!-- Form -->   
</div>