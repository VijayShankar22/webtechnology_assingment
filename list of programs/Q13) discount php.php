<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $burgerQuantity = $_POST["burger"];
    $pizzaQuantity = $_POST["pizza"];
    $CocaColaQuantity = $_POST["drink"];

    $burgerCost = 100;
    $pizzaCost = 300;
    $CocaColaCost = 50;

    $totalBill = ($burgerQuantity * $burgerCost) + ($pizzaQuantity * $pizzaCost) + ($CocaColaQuantity * $CocaColaCost);

    $discount = 0.1;
    if ($totalBill > 1000) {
        $discountAmount = $totalBill * $discount;
        $totalBill -= $discountAmount;
    } else {
        $discountAmount = 0;
    }

    echo "<h2>Bill Summary</h2>";
    echo "Burger Quantity: $burgerQuantity<br>";
    echo "Pizza Quantity: $pizzaQuantity<br>";
    echo "Soft Drink Quantity: $CocaColaQuantity<br>";
    echo "Total Bill: Rs. $totalBill<br>";
    echo "Discount Applied: Rs. $discountAmount";
}
?>
