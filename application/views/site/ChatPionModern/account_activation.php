<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
      <div class="login-brand">
         <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="<?php echo $this->config->item('product_name');?>" width="200"></a>
      </div>

      <div class="card card-primary shadow-lg">
        <div class="card-header bg-primary text-white"><h4><i class="fas fa-user-check"></i> <?php echo $this->lang->line("Account Activation");?></h4></div>

        <div class="card-body p-4" id="recovery_form">
          <p class="text-muted mb-4"><?php echo $this->lang->line("Put your email and activation code that we sent to your email"); ?></p>
          <form method="POST" <?php echo site_url();?>home/account_activation_action>
            <div class="form-group">
              <label for="email" class="font-weight-bold"><?php echo $this->lang->line("Email");?> *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus placeholder="<?php echo $this->lang->line("Enter your email"); ?>">
              </div>
              <div class="invalid-feedback"><?php echo $this->lang->line("Please enter your email"); ?></div>
            </div>
            <div class="form-group">
              <label for="code" class="font-weight-bold"><?php echo $this->lang->line("Account Activation Code");?> *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="text" class="form-control" id="code" name="code" tabindex="1" required placeholder="<?php echo $this->lang->line("Enter activation code"); ?>">
              </div>
              <div class="invalid-feedback"><?php echo $this->lang->line("Please enter activation code"); ?></div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill" tabindex="4" name="submit" id="submit">
                <i class="fas fa-user-check"></i> <?php echo $this->lang->line("Activate My Account");?>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('document').ready(function(){

  $("#submit").click(function(e){
    e.preventDefault();

    $("#msg").removeAttr('class');
    $("#msg").html("");

    var code=$("#code").val();
    var email=$("#email").val();  

    if(email=='')
    {
        $("#email").addClass('is-invalid');
        return false;
    }
    else
    {
        $("#email").removeClass('is-invalid');
    }

    if(code=='')
    {
        $("#code").addClass('is-invalid');
        return false;
    }
    else
    {
        $("#code").removeClass('is-invalid');
    }
    
    $(this).addClass('btn-progress');
    $.ajax({
      context: this,
      type:'POST',
      url: "<?php echo base_url();?>home/account_activation_action",
      data:{code:code,email:email},
      success:function(response){
            $(this).removeClass('btn-progress');
            if(response == 0)
            {
              swal('<?php echo $this->lang->line("Error")?>', '<?php echo $this->lang->line("Account activation code does not match") ?>', 'error');
            }
            if(response == 2)
            {
              var string='<div class="alert alert-primary alert-has-icon"><div class="alert-icon"><i class="far fa-check-circle"></i></div><div class="alert-body"><div class="alert-title"><a href="<?php echo site_url();?>home/login"><?php echo $this->lang->line("You can login here") ?></a></div><?php echo $this->lang->line("Congratulations, your account has been activated successfully."); ?></div></div>';
              $("#recovery_form").slideUp();
              $("#recovery_form").html(string);
              $("#recovery_form").slideDown();
            }
        }
    });
    
  });
});
</script>