
<h2 align="center">Личные данные:</h2><br>
<table border="0" width="50%" height="20%" align="center">
	<tr>
		<td>Имя</td>
		<td><?php echo "$firstname"; ?></td>
	</tr>
	<tr>
		<td>Фамиллия</td>
		<td><?php echo "$surname"; ?></td>
	</tr>
	<tr>
		<td>Логин</td>
		<td><?php echo "$login"; ?></td>
	</tr>
	<tr>
		<td>Пароль</td>
		<td><?php echo "$password"; ?></td>
	</tr>
	<tr>
		<td>И-мейл</td>
		<td><?php echo "$email"; ?></td>
	</tr>
	<tr>
		<td>Дата рождения</td>
		<td><?php echo "$date_b"; ?></td>
	</tr>
	<tr>
		<td>Мобильный</td>
		<td><?php echo "$mobile"; ?></td>
	</tr>
	<tr>
		<td>Аватар</td>
		<td><img src="/uploads/<?php echo $logo?>" height="100"></td>
	</tr>
</table>
	<div>
		<a class="btn btn-info" href="<?php echo site_url().'/main/upd_user'?>">Редактировать учетную запись</a>
	</div><br>
	<div>
		<a class="btn btn-danger" href="<?php echo site_url().'/main/del_user'?>">Удалить учетную запись</a>
	</div><br>
	<div>
		<a class="btn btn-info" href="<?php echo site_url().'/main/log_out'?>">Выйти из учетной записи</a>
	</div>





