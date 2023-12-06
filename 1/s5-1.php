<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем значения из формы
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    // Сравниваем числа и выводим результат
    if ($number1 > $number2) {
        echo "Наибольшее число: $number1";
    } elseif ($number1 < $number2) {
        echo "Наибольшее число: $number2";
    } else {
        echo "Числа равны";
    }
}
