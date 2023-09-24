<div class="login-form">
    	<?php
echo wp_login_form(array(
    'echo' => false,
    'label_username' => __('Your Username'),
    'label_password' => __('Your Password'),
    'label_remember' => __('Remember Me'),
    'value_remember' => true,
));
?>
</div>