<?php
	include_once('engine/lib/curl_query.php');
 	include_once('engine/lib/phpQuery.php');
 	include_once('engine/lib/simple_html_dom.php');

 	

class Products
{
  var $Db;

  function __construct()
  {
    $this->Db = Db::getInstance();
  }

  function listProducts()
  {
    return($this->Db->getAll("SELECT * FROM `games` ORDER BY `name`"));
  }

  function getProduct($idProduct)
  {
  	return($this->Db->getRow("SELECT * FROM `games` WHERE `id`=".$idProduct));
  }
}


	class parsing {

    	function curl_get($url, $referer = "http://www.google.com") {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; ry:38.0) Gecko/20100101 Firefox/38.0");
			curl_setopt($ch, CURLOPT_REFERER, $referer);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
	    }	


	    function image_parse()  {
	    	

	    	
	    }
	    function parse() {
	    	$Db = Db::getInstance();
 			
 			$html = $this->curl_get('http://www.onlinekeystore.com');
 			$dom = str_get_html($html);
 			$games = $dom->find('.game-item');
 			$count = 0;
 			foreach($games as $item){
 				$count++;
 				if ($count <= 15) {	
 					$tobd = array();
	 				$a = $item->find('.name_genre > a', 0);
	 				// $tobd['link'] = $a->href;
	 				$name = $tobd['name'] = mysql_real_escape_string(trim($item->find('.name_genre > a', 0)->plaintext));
	 				$tobd['old_price'] = trim(substr($item->find('span.c', 0)->plaintext, 10));
	 				$tobd['new_price'] = trim(substr($item->find('span.c', 1)->plaintext, 10));
	 			
	 				$one_item = $this->curl_get($a->href); 
	 				$one_dom = str_get_html($one_item);
	 				
	    				$cat_page = phpQuery::newDocument($one_item);
	    				$paginator = $cat_page->find('img#product_thumbnail');
	    				$src=pq($paginator)->attr('src');
	    				$saveto='images/img/'.$count.'.jpg';
						$res=file_put_contents($saveto, file_get_contents($src)); 

	 				$tobd['developer'] = $one_dom->find('ul.brief>li', 0)->plaintext;
	 				$tobd['overview'] = "";
	 				$paragraph = $one_dom->find('#about_game', 0)->find('p');
	 				foreach ($paragraph as $p_item) {
	 					if (!preg_match('/<iframe/', $p_item->outertext)) {
	 						$tobd['overview'] .= $p_item->plaintext;
	 					}
	 				}
	 				$one_dom->clear();
	 				unset($one_dom);

	 				$id = $Db->getOne("Select id from `games` where `name` ='".$name."'");
	 			
	 				if($id) {
	 					$Db->update('games', $id, $tobd);
	 				} else {
	 			   		$Db->insert('games', $tobd);
	 				}

	 			
			 	}	
	 		
 			}
 			return $tobd;
	    }
    }
?>
