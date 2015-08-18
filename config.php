<?php
date_default_timezone_set('Asia/Yekaterinburg');

// Задаем константы:
define ('DS', DIRECTORY_SEPARATOR);

$sitePath = realpath(dirname(__FILE__) . DS) . DS;

define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'business');

define('SITE_HOST', $_SERVER['HTTP_HOST']);

if (isset($_SERVER['HTTP_REFERER']))
  define('REFERER', $_SERVER['HTTP_REFERER']);
else
  define('REFERER', SITE_HOST);

define('BRAND', 'Business Simulator');

define('FINE', 1);
define('ORDER', 2);
define('PART', 3);
define('COST', 4);
define('PROM', 5);
define('CUST_FINE', 6);
define('CREDIT', -1);

define('PERIOD1', 1);
define('PERIOD2', 2);
define('PERIOD3', 3);
define('PERIOD4', 4);

define('PERIOD_DISABLE', -1);
define('PERIOD_ENABLE', 1);
define('PERIOD_COMPLETED', 2);

define('PERIOD_MINUTES', 2);

define('CREDIT_ENABLE', 1);
define('CREDIT_ACCEPT', 2);
define('CREDIT_DISABLE', -1);


define('ADMIN_LOGIN', 'admin');
define('ADMIN_PASS', 'admin');

define('CUSTOMER_LOGIN', 'customer');
define('CUSTOMER_PASS', 'customer');

define('PROVIDER_LOGIN', 'provider');
define('PROVIDER_PASS', 'provider');

function mpr($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function sms_translit($str) 
{
  $translit = array(
      "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
      "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
      "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
      "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
      "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
      "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
      "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
      "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
      "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
      "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
      "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
      "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
      "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"," "=>"_"
  );
  return strtr($str, $translit);
}