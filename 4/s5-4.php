<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Список зарегистрированных пользователей
    $registeredUsers = array(
        "Efimiya92" => "Савельева Ефимия Данииловна",
        "Ignatij62" => "Тихонов Игнатий Прохорович",
        "Alisa30" => "Архипова Алиса Степановна",
        "Anton179" => "Зимин Антон Федотович",
        "Ignat89" => "Романов Игнат Викторович"
    );

    // Получение введенного логина из формы
    $inputUsername = $_POST["username"];

    // Проверка, зарегистрирован ли пользователь с таким логином
    if (array_key_exists($inputUsername, $registeredUsers)) {
        $welcomeMessage = "Здравствуйте, " . $registeredUsers[$inputUsername] . "!";
        echo $welcomeMessage;
    } else {
        echo "Вы не зарегистрированный пользователь!";
    }
}
