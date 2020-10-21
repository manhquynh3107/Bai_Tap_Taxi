<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="km" placeholder="Nhap So Km">
    <button type="submit">Tinh</button>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $km = $_POST["km"];
    function caculateFee($km)
    {
        if ($km < 0 || is_numeric($km)) {
            $q = new Exception("Please input period is number more than zero");
            return $q->getMessage();
        }
        else if ($km <= 1) {
            echo "Fee is :" . $km * 15000;
        } else if ($km <= 5) {
            echo "Fee is :" . (1 * 15000 + ($km - 1) * 13500);
        } else if ($km <= 120) {
            echo "Fee is :" . (1 * 15000 + (4 * 13500) + ($km - 5) * 11000);
        } else {
            echo "Fee is :" . (1 * 15000 + (4 * 13500) + ($km - 5) * 11000) * 0.9;
        }
    }
//    try {
//        $km = check($km);
//        echo $km;
//    } catch (Exception $q) {
//        echo $q->getMessage();
//    }

   echo caculateFee($km);

}

?>


