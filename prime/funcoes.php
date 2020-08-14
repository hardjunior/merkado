<?php
function og($string){
  // if (empty($string)){
  //     echo $string;exit;
  // }
   $string = str_replace(" ","",trim(strtolower($string)));
   $string = mb_strtolower($string,"UTF-8");
   $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
   $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr€';
   return strtr($string, utf8_decode($a), $b);
   // $string = str_replace(".","-",$string);
   // $string = preg_replace( "/[^0-9a-zA-Z\.]+/",'',$string);
}

?>