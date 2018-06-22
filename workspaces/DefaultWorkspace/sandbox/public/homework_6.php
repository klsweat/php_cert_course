<?php
// Check for posted data and filter
if($_POST
    && $username = filter_var($_POST['username'], FILTER_VALIDATE_STRING) ){
    echo 'Data is validated ... and handled';
} else {
    //echo 'Invalid input';
}
?>


<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

	<fieldset>
		<legend>Login</legend>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		
		<table>
		<tr>
		<td>
		<label for='username' >UserName*:</label>
		</td>
		<td>
		<input type='text' name='username' id='username'  maxlength="50" />
		</td>
		</tr>

		<tr>
		<td>
		<label for='password' >Password*:</label>
		</td>
		<td>
		<input type='password' name='password' id='password' maxlength="50" />
		</td>
		</tr>

		<tr>
		<td>
		<label for='email' >Email*:</label>
		</td>
		<td>
		<input type='email' name='email' id='email' />
		</td>
		</tr>

		<tr>
		<td>

		<input type='submit' name='Submit' value='Submit' />
		</td>
		</tr>

		</table>
	</fieldset>
</form>
