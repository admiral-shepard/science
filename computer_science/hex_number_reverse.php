<?php
$hex = $_POST['hex']; $dec = $_POST['dec'];

$dec = hexdec($hex);

echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Шестнадцатиричная система в десятичную | Информатика</title>
  <meta name="description" content="Декодировать шестнадцатиричный-hex код в десятичную систему">
  <meta name="keywords" content="hex-code, hexocode, декодировать hex код, декодер">

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
          <a class="dropdown-item" href="binary_code_reverse.php">Декодировать бинарный код</a>
          <a class="dropdown-item" href="bin_number.php">Десятичная система в двоичную</a>
          <a class="dropdown-item" href="#">Двоичная система в десятичную</a>
          <a class="dropdown-item" href="hex_number.php">Десятичная система в шестнадцатиричную</a>
          <a class="dropdown-item" href="#">Шестнадцатиричная система в десятичную</a>

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

<center><h1>Шестнадцатиричная система в десятичную</h1></center>

<form method="post" action="hex_number_reverse.php">
  <div class="form-row form-col">
    <div class="col col1">
      <p>Hex-></p>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="hex">$hex</textarea>
    </div>

    <div class="col col2">
      <p>->Dec</p>
      <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" name="dec">$dec</textarea>
    </div>    
  </div>

  <center>
  <input class="btn btn-primary btn-lg btn-margin" type="submit" value="Декодировать">
  <a class="btn btn-secondary btn-margin btn-lg" href="hex_number.php" role="button"><img src="../img/arrows.png" width="26"></a>
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