<?php

$ourAdrress="http://".$_SERVER[HTTP_HOST].$_SERVER[SCRIPT_NAME];

//читаем из файла - данные в массив
function getdatafromfile($filename) {
		if(is_readable($filename))
	       {
			$rfile=fopen($filename,"r");
			while(!feof($rfile)) {
				$wstr=fgets($rfile);
				if (trim($wstr)=="") continue;
				$work=explode("~",$wstr);
			    $workarr[]=$work;
			    }
			fclose($rfile);
            return $workarr;
		    }
}


//читаем из файла места работы, скидываем в массив, затем из массива
//формируем html блок 
function getworks() {
            $filename="data\\works.txt";
			$workarr=getdatafromfile($filename);
            $res="";  
            //print_r($workarr);
            if($workarr)
            foreach ($workarr as $value) {
            	$res .= "<p class=\"work\">$value[0]<br><span class=\"lastline\">$value[1]</span></p>";
                }//if ($workarr) foreach
            echo $res;    
}//function


 //аналогично с небольшим отличием читаем места учёбы
function getstudy() {
            $filename="data\\study.txt";
			$workarr=getdatafromfile($filename);
            $res="";  
            //print_r($workarr);
            if($workarr)
            foreach ($workarr as $value) {   //здесь class параграфа берётся как третий элемент массива
             	$res .= "<p class=\"$value[2]\">$value[0]<br><span class=\"lastline\">$value[1]</span></p>";
                }//if ($workarr) foreach
            echo $res;    
}//function 

//мои проекты
function getprojects(){
            $filename="data\projects.txt";
			$workarr=getdatafromfile($filename);
            $res="";  
           // print_r($workarr);
            if($workarr)
            foreach ($workarr as $value) {   
             	$res .= "<a href=\"http://$value[2]\" class=\"projects\"><img src=\"data/graph/$value[3]\">
             	          <p>$value[0]<br> <span class=\"lastline\">$value[1]</span></p></a>";
                }//if ($workarr) foreach
            echo $res;    
}//function 


//проекты с моим участием
function getTakePart(){
            $filename="data\\takepart.txt";
			//echo $filename;
			$workarr=getdatafromfile($filename);
            $res="";  
            //print_r($workarr);
            if($workarr)
            foreach ($workarr as $value) {   
             	$res .= "<a href=\"http://$value[2]\" class=\"projects\"><img src=\"data/graph/$value[3]\">
             	          <p>$value[0]<br> <span class=\"lastline\">$value[1]</span></p></a>";
                }//if ($workarr) foreach
            echo $res;    
}



?>