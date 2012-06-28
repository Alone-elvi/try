
<html>

<head>
	<title><?php echo $result['title']?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

</head>
<body>
	<div id="header">
		<?php foreach ($result['menu'] as $key => $value):?>
		<?php echo $value;?> 			
		<?php endforeach;?>

	</div>
	<div id="content">
		<br>
		<?php echo $result['comment'];?>
	</div>
	<div> 
		<br>
		<?php echo $result['footer'];?>
	</div> 

</body>
</html>
