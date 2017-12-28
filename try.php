<?php
//system("whoami");
$operafile='yeastExpression.csv';
$filelink='WCYqw4O';
system("pwd");
//system("unset DISPLAY");//删除DISPLAY环境变量
$corr=0.67;
$gL=-1;
$gR=1;
$kinds=10;
//$text="shift(".$corr.','.'\''.$filename.'\''.','.'\''.$filelink.'\''.','.$gL.','.$gR.")";
$text="brush(".$corr.','.'\''.$operafile.'\''.','.'\''.$filelink.'\''.")";
 $a=system("matlab -nodisplay -nojvm -r "."\"".$text."\" &");
 // system("unset DISPLAY");//删除DISPLAY环境变量


// system("unset DISPLAY");//删除DISPLAY环境变量
  //    $text="ClusterK(".$kinds.','.'\''.$filelink.'\''.','.'\''.$operafile.'\''.")";
   //  $ck= shell_exec("matlab -nodisplay -nojvm -r "."\"".$text."\" &");
 //       $text="shift(".$corr.','.'\''.$operafile.'\''.','.'\''.$filelink.'\''.','.$L.','.$R.")";
//var_dump($text);
   //    $sca= shell_exec("matlab -nodisplay -nojvm -r "."\"".$text."\" &");
