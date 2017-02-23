<html>
    <head>
        <title>Validating form fields using CodeIgniter</title>

    </head>
    <body>
        <div id="container">
		
        <?php echo form_open_multipart('validate'); ?>
        <h1>Validating form fields using CodeIgniter</h1><hr/> 
        
				
		<h5>Username</h5>
		<?php echo form_error('username'); ?>
		<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

		<h5>Password</h5>
		<?php echo form_error('password'); ?>
		<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

		<h5>Password Confirm</h5>
		<?php echo form_error('passconf'); ?>
		<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

		<h5>Email Address</h5>
		<?php echo form_error('email'); ?>
		<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

		<h5>image upload</h5>
		<?php echo form_error('userfile'); ?>
		<input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>" size="50" />
			
		<BR>

		<div><input type="submit" value="Submit" /></div

        <?php echo form_close(); ?>
        
        
       </div>
    </body>
</html>
