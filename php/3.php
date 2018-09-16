<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>
</head>
<body>
    <div>
        <form method="GET">
            <input type="number" name="first_number" step="0.1">
            <select size="1" name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="second_number" step="0.1">
            <br>
            <button type="submit" value="count" name="submit">Подсчет</button>
        </form>
    </div>
</body>
</html>


<?php

function calc()
{
    if(isset($_GET['submit'])){

        if(empty($_GET['first_number']) || (! is_numeric($_GET['first_number'])))
            $first_number = 0;
        else 
            $first_number = $_GET['first_number'];

        if(empty($_GET['second_number']) || (! is_numeric($_GET['second_number'])))
            $first_number = 0;
        else 
            $second_number = $_GET['second_number'];

        $operation = $_GET['operation'];

        switch ($operation) {
            case '+':
                return $first_number + $second_number;
                break;
            case '-':
                return $first_number - $second_number;
                break;
            case '*':
                return $first_number * $second_number;
                break;
            case '/':
                if ($second_number == 0) {
                    return 'Ошибка: деление на 0';
                }
                else
                    return $first_number / $second_number;
                break;
            default:
                return 'Ошибка: несуществующая операция';
        };
    }
}

echo calc();

?>
