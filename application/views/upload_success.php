<html>
<head>
<title>Форма загрузки</title>
</head>
<body>

<h3>Файл успешно загружен!</h3>

<ul>
<?php foreach($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<br><pre>
<?php var_dump($upload_data); ?> </pre>
<p><?php echo anchor('main/try_upld', 'Загрузить еще!'); ?></p>

</body>
</html>