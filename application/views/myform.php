<html>
<head>
<title>Моя форма</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Имя пользователя</h5>
<input type="text" name="username" value="" size="50" />

<h5>Пароль</h5>
<input type="text" name="password" value="" size="50" />

<h5>Повторите пароль</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Адрес электронной почты</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Регистрация" /></div>

</form>

</body>
</html>