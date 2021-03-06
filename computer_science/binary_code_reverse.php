<?php
$bin = $_POST['bin']; $text = $_POST['text'];

$bins = str_split($bin, 8);

$bincode = array(' ' => "00100000", 'A' => "01000001", 'B' => "01000010",
                 'C' => "01000011", 'D' => "01000100", 'E' => "01000101",
                 'F' => "01000110", 'G' => "01000111", 'H' => "01001000",
                 'I' => "01001001", 'J' => "01001010", 'K' => "01001011",
                 'L' => "01001100", 'M' => "01001101", 'N' => "01001110",
                 'O' => "01001111", 'P' => "01010000", 'Q' => "01010001",
                 'R' => "01010010", 'S' => "01010011", 'T' => "01010100",
                 'U' => "01010101", 'V' => "01010110", 'W' => "01010111",
                 'X' => "01011000", 'Y' => "01011001", 'Z' => "01011010",

                 'a' => "01100001", 'b' => "01100010", 'c' => "01100011",
                 'd' => "01100100", 'e' => "01100101", 'f' => "01100110",
                 'g' => "01100111", 'h' => "01101000", 'i' => "01101001",
                 'j' => "01101010", 'k' => "01101011", 'l' => "01101100",
                 'm' => "01101101", 'n' => "01101110", 'o' => "01101111",
                 'p' => "01110000", 'q' => "01110001", 'r' => "01110010",
                 's' => "01110011", 't' => "01110100", 'u' => "01110101",
                 'v' => "01110110", 'w' => "01110111", 'x' => "01111000",
                 'y' => "01111001", 'z' => "01111010",

                 '!' => "00100001", ',' => "00101100", '.' => "00101111",
                 '?' => "00111111", 

                 '0' => "00110000", '1' => "00110001", '2' => "00110010",
                 '3' => "00110011", '4' => "00110101", '5' => "00110101",
                 '6' => "00110110", '7' => "00110111", '8' => "00111000",
                 '9' => "00111001",

                 'А' => "", 'Б' => "", 'В' => "",
                 'Г' => "", 'Д' => "", 'Е' => "",
                 'Ж' => "", 'З' => "", 'И' => "",
                 'Й' => "", 'К' => "", 'Л' => "",
                 'М' => "", 'Н' => "", 'О' => "",
                 'П' => "", 'Р' => "", 'С' => "",
                 'Т' => "", 'У' => "", 'Ф' => "",
                 'Х' => "", 'Ц' => "", 'Ч' => "",
                 'Ш' => "", 'Щ' => "", 'Ъ' => "",
                 'Ы' => "", 'Ь' => "", 'Э' => "",
                 'Ю' => "", 'Я' => "",

                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => "", '' => "",
                 '' => "", '' => ""
                );

$len = count($bins);

for ($i = 0; $i < $len; ++$i) {
  foreach($bincode as $item => $description) {
    if ($description == $bins[$i]) {
      $textarray[] = $item;
    }
  }
}
$text_bin = implode($textarray);
$bin_text = implode($bins);

echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Декодировать бинарный код | Информатика</title>
  <meta name="description" content="Декодировать бинарный код в текст">
  <meta name="keywords" content="декодировать бинарный код, bin code, bin">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_compsci.css">
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html" style="color: #007BFF;">#Информатика</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Выбрать уравнение
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="binary_code.php">Кодировать в бинарный код</a>
          <a class="dropdown-item" href="#">Декодировать бинарный код</a>
          <a class="dropdown-item" href="bin_number.php">Десятичная система в двоичную</a>
          <a class="dropdown-item" href="bin_number_reverse.php">Двоичная система в десятичную</a>
          <a class="dropdown-item" href="hex_number.php">Десятичная система в шестнадцатиричную</a>
          <a class="dropdown-item" href="hex_number_reverse.php">Шестнадцатиричная система в десятичную</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Справка</a>
      </li>
    </ul>
  </div>
</nav>

<center><h1>Декодировать текст</h1></center>

<form method="post" action="binary_code_reverse.php">
  <div class="form-row form-col">
    <div class="col col1">
      <p>->Бинарный код</p>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="bin">$bin_text</textarea>
    </div>

    <div class="col col2">
      <p>->Текст</p>
      <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" name="text">$text_bin</textarea>
    </div>    
  </div>

  <center>
  <input class="btn btn-primary btn-lg btn-margin" type="submit" value="Декодировать">
  <a class="btn btn-secondary btn-margin btn-lg" href="binary_code.php" role="button"><img src="../img/arrows.png" width="26"></a>
  </center>
</form>

<!-- Scripts! -->
<script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
_END;
?>