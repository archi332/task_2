<?php
include 'header.php';
?>
	
<div class="container">
	<div class="col-md-2"></div>
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
		      <a class="navbar-brand" href="./">Главная</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="?contacts">Контакты <span class="sr-only">(current)</span></a></li>
		        <li><a href="?service">Личный кабинет <span class="sr-only">(current)</span></a></li>
		        <li><a href="?entry">Вход/выход <span class="sr-only">(current)</span></a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div>
		<?php 
			var_dump($_GET);
			echo "<br>";
			var_dump($_POST);
			echo "<br>";
		?>
			Вообще говоря, суть всей этой ситуации в том, что человеку свойственно делать обобщения, а в силу того, что человек думает при помощи языковых категорий, эти обобщения получают те или иные названия.
Так уж в жизни повелось, что объект X, напрямую связанный с функцией Y, волей-неволей будет иметь характерные черты Z, появившиеся в силу этой связи. Так обстоят дела и в эволюции, и в науке с техникой, и в обществе, да и вообще везде. Например: почему у самолёта есть крылья и двигатели? Потому что ему летать надо. Верно и обратное — летает самолёт в силу того, что имеет крылья и двигатели. Однако же бывают и такие объекты Х, черты Z которых, связанные с функцией Y, выглядят несколько нестандартно. Например, самолёт без крыльев en.w:Martin Marietta X-24A, у которого часть подъёмной силы создаётся оперением, а часть — юбер-горбатым фюзеляжем. ИЧСХ, от отсутствия крыльев этот самолёт не перестаёт быть самолётом! В этом случае происходит небольшой разрыв шаблона в силу того, что мы не привыкли к таким явлениям, как самолёты без крыльев, но зато привыкли к самолётам с крыльями.
Резюме: исключение подтверждает правило лишь в том смысле, что характерные черты Z обычно возникают неспроста и соответствуют требованиям, задаваемым функцией Y. Но это вовсе не означает, что другие варианты решения той же проблемы принципиально невозможны. Зато благодаря таким неординарным явлениям нам становится немного проще понять суть и смысл явлений ординарных. То есть, если вкурить в форму самолёта без крыльев и в то, каким образом он летает, нам станет значительно более понятным назначение обычных крыльев у обычных самолётов.
		</div>

		<div class="navbar-static-bottom row-fluid">
		<Br><b>Footer Footer Footer Footer Footer Footer Footer Footer </b>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>