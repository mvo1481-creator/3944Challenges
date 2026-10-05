<?php
declare(strict_types=1);
const TAX_RATE = 0.10;
$companyName = "MVFA";
function displayCompanyName(): void{
    global $companyName;
    echo "Company Name is $companyName<br><br>";
}

function calculateBonus(float $salary): float{
    return $salary * 0.25;
}

function calculateFinalSalary(int|float $salary, int|float $bonus): float {
    $grossSalary = $salary + $bonus;
    $taxAmount = $grossSalary * TAX_RATE;
    return $grossSalary - $taxAmount;
}

function displaySalary(string|int $message): void {
    echo "$message<br><br>";
}

displayCompanyName();

$employeeName1 = "Michael Victor";
$salary1 = 5000; 

$bonus1 = calculateBonus($salary1);
$finalSalary1 = calculateFinalSalary($salary1, $bonus1);

displaySalary("Employee: $employeeName1 <br> Final Salary: $finalSalary1");

$employeeName2 = "Ali Ahmed";
$salary2 = 6200;

$bonus2 = calculateBonus($salary2);
$finalSalary2 = calculateFinalSalary($salary2, $bonus2);
displaySalary("Employee: $employeeName2 <br> Final Salary: $finalSalary2");

$employeeName3 = "Mahmod Hasn";
$salary3 = 4500.50;

$bonus3 = calculateBonus($salary3); 
$finalSalary3 = calculateFinalSalary($salary3, $bonus3);
displaySalary("Employee: $employeeName3 <br> Final Salary: $finalSalary3");


echo "Float Test: " . calculateBonus(5000.0);

echo "Int Test: " . calculateBonus(5000);

echo "String Test: " . calculateBonus("5000");
