<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
test
</title>
<meta charset="utf-8">
</head>

<body>
<h1>test</h1>
<?php

      if(isset($_POST['data']))
          {
              if($_POST['data'] == 123)
                  {
              print("成功");
                  }
          }
      $n = 1;
$y= 1;
      
?>
 <form action="test.php" method= "post">
 <input type="hidden" name="data" value="123">

  <input type="submit">
     </from>

</body>

</html>
