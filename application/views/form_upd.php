<?php include 'top.php'; ?>

<div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-8">



    	<?php echo form_open_multipart('/main/do_update'); ?>
			<div class="form-group">
				<label for="firstname">Имя:</label>
				<input type="text" class="form-control" name="firstname" value=
				"<?php if (isset($_POST['firstname'])) { echo $_POST['firstname']; } else { echo  $firstname;} ?>">
				<?php echo form_error('firstname'); ?>
			</div>
			<div class="form-group">
				<label for="surname">Фамилия:</label>
				<input type="text" class="form-control" name="surname" value=
				"<?php if (isset($_POST['surname'])) { echo $_POST['surname']; } else { echo $surname;} ?>">
				<?php echo form_error('surname'); ?>
			</div>
			<div class="form-group">
				<label for="login">Логин:</label>
				<input type="text" class="form-control" name="login" value=
				"<?php if (isset($_POST['login'])) { echo $_POST['login']; } else { echo $login;} ?>">
				<?php echo form_error('login'); ?>
			</div>
			<div class="form-group">
				<label for="password">Пароль:</label>
				<input type="text" class="form-control" name="password" value=
				"<?php if (isset($_POST['password'])) { echo $_POST['password']; } else { echo $password;} ?>">
				<?php echo form_error('password'); ?>
			</div>
			<div class="form-group">
				<label for="email">Электронный адрес:</label>
				<input type="text" class="form-control" name="email" value=
				"<?php if (isset($_POST['email'])) { echo $_POST['email']; } else { echo $email;} ?>">
				<?php echo form_error('email'); ?>
			</div>
			<div class="form-group">
				<label for="date_b">День рождения:</label>
				<input type="date" class="form-control" name="date_b" value=
				"<?php if (isset($_POST['date_b'])) { echo $_POST['date_b']; } else { echo $date_b;} ?>">
				<?php echo form_error('date_b'); ?>
			</div>
			<div class="form-group">
				<label for="mobile">Мобильный номер:</label>
				<input type="text" class="form-control" name="mobile" value=
				"<?php if (isset($_POST['mobile'])) { echo $_POST['mobile']; } else { echo $mobile;} ?>">
				<?php echo form_error('mobile'); ?>
			</div>
			<div class="form-group">
				<label for="logo">Аватар:</label>
				<img src="<?php echo '/uploads/'; 
					if (isset($f_property['client_name']) && !isset($error)) { 
			    		echo $f_property['client_name']; 
			    	} else { 
			    		if(isset($logo)) {
			    			echo "$logo"; 
			    		} else {echo $cur_data['logo']; 
			    		} 
			    	}
				?>" height="150">
				<label for="selectNewLogo">Вы также можете выбрать новый аватар:</label>
				<input type="file" name="logo" id="exampleInputFile"></input>
			    <p class="help-block">Файл в формате JPG, GIF.</p>
				<?php if (isset($error)) { 
			    	echo $error; } ?>
			</div>
			<button class="btn btn-info" type="submit" value="upload" >Изменять!</button>
			<a class="btn btn-warning" href="<?php echo site_url(). '/main/service'; ?>"> Вернутся</a>
		</form>
    </div>
</div>

<?php include 'bottom.php'; ?>




