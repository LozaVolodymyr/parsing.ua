<?php
		$res = new DjinniDeveloper();
		$rev = new DjinniDevelopersParser();
		$links = $rev->getLinksList();
		print_r($links);
		// $tobd = $res->getLink();
 		// echo $res->link;
 		$devs = $res->getDevelopersInfo();
 		print_r($devs);

	
