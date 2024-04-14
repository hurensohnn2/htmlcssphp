<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
    <link rel="stylesheet" href="calculator.css">
    
</head>
<body>
    <div class="container">
        <h2>Kalkulačka</h2>
        <form method="post" action="">
            <input type="text" name="number1" placeholder="Zadajte prvé číslo" required>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="number2" placeholder="Zadajte druhé číslo" required>
            <input type="submit" name="calculate" value="=">
        </form>

        <?php
        if(isset($_POST['calculate'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operator = $_POST['operator'];
            $result = '';

            switch($operator) {
                case '+':
                    $result = $number1 + $number2.";";
                    break;
                case '-':
                    $result = $number1 - $number2.";";
                    break;
                case '*':
                    $result = $number1 * $number2.";";
                    break;
                case '/':
                    if($number2 != 0) {
                        $result = $number1 / $number2.";";
                    } else {
                        $result = 'Chyba: Delenie nulou!';
                    }
                    break;
                default:
                    $result = 'Neznámy operátor!';
            }

            echo '<p class="result">Výsledok: ' . $result . '</p>';

            
            file_put_contents('vypocet.txt', $result , FILE_APPEND);
        }
        ?>
    </div>
</body>
</html>
