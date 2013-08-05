<?php

	echo form_open('login/validate', 'class=""');
	echo form_fieldset('Login', 'class="login"');
	echo form_input('username', 'Username');
	echo form_password('password', 'Password');
	echo form_submit('submit', 'Login','class="btn"');
	echo form_fieldset_close();
	echo form_close();

?>