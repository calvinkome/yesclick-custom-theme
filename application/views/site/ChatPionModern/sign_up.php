<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
      <div class="login-brand">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt="<?php echo $this->config->item('product_name');?>" width="200"></a>
      </div>

      <div class="card card-primary shadow-lg">
        <div class="card-header bg-primary text-white"><h4><i class="far fa-user-circle"></i> <?php echo $this->lang->line("Sign Up"); ?></h4></div>

        <div class="card-body p-4">
          <?php 
            if($this->session->userdata('reg_success') == 1) {
              echo "<div class='alert alert-success text-center'>".$this->lang->line("An activation code has been sent to your email. please check your inbox to activate your account.")."</div>";
              $this->session->unset_userdata('reg_success');
            }                  
            if($this->session->userdata('reg_success') == 'limit_exceed') {
              echo "<div class='alert alert-danger text-center'>".$this->lang->line("Signup has been disabled. Please contact system admin.")."</div>";
              $this->session->unset_userdata('reg_success');
            }
            if(form_error('name') != '' || form_error('email') != '' || form_error('confirm_password') != '' ||form_error('password')!="" ) 
            {
              $form_error="";
              if(form_error('name') != '') $form_error.=str_replace(array("<p>","</p>"), array("",""), form_error('name'))."<br>";
              if(form_error('email') != '') $form_error.=str_replace(array("<p>","</p>"), array("",""), form_error('email'))."<br>";
              if(form_error('password') != '') $form_error.=str_replace(array("<p>","</p>"), array("",""), form_error('password'))."<br>";
              if(form_error('confirm_password') != '') $form_error.=str_replace(array("<p>","</p>"), array("",""), form_error('confirm_password'))."<br>";
              echo "<div class='alert alert-danger text-center'>".$form_error."</div>";
             
            }  
            if(form_error('captcha')) 
            echo "<div class='alert alert-danger text-center'>".form_error('captcha')."</div>"; 
            else if($this->session->userdata("sign_up_captcha_error")!='')  
            { 
              echo "<div class='alert alert-danger text-center'>".$this->session->userdata("sign_up_captcha_error")."</div>"; 
              $this->session->unset_userdata("sign_up_captcha_error"); 
            } 
          ?>


          <form method="POST" action="<?php echo site_url('home/sign_up_action');?>">
            <div class="row mb-3">
              <div class="form-group col-md-6">
                <label for="name" class="font-weight-bold"><?php echo $this->lang->line("Name"); ?> *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input id="name" type="text" class="form-control" name="name" autofocus required value="<?php echo set_value('name');?>" placeholder="<?php echo $this->lang->line("Enter your full name"); ?>">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="email" class="font-weight-bold"><?php echo $this->lang->line("Email"); ?> *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input id="email" type="email" class="form-control" name="email" required value="<?php echo set_value('email');?>" placeholder="<?php echo $this->lang->line("Enter your email"); ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="form-group col-md-6">
                <label for="password" class="d-block font-weight-bold"><?php echo $this->lang->line("Password"); ?> *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input id="password" type="password" class="form-control" required name="password" value="<?php echo set_value('password');?>" placeholder="<?php echo $this->lang->line("Enter password"); ?>">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="password2" class="d-block font-weight-bold"><?php echo $this->lang->line("Confirm Password");?> *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input id="password2" type="password" class="form-control" required name="confirm_password" value="<?php echo set_value('confirm_password');?>" placeholder="<?php echo $this->lang->line("Confirm your password"); ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-12 mb-2">
                <label class="font-weight-bold"><?php echo $this->lang->line("Captcha");?> *</label>
              </div>
            </div>                  
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-calculator"></i> <?php echo $num1. " + ". $num2." = ?";?></span>
              </div>
              <input type="number" class="form-control" required name="captcha" placeholder="<?php echo $this->lang->line("Enter your answer"); ?>" >
            </div>      

            <div class="form-group mb-4">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="agree" required class="custom-control-input" id="agree">
                <label class="custom-control-label" for="agree"><?php echo $this->lang->line("I agree with the");?> <a target="_BLANK" href="<?php echo site_url();?>home/terms_use" class="text-primary"><?php echo $this->lang->line("terms and conditions");?></a></label>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill">
                <i class="fa fa-user-circle"></i> <?php echo $this->lang->line("sign up"); ?>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>