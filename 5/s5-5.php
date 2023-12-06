<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];

    // Считаем баллы
    $points = 0;
    $questions = array("q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18", "q19");

    foreach ($questions as $question) {
        if ($_POST[$question] == "yes") {
            $points++;
        }
    }

    // Определение результата
    $result = "";
    if ($points > 15) {
        $result = "У Вас покладистый характер";
    } elseif ($points >= 8 && $points <= 15) {
        $result = "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        $result = "Вашим друзьям можно посочувствовать";
    }

    // Вывод результата
    echo "<h2>Результаты анкеты</h2>";
    echo "<p>Имя: $name</p>";
    echo "<p>Сумма баллов: $points</p>";
    echo "<p>Результат: $result</p>";
}
