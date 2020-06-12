<content class="register">
    <div>
      <a class="ca">Create Account</a>
    </div>
    <div id="create-customer">
		<?= $this->session->flashdata('message') ?>
		<form method="post" action="<?= base_url('halaman/register'); ?>" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
          	<div id="first_name">
            	<label for="first_name" class="login">First Name</label>
            	<br class="clear" />
							<input type="text" value="<?= set_value('firstname') ?>" name="firstname" id="first_name"/>
						<small class="text-danger"><?= form_error('firstname') ?></small>
							
          	</div>
			<div id="last_name">
            	<label for="last_name" class="login">Last Name</label><br class="clear" />
            	<input type="text" value="<?= set_value('lastname') ?>" name="lastname" id="last_name"/>
							<small class="text-danger"><?= form_error('lastname') ?></small>
						
						</div>
          	<div id="email">
           		<label for="email" class="login">Email</label><br class="clear" />
							<input type="email" value="<?= set_value('email') ?>" name="email" id="email"/>
							<small class="text-danger"><?= form_error('email') ?></small>
						
          	</div>
          	<div id="password">
            	<label for="password" class="login">Password</label><br class="clear" />
							<input type="password" value="" name="password" id="password"/>
							<small class="text-danger"><?= form_error('lastname') ?></small>
          	</div>
          	<div class="action_bottom">
            	<input class="btn action_button upp" type="submit" value="Sign Up" />
            	<p class="float-right" style="padding-top: 8px;">Returning Customer? <a href="<?= base_url('halaman/login'); ?>">Sign In &rarr;</a></p>
          	</div>
        </form>
    </div>
  </content>
