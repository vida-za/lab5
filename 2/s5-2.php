<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <?php
    // Обработка формы при отправке
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получение значений из формы
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        // Проверка вводимых данных
        if (!is_numeric($number1) || !is_numeric($number2)) {
            echo "Введите числа.";
        } else {
            // Выполнение операции в зависимости от выбора пользователя
            switch ($operation) {
                case "sl":
                    $result = $number1 + $number2;
                    echo "Результат: $number1 + $number2 = $result";
                    break;
                case "vich":
                    $result = $number1 - $number2;
                    echo "Результат: $number1 - $number2 = $result";
                    break;
                case "ymn":
                    $result = $number1 * $number2;
                    echo "Результат: $number1 * $number2 = $result";
                    break;
                case "del":
                    if ($number2 != 0) {
                        $result = $number1 / $number2;
                        echo "Результат: $number1 / $number2 = $result";
                    } else {
                        echo "Нельзя делить на 0.";
                    }
                    break;
            }
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="number1">Введите первое число: </label>
        <input type="text" id="number1" name="number1" required>
        <br>
        <label for="number2">Введите второе число: </label>
        <input type="text" id="number2" name="number2" required>
        <br>
        <label for="operation">Select operation:</label>
        <select id="operation" name="operation">
            <option value="sl">Сложение</option>
            <option value="vich">Вычитание</option>
            <option value="ymn">Умножение</option>
            <option value="del">Деление</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>

</body>

</html>