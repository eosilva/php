<?php 
	spl_autoload_register(function ($class_name) {
	    include 'class/' . $class_name . '.class.php';
	});
	
	require_once('inc/functions.php');
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PHP - ORIENTAÇÃO A OBJETOS</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">PHP - Orientação a Objetos</div>
					<div class="panel-body">
						<?php
							$time = new ExecTime();

							for( $i=1; $i<=10; $i++) {
								$peoples[] = new Pessoa( generatorName(), generatorBirthday(), generatorSchooling() ); 
							}
						?>

						<table class="table table-striped table-bordered">
							<tr>
								<th width="300">Token</th>
								<th>Nome</th>
								<th width="200">Escolaridade</th>
								<th width="120">Data</th>
							</tr>
							<?php foreach ($peoples as $key => $people) : ?>
								<tr>
									<td width="300"><?php echo $people->getToken() ?></td>
									<td><?php echo $people->getName() ?></td>
									<td width="200"><?php echo $people->getSchooling() ?></td>
									<td width="120"><?php echo $people->getBirthday() ?></td>
								</tr>
							<?php endforeach; ?>
						</table>

						<?php echo $time->endExec() . ' - ' . $time->memoryUsage(); ?>
					</div>
				</div>				
			</div>
		</div>
	</body>
</html>