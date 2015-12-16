<?php
		$res = new DjinniDeveloper();
		$rev = new DjinniDevelopersParser();
		$links = $rev->getLinksList();
		print_r($links);
		// $tobd = $res->getLink();
 		// echo $res->link;
 		for ($i=0; $i < 3 ; $i++) { 
 			$devs = $res->getDevelopersInfo($i);
 			print_r($devs);
 			# code...
 		}

	
