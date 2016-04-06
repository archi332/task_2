<?php
include 'header.php';
?>
	
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2"><!-- --Валидация_1<br>--Валидация_2<br>--Запись в БД<br>--Авторизация<br>--Кнопки для авторизированых --></div>
	<div class="col-md-8">
		<nav class="navbar navbar-default">
		  <div class="container-fluid text-center">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="./">
		      	<span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Главная
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo site_url().'/Welcome/contacts'?>">
		        	<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;Контакты <span class="sr-only">(current)</span></a>
		        </li>
		        <li><a href="<?php echo site_url().'/Welcome/service'?>">
		        	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Личный кабинет <span class="sr-only">(current)</span></a>
		        </li>
		        <li><a href="<?php echo site_url().'/Welcome/entry'?>">
		        	<span class="glyphicon glyphicon-random" aria-hidden="true"></span>&nbsp;Вход/выход <span class="sr-only">(current)</span></a>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>