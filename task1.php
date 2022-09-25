<?php

$number1=0;
$number2=0;


function validate($number) {
    do{
        echo "ყურადღება  ! გთხოვ შეიყვანო რიცხვი 100 ის ფარგლებში \n";
        $number=readline();
    }while($number>100);
    return $number;
}

do{
    echo "HEY ! :) \n";
    echo "გთხოვ შეიყვანო პირველი რიცხვი 100 ის ფარგლებში   (შეიყვანეთ  0 დასასრულებლად )  \n";
    $number1=readline();
    if($number1==0){
        echo "GOODBYE :)";
        break;
    }elseif($number1>100){
        $number1=validate($number1);
    }
    echo "გთხოვ შეიყვანო მეორე რიცხვი 100 ის ფარგლებში  (შეიყვანეთ  0 დასასრულებლად ) \n";
    $number2=readline();
    if($number2==0){
        echo "GOODBYE :)";
        break;
    }elseif($number2>100){
        $number2=validate($number2);
    }
    echo "------------------------------------------------------\n";
    echo "შეყვანილი  რიცხვების ნამრავლია ".$number1*$number2."\n";
    echo "------------------------------------------------------\n";

}while(true);

