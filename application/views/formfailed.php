<?php include 'header.php'; include 'top.php'; include 'form_reg.php';?>

<div>
	<h3 class="text-center">Некоторые поля заполнены не верно!!!</h3>
	<?php echo validation_errors(); ?>
	<p><?=anchor('main/form_reg', 'Еще раз!'); ?></p>
</div>

<?php include 'footer.php'; include 'bottom.php';?>