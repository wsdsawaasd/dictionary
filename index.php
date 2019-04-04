<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="post">
    <label><input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/></label>
</form>
<?php
$dictionary = array("hello" => "xin ch ào", "how" => "thế nào", "book" => "quy ển vở", "computer" => "máy tí nh");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $value) {
        if ($word == $searchWord) {
            echo "<br/>";
            echo "Từ: " . $word . " ngh ĩa là " . $value ;
            echo "<br/>";
            $flag = 1;
        }
    }
}
    if ($flag == 0 ) {
        echo  "Khô ng tìm th ấy từ cần tra." ;
    }
?>
</body>
</html>