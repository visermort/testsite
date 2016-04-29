<?php
header('Content-Type: text/html; charset=utf-8');

$pol = 'abracadabrarbadacarba';
$pol2 ='абвгдукаакудгвба';

function getUtfStr($str,$upper) {
    $count = mb_strlen($str, 'UTF-8');
    $arr = array();
    for ($i=0; $i<$count; $i++) {
        if ($upper) $arr[] = strtoupper(mb_substr($str, $i, 1, 'UTF-8'));
            else $arr[] = mb_substr($str, $i, 1, 'UTF-8');
    }
  //  echo '<pre>'; print_r($arr); echo '</pre>';
    return $arr;
}
function arrayToUtf($arr) {
    $res='';
    foreach($arr as $value) {
       // echo $value;
        $res .=$value;
    }
    return $res;
}
function concatArray($arr,$arr2) {
    foreach($arr2 as $val) {
        $arr[] = $val;
    }
    return $arr;
}


function getPoliandrom($p) {
    $p=strtoupper($p);
    $pRev = strrev($p);
    $res='';

    for ($i=0; $i<strlen($p) ; $i++) {
        if($p[$i] != $pRev[$i]) {
            if ($i==0) {$res = $p[$i];}
            return $res;
        }
        $res .= $p[$i];
    }
   return $res;
}

function getPoli2($p){
    $p=strtoupper($p);
    $len = strlen($p);
    $lenDiv2 = floor($len / 2);
    $res='';
    $res2='';

    for ($i=0; $i < $lenDiv2 ; $i++) {
        if($p[$i] != $p[$len -1 - $i]) {
            if ($i==0) {$res = $p[$i];}
            return $res;
        }
        $res .= $p[$i];
        $res2 = $p[$len -1 - $i].$res2;
    }
    if ($len % 2) return $res.$p[$lenDiv2].$res2;
    return $res.$res2;

}


function getPoliUtf8($p){
    $pArr=getUtfStr($p,true);
    $len = count($pArr);
    $lenDiv2 = floor($len / 2);
    $res=[];
    $res2=[];

    for ($i=0; $i < $lenDiv2 ; $i++) {
        if($pArr[$i] != $pArr[$len -1 - $i]) {
            if ($i==0) {$res = $pArr[$i];}
            return $res;
        }
        $res[] = $pArr[$i];
        array_unshift($res2,$pArr[$len -1 - $i]);
    }
    if ($len % 2) {
        array_push($res,$pArr[$lenDiv2]);
    }
    $res = concatArray($res,$res2);
    return $res;
}


echo $pol. '   ' .getPoliandrom($pol).'<br>';
echo $pol. '   ' .getPoli2($pol).'<br>';

echo $pol2. '   ' .getPoliandrom($pol2).'<br>';
echo $pol2. '   ' .getPoli2($pol2).'<br>';

echo $pol. '   ' .arrayToUtf(getPoliUtf8($pol)).'<br>';
echo $pol2. '   ' .arrayToUtf(getPoliUtf8($pol2)).'<br>';














