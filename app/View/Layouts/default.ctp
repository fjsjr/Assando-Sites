<!DOCTYPE html>
<?php $cakeDescription = __d('Cake_eve', 'Brazil Cake Show: Dojo sobre CakePhp'); ?>
<html>
<head>
	<!-- META -->
	<title>
	<?php echo $cakeDescription ?>:
	<?php echo $title_for_layout; ?>
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="<?php echo $cakeDescription ?>" />
	
	<!-- CSS -->
	<?php
		echo $this->Html->css(array('style','kickstart'));
		//echo $this->Html->css('kickstart');
	?>
	
	<!-- Javascript -->
	<?php
		echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min','kickstart'));
		//echo $this->Html->script('kickstart');
	?>

</head>
<body>
<div class="grid">
	<div class="col_12" style="margin-top:100px;">
		<?php echo $this->element('menu'); ?>
		
		  <?php echo $this->fetch('content'); ?>		
	
	</div>
<?php echo $this->element('footer'); ?>	
</div> <!-- End Grid -->
</body>
</html>
