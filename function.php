<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    echo $str; #echo 는 $뒷부분 나타나게 해주는 것
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);# strlen은 길이를 나타내고 괄호 안에는 $뒷부분의 문자 echo로 결과를 반환해주는 것
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str); #nl2br() ()부분 중 엔터부분을 자동으로 웹에서 줄바꿈해주는 문구
     ?>
  </body>
</html>
