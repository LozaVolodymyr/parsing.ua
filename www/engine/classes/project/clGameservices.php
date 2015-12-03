<?php
class Gameservices {

	public static function validateGameList($game)
	{
		if (isset($game['image'])) {
			$image = $game['image'];
		}
		else {
			$image = 'images/img/'.$game['id'].'.jpg';
		}

		
		if (isset($game['developer']) || !($game['developer'] == '')) {
			$dev = $game['developer'];
		}
		else {
			$dev = '';
		}
	

		if (isset($game['name'])) {
			$name = $game['name'];
		}
		else {
			$name = 'Unknown Game';
		}

		if (isset($game['old_price']) && isset($game['new_price'])) {
			$price = '<span class=\'old-price\'>'.$game['old_price'].'</span> <span class=\'new-price\'>'.$game['new_price'].'</span>';
		}

		return $product[] = array('id'          =>    $game['id'],
						  	  'name'      	=>    $name,
						  	  'price'	    =>	  $price,
						  	  'image'     	=>    $image,
						  	  'developer' 	=>    $dev);	

	}

	public static function validateGame($game)
	{
		if (isset($game['image'])) {
			$image = $game['image'];
		}
		else {
			$image = 'images/img/'.$game['id'].'.jpg';
		}

		
		if (isset($game['developer']) || !($game['developer'] == '')) {
			$dev = $game['developer'];
		}
		else {
			$dev = '';
		}
	

		if (isset($game['name'])) {
			$name = $game['name'];
		}
		else {
			$name = 'Unknown Game';
		}
		

		if (isset($game['overview'])) {
			$overview = $game['overview'];
		}
		else {
			$overview = '';
		}


		if (isset($game['old_price']) && isset($game['new_price'])) {
			$price = '<span class=\'old-price\'>'.$game['old_price'].'</span> <span class=\'new-price\'>'.$game['new_price'].'</span>';
		}

	return $product = array(  'id'          =>    $game['id'],
						  	  'name'      	=>    $name,
						  	  'price'	    =>	  $price,
						  	  'image'     	=>    $image,
						  	  'developer' 	=>    $dev,
						  	  'overview'    =>    $overview);
	}

	public static function validateCartGames($game)
	{
		if (isset($game['name']))
		{
			$name = $game['name'];
		} else {
			$name = '';
		}


		if (isset($game['new_price']))
		{
			$price = $game['new_price'];
		} else {
			$price = 'free';
		}

	return $product = array('id'    => $game['id'],
							'name'  => $name,
							'price' => $price);	
	}

}

?>