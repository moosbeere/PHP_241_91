<?php
if (!isset($_POST['expr'])) {
    echo "Ошибка";
    exit;
}

$expr = $_POST['expr'];

// Проверка на недопустимые символы
if (preg_match('/[^0-9\+\-\*\/\(\)\s]/', $expr)) {
    echo "Недопустимый ввод!";
    exit;
}

// Рекурсивный парсер и вычислитель выражения
function evalExpression($str) {
    $str = str_replace(' ', '', $str);

    // Если число
    if (is_numeric($str)) return (float)$str;

    // Скобки
    if ($str[0] == '(' && substr($str, -1) == ')') {
        return evalExpression(substr($str, 1, -1));
    }

    // Рекурсивно ищем + и -
    $level = 0;
    for ($i = strlen($str)-1; $i >= 0; $i--) {
        if ($str[$i] == ')') $level++;
        if ($str[$i] == '(') $level--;
        if ($level == 0) {
            if ($str[$i] == '+') return evalExpression(substr($str,0,$i)) + evalExpression(substr($str,$i+1));
            if ($str[$i] == '-') return evalExpression(substr($str,0,$i)) - evalExpression(substr($str,$i+1));
        }
    }

    // Рекурсивно ищем * и /
    $level = 0;
    for ($i = strlen($str)-1; $i >= 0; $i--) {
        if ($str[$i] == ')') $level++;
        if ($str[$i] == '(') $level--;
        if ($level == 0) {
            if ($str[$i] == '*') return evalExpression(substr($str,0,$i)) * evalExpression(substr($str,$i+1));
            if ($str[$i] == '/') return evalExpression(substr($str,0,$i)) / evalExpression(substr($str,$i+1));
        }
    }

    return 0;
}

try {
    $result = evalExpression($expr);
    echo $result;
} catch (Exception $e) {
    echo "Ошибка вычисления";
}
?>
