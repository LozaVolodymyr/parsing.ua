<?php
class Service
{
  public static function View($variable)
  {
    echo "<pre style='background: #DAF2FF;'>";
    print_r($variable);
    echo "</pre>";
  }

  public static function getRandomString($length = 50)
  {
    $characters = "!@#$%&*()-=.?1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $strlen = strlen($characters) - 1;
    $string = '';

  	for ($i = 0; $i < $length; $i++)
  		$string .= $characters[mt_rand(0, $strlen)];

    return $string;
  }

  public static function getRandomHash()
  {
    return(hash("whirlpool", self::getRandomString().microtime()));
  }

  public static function getRandomHashMD5()
  {
    return(md5(self::getRandomString().microtime()));
  }

  public static function hashString($string)
  {
    return(hash("whirlpool", $string));
  }

  public static function scanDir($dir)
  {
    $result = array();
    $root = scandir($dir);
    foreach($root as $value)
    {
      if($value === '.' || $value === '..')
        continue;
      if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;}
      foreach(Service::scanDir("$dir/$value") as $value)
        $result[]=$value;
    }
    return $result;
  }

  public static function transliterate($string)
	{
    $string = mb_strtolower($string, 'UTF-8');
    $trans = array(
      "/" => "",
      " " => "_",
      "!" => "",
      "?" => "",
      "#" => "",
      "`" => "",
      '"' => "",
      "'" => "",
      "," => "",
      ":" => "",
      "=" => "",
      "*" => "",
      "<" => "",
      ">" => "",
      "«" => "",
      "»" => "",
      "[" => "",
      "]" => "",
      "^" => "",
      "|" => "",
      "{" => "",
      "}" => "",
      "%" => "pct",
      "+" => "_plus_",
      "&" => "_and_",
      "А" => "A","С" => "C","Х" => "X",
      "Ґ"=>"G","Ё"=>"YO","Є"=>"E","Ї"=>"YI","І"=>"I",
      "і"=>"i","ґ"=>"g","ё"=>"yo","№"=>"#","є"=>"e",
      "ї"=>"yi","А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
      "Д"=>"D","Е"=>"E","Ж"=>"ZH","З"=>"Z","И"=>"I",
      "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
      "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
      "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
      "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"'","Ы"=>"YI","Ь"=>"",
      "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
      "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"zh",
      "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
      "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
      "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
      "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"",
      "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"
    );
    return strtr($string, $trans);
	}

}
?>
