<?php
	$games = array();
	$items = new Products();
	$games = $items->listProducts();


	if (isset($_GET['id']))	{
			$document['template'] = 'game';
		
			$game = $items->getProduct($_GET['id']);	
			$product = Gameservices::validateGame($game);
			$smarty->assign('game', $product);
	}
	else {
			$document['template'] = 'games';
						
				
			/*********Games For View************/

			foreach ($games as $value) {
				$products[] = Gameservices::validateGameList($value);
			}
			/********************************/
			

			$smarty->assign('games', $products);
	}
	
?>	