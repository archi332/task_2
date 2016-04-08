<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div>

			<?php echo form_open('main/reg_new'); ?>
        	  <div class="text-center"><H3>Форма регистрации</H3></div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Имя:</label>
			    <input type="text" class="form-control" name="firstname" placeholder="First Name">
			    <?php echo form_error('firstname');  ?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Фамилия:</label>
			    <input type="text" class="form-control" name="surname" placeholder="Second Name">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Логин: </label>
			    <input type="text" class="form-control" name="login" placeholder="Login">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Пароль: </label>
			    <input type="password" class="form-control" name="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Эл. почта: </label>
			    <input type="email" class="form-control" name="email" placeholder="example@email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Дата рождения: </label>
			    <input type="date" class="form-control" name="date_b" min="31-12-2014" >
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Мобильный номер: </label>
			    <input type="tel" class="form-control" name="mobile" placeholder="***-*******">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Загрузите аватар: </label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Файл в формате JPG, GIF.</p>
			  </div>
			  <button type="submit" class="btn btn-default">Регистрация</button>
			</form>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
