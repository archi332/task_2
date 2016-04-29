<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div>

			<?php echo form_open_multipart('main/reg_new'); ?>
        	  <div class="text-center"><H3>Форма регистрации</H3></div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Имя:</label>
			    <input type="text" class="form-control" value="<?php echo set_value('firstname'); ?>" name="firstname" placeholder="First Name" required>
			   		<?php echo form_error('firstname');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Фамилия:</label>
			    <input type="text" class="form-control" value="<?php echo set_value('surname'); ?>" name="surname" placeholder="Second Name" required>
			    	<?php echo form_error('surname');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Логин: </label>
			    <input type="text" class="form-control" value="<?php echo set_value('login'); ?>" name="login" placeholder="Login">
			    	<?php if (isset($_POST['dublicate'])) {
			    			echo "Такой логин уже используется!";
			    		} else{
							echo form_error('login');  
			    		} ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Пароль: </label>
			    <input type="password" class="form-control" name="password" placeholder="Password">
			    	<?php echo form_error('password');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Эл. почта: </label>
			    <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="example@email">
			    	<?php echo form_error('email');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Дата рождения: </label>
			    <input type="date" class="form-control" value="<?php echo set_value('date_b'); ?>" name="date_b" min="31-12-2014" >
			    	<?php echo form_error('date_b');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Мобильный номер: </label>
			    <input type="tel" value="<?php echo set_value('mobile'); ?>" class="form-control" name="mobile" placeholder="(***) ***-**-**" pattern="\(\d\d\d\)?\d\d\d-\d\d-\d\d" alert="Введите номер в формате (***) ***-**-**">
			    	<?php echo form_error('mobile');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Загрузите аватар: </label>
			    <input type="file" id="exampleInputFile" name="logo">
			    <p class="help-block">Файл в формате JPG, GIF.</p>
			    <?php if (isset($error)) { 
			    	echo $error; } ?>
			  </div>
			  <button type="submit" value="upload" class="btn btn-default">Регистрация</button>
			</form>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
