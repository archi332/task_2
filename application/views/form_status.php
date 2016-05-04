<?php 
include 'header.php'; 
include 'top.php';
if ($_POST['page'] == "signup success"){
	echo '<h3 class="text-center">Вы успешно авторизовались!</h3>';
	echo "<div>Можете перейти в ". anchor('main/service', 'личный кабинет'). "</div>";
} elseif ($_POST['page'] == "signup failed") {
	include 'form.php';	
} elseif ($_POST['page'] == "signup none") {
	include 'form.php';	
	echo '<h3 align="center">Пользователя с такими регистрационными данными не существует!</h3><div>Попробуйте еще раз.</div>';
} elseif ($_POST['page'] == "registration success") {
	echo '<h3 class="text-center">Все поля заполнены верно.</h3>';
	echo "Авторизируйтесь, используя форму:  ";
	echo anchor('main/entry', 'Форма');
	echo "<details><summary>переменная upload_data</summary>";
	if (isset($upload_data)) {
		echo "<pre>";
		var_dump($upload_data);
		echo "</pre>";
	}
	echo "</details>";
} elseif ($_POST['page'] == "registration failed") {
	include 'form_reg.php';
} elseif ($_POST['page'] == "delete success") { ?>
	<h3>Пользователь успешно удалён!</h3>

<?php 
}
include 'footer.php'; 
include 'bottom.php';