<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
$first_num = $_POST['first_num'] ?? '';
$second_num = $_POST['second_num'] ?? '';
$calculation = $_POST['calculation'] ?? '';
$result = '';

if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($calculation) {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Subtract":
            $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}
?>

<body>
    <div id="calculator-page">
        <h1>Simple Calculator</h1>
        <form action="" method="post" id="calculator-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?= $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?= $second_num; ?>" /> <b>Second Number</b>
            </p>
            <input type="submit" name="calculation" value="Add" />
            <input type="submit" name="calculation" value="Subtract" />
            <input type="submit" name="calculation" value="Multiply" />
            <input type="submit" name="calculation" value="Divide" />
            <p id="result"><?= $result; ?></p>
        </form>
    </div>

</body>

</html>