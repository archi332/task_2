<?php 
include 'header.php'; 
include 'top.php';
if ($_POST['page'] == "signup success"){
	echo '<h3 class="text-center">Все заполнено верно!!!</h3>';
	echo "Продолжение будет позже...";
	echo anchor('main/entry', 'Вернутся');
} elseif ($_POST['page'] == "signup failed") {
	include 'form.php';
} elseif ($_POST['page'] == "registration success") {
	echo '<h3 class="text-center">Все поля заполнены верно.</h3>';
	echo "Авторизируйтесь, используя форму:  ";
	echo anchor('main/entry', 'Форма');
} elseif ($_POST['page'] == "registration failed") {
	include 'form_reg.php';
}
include 'footer.php'; 
include 'bottom.php';