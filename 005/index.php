<?php


// Challenge 01 - Age Checker
function checkAge(int $age): void {
    if ($age < 13)  echo "Child<br>";
    elseif ($age >= 13 && $age <= 17) echo "Teenager<br>";
    else echo "Adult<br>";
}
checkAge(10);
checkAge(15);
checkAge(25);
echo "<br>";

// Challenge 02 - Grade Calculator
function calculateGrade(int $score): void {
    if ($score < 0 || $score > 100)  echo "Score $score: Invalid Score<br>";
    elseif ($score >= 90) echo "Score $score: Excellent<br>";
    elseif ($score >= 80) echo "Score $score: Very Good<br>";
    elseif ($score >= 70) echo "Score $score: Good<br>";
    elseif ($score >= 50) echo "Score $score: Pass<br>";
    else echo "Score $score: Fail<br>";
}
calculateGrade(95);
calculateGrade(82);
calculateGrade(45);
calculateGrade(105);
echo "<br>";

// Challenge 03 — Number Analyzer
function analyzeNumber(int $number): void {
    $type = "";
    if ($number > 0) $type = "Positive";
    elseif ($number < 0) $type = "Negative";
    else $type = "Zero";

    $parity = $number % 2 === 0 ? "Even" : "Odd";
    echo "Number $number is $type and $parity.<br>";
}
analyzeNumber(14);
analyzeNumber(-7);
analyzeNumber(0);
echo "<br>";

// Challenge 04 — Login Checker
function checkLogin(string $username, string $password): void {
    if ($username === 'admin' && $password === '12345') echo "Login successful! Welcome back, Admin.<br>"; 
    else echo "Login failed! Incorrect username or password.<br>"; 

     $checker = $username === 'admin' && $password === '12345' ? "Login successful! Welcome back, Admin.<br>" : "Login failed! Incorrect username or password.<br>";
     echo "$checker.<br>";
}
checkLogin('admin', '12345');
checkLogin('user', '12345');
echo "<br>";

// Challenge 05 — Temperature Checker
function checkTemperature(int $temperature): void {
    if ($temperature >= 40) echo "Temp $temperature: Very Hot<br>";
    elseif ($temperature >= 30) echo "Temp $temperature: Hot<br>";
    elseif ($temperature >= 20) echo "Temp $temperature: Warm<br>";
    elseif ($temperature >= 10) echo "Temp $temperature: Cold<br>";
    else echo "Temp $temperature: Very Cold<br>";
}
checkTemperature(5);
checkTemperature(25);
checkTemperature(42);
echo "<br>";

// Challenge 06 — Day Name
function getDayName(int $day): void {
    switch ($day) {
        case 1: echo "Day 1: Sunday<br>"; break;
        case 2: echo "Day 2: Monday<br>"; break;
        case 3: echo "Day 3: Tuesday<br>"; break;
        case 4: echo "Day 4: Wednesday<br>"; break;
        case 5: echo "Day 5: Thursday<br>"; break;
        case 6: echo "Day 6: Friday<br>"; break;
        case 7: echo "Day 7: Saturday<br>"; break;
        default: echo "Day $day: Invalid day number<br>"; break;
    }
}
getDayName(3);
getDayName(8);
echo "<br>";

// Challenge 07 — Month Name
function getMonthName(int $month): void {
    switch ($month) {
        case 1:  echo "Month 1: January<br>"; break;
        case 2:  echo "Month 2: February<br>"; break;
        case 3:  echo "Month 3: March<br>"; break;
        case 4:  echo "Month 4: April<br>"; break;
        case 5:  echo "Month 5: May<br>"; break;
        case 6:  echo "Month 6: June<br>"; break;
        case 7:  echo "Month 7: July<br>"; break;
        case 8:  echo "Month 8: August<br>"; break;
        case 9:  echo "Month 9: September<br>"; break;
        case 10: echo "Month 10: October<br>"; break;
        case 11: echo "Month 11: November<br>"; break;
        case 12: echo "Month 12: December<br>"; break;
        default: echo "Month $month: Invalid month number<br>"; break;
    }
}
getMonthName(12);
getMonthName(0);
echo "<br>";

// Challenge 08 — Calculator
function calculate(float $number1, string $operator, float $number2): void {
    switch ($operator) {
        case '+': echo "$number1 + $number2 = " . $number1 + $number2 . "<br>"; break;
        case '-': echo "$number1 - $number2 = " . $number1 - $number2 . "<br>"; break;
        case '*': echo "$number1 * $number2 = " . $number1 * $number2 . "<br>"; break;
        case '/': 
            if ($number2 == 0) echo "Error: Division by zero is not allowed.<br>";
            else  echo "$number1 / $number2 = " . ($number1 / $number2) . "<br>"; break;
        default: echo "Error: Invalid operator '$operator'.<br>"; break;
    }
}
calculate(10, '+', 5);
calculate(10, '/', 0);
calculate(4, '%', 5);
echo "<br>";

// Challenge 09 — Traffic Light
function trafficLight(string $light): void {
    switch ($light) {
        case 'red':    echo "Stop<br>"; break;
        case 'yellow': echo "Get Ready<br>"; break;
        case 'green':  echo "Go<br>"; break;
        default:       echo "Invalid light value '$light'<br>"; break;
    }
}
trafficLight('Green');
trafficLight('Blue');
echo "<br>";

// Challenge 10 — User Role
function checkRole(string $role): void {
    switch ($role) {
        case 'admin':  echo "Admin: Full system access rules apply.<br>"; break;
        case 'editor': echo "Editor: You can publish and manage posts.<br>"; break;
        case 'author': echo "Author: You can write and manage your own posts.<br>"; break;
        case 'user':   echo "User: You can view and comment on posts.<br>"; break;
        case 'guest':  echo "Guest: Please sign up to interact.<br>"; break;
        default:       echo "Unknown role '$role': Access Denied.<br>"; break;
    }
}
checkRole('admin');
checkRole('hacker');
echo "<br>";

// Challenge 11 — HTTP Status
function getStatusMessage(int $status): void {
    $message = match($status) {
        200 => "200 OK",
        201 => "201 Created",
        400 => "400 Bad Request",
        401 => "401 Unauthorized",
        403 => "403 Forbidden",
        404 => "404 Not Found",
        500 => "500 Internal Server Error",
        default => "Unknown status code"
    };
    echo "Status code message: $message<br>";
}
getStatusMessage(200);
getStatusMessage(404);
getStatusMessage(504);
echo "<br>";

// Challenge 12 — User Role Match
function getRoleMessage(string $role): void {
    $message = match($role) {
        'admin'  => "Dashboard control center unlocked.",
        'editor' => "Content modification tools unlocked.",
        'author' => "Writing studio access unlocked.",
        'user'   => "Community area unlocked.",
        'guest'  => "Public view mode active.",
        default  => "Role profile error detected."
    };
    echo "Role System: $message<br>";
}
getRoleMessage('editor');
echo "<br>";

// Challenge 13 — Grade Letter
function getGrade(int $score): void {
    $grade = match(true) {
        $score < 0 || $score > 100 => "Invalid Score",
        $score >= 90 => "A",
        $score >= 80 => "B",
        $score >= 70 => "C",
        $score >= 60 => "D",
        default => "F"
    };
    echo "Score $score results in grade: $grade<br>";
}
getGrade(93);
getGrade(55);
echo "<br>";

// Challenge 14 — Shipping Cost
function getShippingCost(string $country): void {
    $cost = match($country) {
        'Egypt'        => 50,
        'Saudi Arabia' => 100,
        'Uae'          => 120,
        'Kuwait'       => 150,
        default        => 200
    };
    echo "Shipping Cost to $country: $$cost<br>";
}
getShippingCost('Egypt');
getShippingCost('Canada');
echo "<br>";

// Challenge 15 — Order Status
function getOrderMessage(string $status): void {
    $message = match($status) {
        'pending'   => "Your order has been placed and is waiting review.",
        'shipped'   => "Your order is with our courier partner.",
        'delivered' => "Your package has arrived at its destination.",
        'cancelled' => "Your transaction was stopped.",
        default     => "Tracking state mismatch error."
    };
    echo "Order Update: $message<br>";
}
getOrderMessage('cancelled');
echo "<br>";

// Challenge 16 — Movie Ticket
function calculateTicketPrice(int $age, string $day): void {
    $basePrice = 0;
    
    if ($age < 12) $basePrice = 5;
    elseif ($age >= 60) $basePrice = 7;
    else $basePrice = 12;

    switch ($day) {
        case 'Saturday':
        case 'Sunday':
            $finalPrice = $basePrice + 3; break;
        default:
            $finalPrice = $basePrice; break;
    }
    echo "Ticket price for a $age year old on $day is: $$finalPrice<br>";
}
calculateTicketPrice(25, 'Wednesday');
calculateTicketPrice(8, 'Sunday');
echo "<br>";

// Challenge 17 — Product Discount
function calculateDiscount(float $price, string $customerType): void {
    $discountPercentage = match($customerType) {
        'regular' => 0.05,
        'vip'     => 0.20,
        'student' => 0.15,
        default   => 0.00
    };

    $discountAmount = $price * $discountPercentage;
    if ($discountAmount > 0) $finalPrice = $price - $discountAmount;
    else $finalPrice = $price;
    

    echo "Type: $customerType<br>  Original: $$price<br>  Discount: $$discountAmount<br>  Total: $$finalPrice<br><br>";
}
calculateDiscount(100, 'vip');
calculateDiscount(50, 'regular');
echo "<br>";

function weatherRecommendation(int $temperature, string $weather): void {    
    $tempLabel = "";
    if ($temperature < 15) $tempLabel = "cold";
    elseif ($temperature > 28) $tempLabel = "hot";
    else $tempLabel = "warm";

    switch ($weather) {
        case 'sunny':
            if ($tempLabel === 'hot') echo "It's hot and sunny! Wear light clothes, a hat, and drink plenty of water.<br>";
            else echo "Beautiful sunny day. Perfect for a walk outside!<br>";
        break;
            
        case 'rainy':
            if ($tempLabel === 'cold') echo "Cold and rainy! Put on a heavy waterproof coat and winter boots.<br>";
            else echo "Warm rain. Just grabbing an umbrella should be enough.<br>";
        break;

        case 'snowy':
            echo "Snowing! Wear heavy thermal layers and enjoy building a snowman.<br>";
        break;

        default:
            echo "Weather type unclear. Dress comfortably for absolute safety.<br>";
        break;
    }
    echo "<br>";
}
weatherRecommendation(8, 'rainy');
weatherRecommendation(32, 'sunny');

// Challenge 19 — E-Commerce Order
function processOrder(float $total, string $paymentMethod, string $customerType): void {
    $discountPercent = match ($customerType) {
        'vip'     => 0.15,
        'regular' => 0.05,
        default   => 0.00
    };

    $discountAmount = 0;
    if ($total >= 1000) {
        $discountAmount = $total * $discountPercent;
        echo "Order qualifies for a structural " . ($discountPercent * 100) . "% discount.<br>";
    } else {
        echo "Order total under $1000. Does not qualify for customer profile discounts.<br>";
    }
    $finalPrice = $total - $discountAmount;

    switch ($paymentMethod) {
        case 'credit_card':
            echo "Payment Gateway: Securely charging credit card...<br>";
            break;
        case 'instapay':
            echo "Payment Gateway: Redirecting safety handshake to instapay infrastructure...<br>";
            break;
        case 'cash':
            echo "Payment Gateway: Order set up for Cash on Delivery.<br>";
            break;
        default:
            echo "Payment Gateway Error: Invalid method chosen.<br>";
            return;
    }

    echo "Final calculated total to charge: $$finalPrice<br><br>";
}

processOrder(1500, 'credit_card', 'vip');
processOrder(405, 'instapay', 'vip');

// Challenge 20 — Access System
function checkAccess(string $username, string $role, bool $isActive): void {
    if (!$isActive) {
        echo "Access DENIED for '$username': This user account profile is currently deactivated.<br><br>";
        return;
    }

    $permissions = match ($role) {
        'admin'           => 'Full Root Control & System Management',
        'editor', 'author'=> 'Modify, Create, and Publish Core Elements',
        'user'            => 'Standard Read and Comment Permissions',
        'guest'           => 'Read-Only Mode Public Catalog view',
        default           => 'None'
    };

    switch ($role) {
        case 'admin':
            echo "Welcome, Administrator $username. System control dashboard unlocked.<br>";
            break;
        case 'editor':
        case 'author':
            echo "Welcome back, $username. Workspace creator tools initialized.<br>";
            break;
        case 'user':
            echo "Hello, $username. Loading your user profile feed...<br>";
            break;
        default:
            echo "Guest entry recorded.<br>";
            break;
    }

    echo "Assigned Permission Matrix: [$permissions]<br><br>";
}

checkAccess('Sarah', 'admin', true);
checkAccess('John', 'user', false);

// Challenge 21 — Restaurant Order
function calculateOrder(string $category, string $item, int $quantity): void {
    $pricePerItem = 0.00;
    switch ($category) {
        case 'food':
            $pricePerItem = match ($item) {
                'burger' => 10.99,
                'pizza'  => 14.50,
                'salat'  => 7.25,
                default  => 0.00
            };
            break;

        case 'beverage':
            $pricePerItem = match ($item) {
                'soda'   => 2.50,
                'juice'  => 4.00,
                'coffee' => 3.50,
                default  => 0.00
            };
            break;

        default:
            echo "Error: Unknown menu department category '$category'.<br><br>";
            return;
    }

    if ($pricePerItem === 0.00) {
        echo "Error: We do not serve '$item' under the '$category' category.<br><br>";
        return;
    }

    $grossTotal = $pricePerItem * $quantity;
    if ($grossTotal > 40) {
        $discount = $grossTotal * 0.10;
        $finalPrice = $grossTotal - $discount;
        $discountMessage = "10% Large Order Discount applied (-$$discount)";
    } else {
        $finalPrice = $grossTotal;
        $discountMessage = "No custom bulk discount applied";
    }

    echo "Receipt Summary:<br>";
    echo "- $quantity x " . $item . " $category  $$pricePerItem each<br>";
    echo "- Subtotal: $$grossTotal<br>";
    echo "- $discountMessage<br>";
    echo "- **Total: $$finalPrice**<br><br>";
}

calculateOrder('food', 'pizza', 4);
calculateOrder('beverage', 'soda', 2);


// Challenge 22 — Exam Result
function getExamResult(int $score, float $attendance, string $status): void {
    if ($score < 0 || $score > 100) {
        echo "System Entry Error: Exam score of $score% is completely out of bounds (0-100).<br><br>";
        return;
    }

    switch ($status) {
        case 'suspended':
            echo "Results locked. Student is currently suspended.<br><br>";
            return;
        case 'withdrawn':
            echo "Evaluation aborted. Student dropped course registration.<br><br>";
            return;
        case 'active':
            break;
    }

    if ($attendance < 75) {
        echo "Final Outcome: FAILED. Minimum 75% class attendance requirement missed (Attended: $attendance%).<br><br>";
        return;
    }

    $outcome = match (true) {
        $score >= 85 => "PASSED WITH HONOURS",
        $score >= 50 => "PASSED",
        default      => "FAILED (Score below baseline requirements)"
    };

    echo "Evaluation Complete:<br>";
    echo "- Exam Score: $score%<br>";
    echo "- Class Attendance Record: $attendance%<br>";
    echo "- **Final Status Output: $outcome**<br><br>";
}

getExamResult(92, 88.5, 'active');   // High pass
getExamResult(95, 60, 'active');   // Attendance failure
getExamResult(74, 95, 'suspended'); // Administration lock out
getExamResult(42, 80, 'active');   // Score fail
