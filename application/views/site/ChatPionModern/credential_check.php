<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
      <div class="login-brand">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="<?php echo $this->config->item('product_name');?>" width="200"></a>
      </div>

      <div class="card card-primary shadow-lg">
        <div class="card-header bg-primary text-white"><h4><i class="far fa-copyright"></i> <?php echo $this->lang->line("Register your software"); ?></h4></div>

        <div class="card-body p-4" id="recovery_form">
          <p class="text-muted mb-4"><?php echo $this->lang->line("Put purchase code to activate software"); ?></p>
          <form method="POST">
            <div class="form-group">
              <label for="purchase_code" class="font-weight-bold"><?php echo $this->lang->line("Purchase Code"); ?> *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input id="purchase_code" type="text" class="form-control" name="email" tabindex="1" autofocus placeholder="<?php echo $this->lang->line("Enter your purchase code"); ?>">
              </div>
              <div class="invalid-feedback"><?php echo $this->lang->line("Please enter purchase code"); ?></div>
            </div>

            <div class="form-group">
              <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block rounded-pill" tabindex="4">
               <i class="far fa-paper-plane"></i> <?php echo $this->lang->line("Submit Purchase Code"); ?>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){    
    $(document).on('click','#submit',function(e){
      e.preventDefault();
      var purchase_code = $("#purchase_code").val().trim();
      if(purchase_code=='')
      {
          $("#purchase_code").addClass('is-invalid');
          return false;
      }
      else
      {
          $("#purchase_code").removeClass('is-invalid');
      }

      var domain_name = "<?php echo base_url(); ?>";

      $(this).addClass("btn-progress");
      $.ajax({
          context: this,
          type: "POST",
          url : "<?php echo site_url('home/credential_check_action'); ?>",
          data:{domain_name:domain_name,purchase_code:purchase_code},
          dataType: 'JSON',
          // async: false,
          success:function(response)
          {
            $(this).removeClass("btn-progress");
            if(response == "success")
            {
              var link = "<?php echo base_url('home/login'); ?>";
              window.location.assign(link);
            }
            else 
            {
			  var success_message=response.reason;
			  var span = document.createElement("span");
			  span.innerHTML = success_message;
			  swal({ title:'<?php echo $this->lang->line("Error"); ?>', content:span,icon:'error'});
            }   
          }
        });


    });
  });
</script>