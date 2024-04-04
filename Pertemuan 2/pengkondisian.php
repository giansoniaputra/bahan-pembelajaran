<?php
// IF ELSE
// $i = 1;
// if ($i < 5) {
//     echo "Nilai Kurang dari 5";
// } else if ($i % 2 == 1) {
//     echo "Nilai lebih dari 5";
// } else {
//     echo "Nilai false";
// }

// // TERNARY
// $i = 8;
// // if ($i < 5) {
// //     echo "Nilai kurang dari 5";
// // } else {
// //     echo "Nilai lebih dari 5";
// // }

// echo ($i < 5) ? "selected" : "";
// echo $ternary;
$status = "1";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select name="" id="">
        <option value="">Pilih Status</option>
        <option value="0" <?php echo ($status == "0") ? 'selected' : '' ?>>Belum Selesai</option>
        <option value="1" <?php echo ($status == "1") ? 'selected' : '' ?>>Selesai</option>
    </select>
</body>

</html>
