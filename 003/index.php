<?php
const VAT = 0.14;
const SERV = 0.12;
function price_breakdown ($price)
{
    $vat = $price * VAT;
    $serv = $price * SERV;
    $total = $price + $vat + $serv;
    $msg = "Your VAT is $vat<br> 
    Your service is $serv <br> 
    Your total is $total";
    echo "$msg<br>";
}
price_breakdown(1000);

function calculater($price1, $price2, $price3)
{
    $totalprice = $price1 + $price2 + $price3;

    $vat = $totalprice * VAT;
    $serv = $totalprice * SERV;
    $total = $totalprice + $vat + $serv;

    $msg = "Your total price is $totalprice<br>
            Your VAT is $vat<br>
            Your service is $serv<br>
            Your grand total is $total";

    echo "$msg<br>";
}
calculater(1000,2100,1500);

function greet(string $Fname, string $Lname)
{
    $msg = "Hello, $Fname $Lname ";
    echo "$msg<br>";
}
greet("Michael","Victor");