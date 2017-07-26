<?php
	$json = file_get_contents('phone-book.json');
	$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home-work-2.1</title>
	<style type="text/css">

		.phone-book-section {
			position: relative;
			padding-top: 40px;  			
		}

		.phone-book-table {
			margin: 0 auto;	
			border-collapse: collapse;
		}

		.pb-cell {	
			padding: 5px;		
			border: 1px solid #000000;			
		}

		.cell__top {
			font-weight: bold; 
			background-color: #ffe4b5;
		}

		.cell__content {
			background-color: #f0e68c;
		}
	</style>
</head>
<body>
	<section class="phone-book-section">
		<table class="phone-book-table">
			<tr>
				<td class="pb-cell cell__top">Имя</td>
				<td class="pb-cell cell__top">Фамилия</td>
				<td class="pb-cell cell__top">Город</td>
				<td class="pb-cell cell__top">Улица</td>
				<td class="pb-cell cell__top">Дом</td>
				<td class="pb-cell cell__top">Номер телефона</td>
			</tr>
			<?php 
			foreach ($data as $person => $personData) { ?>
				<tr>
					<td class="pb-cell cell__content"><?= $personData['firstName'] ?></td>
					<td class="pb-cell cell__content"><?= $personData['lastName'] ?></td>
					<?php foreach ($personData['adress'] as $value) { ?>
						<td class="pb-cell cell__content"><?= $value ?></td>					
					<?php } ?>
					<td class="pb-cell cell__content"><?php echo implode(', ', $personData['phoneNumber']); ?></td>
				</tr>					
			<?php 
			} ?>
		</table>
	</section>
</body>
</html>