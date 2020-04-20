<?php
function checkBalancesBrackets($string)
{
    $stack = new SplStack();
    for ($i = 0; $i < strlen($string); $i++) {
        switch ($string[$i]) {
            case '(':
                $stack->push(1);
                break;
            case ')':
                if ($stack->isEmpty()) {
                    return false;
                } else {
                    if ($stack->pop() != 1) {
                        return false;
                    }
                }
                break;
        }
    }
    return $stack->isEmpty();
}

$str1 = 's * (s – a) * (s – b) * (s – c)';
$str2 = '(– b + (b2 – 4*a*c)^0.5) / 2*a ';
$str3 = 's * (s – a) * (s – b * (s – c)';
$str4 = 's * (s – a) * s – b) * (s – c)';
$str5 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';

echo "<pre>";
var_dump(checkBalancesBrackets($str1));
var_dump(checkBalancesBrackets($str2));
var_dump(checkBalancesBrackets($str3));
var_dump(checkBalancesBrackets($str4));
var_dump(checkBalancesBrackets($str5));


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Kiểm tra dấu ngoặc trong biểu thức sử dụng Stack
    </title>
</head>
<body>

</body>
</html>
