    
     <!--*************************************************************************************************************
    *      CONTENT
    ******************************************************************************************************************-->
    <content>
        <div>
          <a class="ca">Customer Login</a>
        </div>
        <div>
        <div id="login_form">
          <?= $this->session->flashdata('message') ?>
        <form method="post" action="<?= base_url('halaman/login'); ?>" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />
          <label for="customer_email" class="login">Email</label>
          <input type="email" value="<?= set_value('email') ?>" name="email" id="email" style="margin-bottom: 5px" tabindex="1" />
          <small class="text-danger"><?= form_error('email') ?></small>
						
          <small class="float-right"; style="white"><em><a href="#" onclick="showRecoverPasswordForm()">Forgot your password?</a></em></small>
          <label for="customer_password" class="login">Password</label>
          <input type="password" value="" name="password" id="password" class="password" style="margin-bottom:5px" tabindex="2" />
          <small class="text-danger"><?= form_error('password') ?></small>
						
          <input class="btn action_button" type="submit" value="Sign In" tabindex="3" />
            <p class="float-right" style="padding-top: 8px; color: white">
              New Customer? <a href="<?= base_url('halaman/register'); ?>" id="customer_register">Sign up &rarr;</a>
            </p>
        </form>
        </div>
        <div id="recover-password" style='display:none'>
          <div class="six columns offset-by-five">
            <h4>Reset Password</h4>
            <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
            <div id="recover_email" class="clearfix large_form">
              <label for="email" class="large">Email</label>
              <input type="email" value="" size="30" name="email" id="recover-email" class="large"/>
            </div>
            <p>
              <em class="note">We will send you an email to reset your password.</em>
            </p>
              <div class="action_bottom">
                <input class="btn action_button" type="submit" value="Submit" />
                <span class="note">or <a href="#" onclick="hideRecoverPasswordForm()">Cancel</a></span>
              </div>
            </form>
          </div>
        </div>
        <script type="text/javascript">
          function showRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'block';
            document.getElementById('login_form').style.display='none';
            return false;
          }
          function hideRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'none';
            document.getElementById('login_form').style.display = 'block';
          return false;
          }
          if (window.location.hash == '#recover') { showRecoverPasswordForm() }
    
          // reset_success is only true when the reset form is
      
        </script>
        </div>
      </content>
  
      
