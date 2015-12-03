<?php

	if (isset($_SESSION['products_id']))
	{
		$document['template'] = 'cart';
		$items = new Products();
		
		foreach ($_SESSION['products_id'] as $value) {
			$products[] = Gameservices::validateCartGames($items->getProduct($value));
		}
		$total = count($products)."Games";
		$smarty->assign('total', $total);
		$smarty->assign('products', $products);
	}
	else {
		//$products = 'Server Error';
		$document['template'] = 'emptycart';
	}
	
	
	

?>