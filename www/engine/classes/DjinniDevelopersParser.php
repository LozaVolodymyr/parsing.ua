<?php
	include_once('engine/lib/curl_query.php');
 	include_once('engine/lib/simple_html_dom.php');


class DjinniDevelopersParser {
 			private $developers = array();
 			private $count = 0;

 		function getLinksList ()
 			{
 				$djDevsLink = new DjinniDeveloper;
 				$links = $djDevsLink->getData();
 					$applicants = $links->find('.clearfix');
 					foreach ($applicants as $applicant) {
 						$this->count++;
 						if ($this->count <= 5) {
 							$applicant = $links->find('.clearfix', $this->count-1);
 							$path = $applicant->find('.profile', 0)->href;
	 						$link = 'http://djinni.co';
 							$this->developers['link'] = $link.=$path;
 							var_dump('<br>Count = '.$this->count.'<br>', $this->developers, '<br><br>');
 						}
 					}
 			} 
 		function getDevelopersInfo()
 					{
 						
 					}			
 }


class DjinniDeveloper {
			public $page = 1;
 			public $link;
 			public $position;
 			public $salary;
 			public $location;
 			public $years;
 			public $eng_level;
 			public $skill;
 			public $expectations;
 			public $experience;


 		function getData() 
 			{
	    		$html = curl_get('http://djinni.co/developers/?page='.$this->page.'');
 				$dom = str_get_html($html);
 					return $dom;
			}
		function getDataOnePosition()
			{
				$one_description = curl_get($this->link); 
 				$one_dom = str_get_html($one_description);
 					return $one_dom;
			}


 		public function getDevelopersInfo($i)
 			{
 				$this->getLink($i);
 				$this->getPosition();
 				$this->getSalary();
 				$this->getLocation();
 				$this->getProfessionalExperience();
 				$this->getLangugeExperience();
 				$this->getSkills();
 				$this->getExpectations();
 				$this->getExperience();
 				
 				$arrayDevelopers = array('link' => $this->link,
 										 'position' => $this->position,
 										 'salary' => $this->salary,
 										 'location' => $this->location,
 										 'years' => $this->years,
 										 'eng_level' => $this->eng_level,
 										 'skill' => $this->skill,
 										 'expectations' => $this->expectations,
 										 'experience' => $this->experience
 										);
 					return $arrayDevelopers;
 			}
 		



  	 	private function getLink($i)
 			{
 				$dom = $this->getData();
 				$applicant = $dom->find('.clearfix', $i);
 				$path = $applicant->find('.profile', 0)->href;
	 			$link = 'http://djinni.co';
					$this->link = $link.=$path;
						
 			}

 		private function getPosition()
 			{
 				$dom = $this->getData();
 				$applicant = $dom->find('.clearfix', 0);
 					$this->position = trim($applicant->find('.profile', 0)->plaintext);
 			}
 			
 		private function getSalary()
 			{	
 				$one_dom = $this->getDataOnePosition();

	 			$this->salary = trim(substr($one_dom->find('.profile-details-salary', 0)->plaintext, 1)); 
 				
 			}
	    private function getLocation()
 			{	
 				$one_dom = $this->getDataOnePosition();

	 			$location = explode(',', trim($one_dom->find('.main-profile-details', 0)->plaintext)); 
	 			$this->location = $location[0];
	 						
 			}
	    private function getProfessionalExperience()
 			{	
 				$one_dom = $this->getDataOnePosition();
	 			
	 			$experience = explode('·', $one_dom->find('.before-hint', 0)->plaintext);
	 		 	$year = explode(' ', trim($experience[0]));
	 			$this->years = $year[0];
 			}
 		private function getLangugeExperience()
 			{	
 				$one_dom = $this->getDataOnePosition();
	 			
	 			$experience = explode('·', $one_dom->find('.before-hint', 0)->plaintext);
	 		 	$this->eng_level = trim(str_replace('[?]', '',$experience[1]));
 			}
 		private function getSkills()
 			{	
 				$one_dom = $this->getDataOnePosition();

	 			$skillArray = array();
	 				for ($i=0; $i < 50; $i++) { 
                  		if (isset($one_dom->find('.skill', $i)->id)) {
          					$skillArray[] = $one_dom->find('.skill', $i)->id;

              			}
       			}
       				$this->skill = $skillArray;
       				$skillArray = array();
	 		}
 		private function getExpectations()
 			{	
 				$one_dom = $this->getDataOnePosition();

 					if (isset($one_dom->find('p> .profile', 1)->plaintext)) {
	 					$this->expectations = $one_dom->find('p> .profile', 1)->plaintext;
	 							
	 				}
 			}
 		private function getExperience()
 			{	
 				$one_dom = $this->getDataOnePosition();

 					if (isset($one_dom->find('p> .profile', 0)->plaintext)) {
	 					$this->experience = $one_dom->find('p> .profile', 0)->plaintext;
	 							
	 				}
 			}

	    }
    
?>
