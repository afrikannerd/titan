<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of UserModel
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
$title = 'Login';
include_once  '../app/views/templates/header.inc.php';
?>
 <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<h4 class="text-center">Log In</h4>
	<div class="form-group">
            <input type="text" name="username" id="user" value="<?php echo (isset($data->name))? $data->name:'' ;?>" placeholder="Username" class="form-control animation">
	</div>
	<div class="form-group">
		<input type="password" name="password" id="pass" placeholder="Password" class="form-control animation">
	</div>
	<div class="form-group">
		<input type="submit" name="login" id="admin-signin" value="Log In" class="form-control animation">
	</div>
	<div class="form-group">
           
            <small class="text-right"><h5><a href="../account/register.php">Don't have an account?</a></h5></small>
                <small class="text-right"><h5><a href="#" data-toggle="popover" title="Reset Password" data-content="Log  in to the host account to change the password or contact the developer @amolokaleb">Forgot Password?</a></h5></small>
	</div>
</form><?php
include_once  '../app/views/templates/footer.inc.php';