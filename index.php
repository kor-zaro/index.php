<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href = "index.php">WEB</a><h1>
    <ol>
      <!-- ?뒤에는 변수추가해주고 php에서 ?부분을 입력해줌으로써 해당 클href로 클릭하게끔 해주는것으로 할 때마다 글씨가 자동으로 id 뒷부분 입력하게 해주는 것-->
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
      <?php
      #url이 무엇이냐에 따라 자동으로 무엇인지 설정해주는것 php구문
      #php뒤에는 무조건 세미콜론 붙여야함
      if(isset($_GET['id'])) {#isset으로 $뒤에 값이 있으면.. #만약 id값이 있다면 ㄱ
        echo $_GET['id'];
      } else {#없으면 welcome
        echo "Welcome";
      }
       ?>
    </h2>
    <!-- html 주석 처리 하는 법  lorem은 랜덤 -->
    <?php #파일 저장되어 있는 내용물들을 그대로 디렉토리 주소로 추가해서 자동으로 본문웹에 표시할 수 있도록 하게 하는 것
    echo file_get_contents("data/".$_GET['id']);
     ?>
  </body>
</html>
<!-- 단 이것은 보안적이지 않음-->
