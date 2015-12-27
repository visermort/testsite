<?php

$ourAdrress="http://".$_SERVER[HTTP_HOST].$_SERVER[SCRIPT_NAME];


//читаем из файла места работы, скидываем в массив, затем из массива
//формируем html блок 
function getworks() {
$filename="data\works.txt";
if(is_readable($filename))
	{
			$rfile=fopen($filename,"r");
			while(!feof($rfile)) {
				$wstr=fgets($rfile);
				$work=explode("~",$wstr);
			    $workarr[]=$work;
			    }
			fclose($rfile);
            $res="";  
            //print_r($workarr);
            if($workarr)
            foreach ($workarr as $value) {
            	$res .= "<p class=\"work\">".$value[0]."<br><span class=\"lastline\">".$value[1]."</span><p>";
                }//if ($workarr) foreach
            echo $res;    
	}//if fileexists	
}//function


 //аналогично с небольшим отличием читаем места учёбы
function getstudy() {
$filename="data/study.txt";
if(is_readable($filename))
	{
			$rfile=fopen($filename,"r");
			while(!feof($rfile)) {
				$wstr=fgets($rfile);
				$work=explode("~",$wstr);
			    $workarr[]=$work;
			    }
			fclose($rfile);
            $res="";  
         //   print_r($workarr);
            if($workarr)
            foreach ($workarr as $value) {   //здесь class параграфа берётся как третий элемент массива
             	$res .= "<p class=\"".$value[2]."\">".$value[0]."<br><span class=\"lastline\">".$value[1]."</span><p>";
                }//if ($workarr) foreach
            echo $res;    
	}//if fileexists	
}//function 

?>