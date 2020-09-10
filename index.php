
<?
	include "models/goods.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">   
    <title>GS Shop</title>
    <link rel="stylesheet" href="public/css/styles.css" type="text/css" media="all">
</head> 
<body>
	<div class="container">
		<? include "templ/header.php";?>
	</div>
	<div class="leftblock">
		<? include "templ/left_menu.php";?>
	</div>
	<div class="content">
		<h1>GS Shop</h1>
		<hr>
		<?
			$items =get_all_items();
			if ($items){
				foreach($items as $item){?>
					<div class="item">
						<a href="info.php?id=<?=$item['id']?>"><img src="<?='public/img/small/'.$item['img_name']?>"></a>
						<h3 class="item-name"><a href="info.php?id=<?=$item['id']?>"><?=$item['name']?></a> </h3>
						<p class="price"><?=$item['ammount']?></p>
						<p class="add-to-basket"><a href="#" title="Добавить в заказ">заказ</a></p>

					</div>
				<?}
			}
		?>



	</div>
	<footer>
		<? include "templ/footer.php";?>
	</footer>>
</body>
</html>