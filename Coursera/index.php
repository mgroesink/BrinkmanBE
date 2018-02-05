<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>index</title>
      <style>
          h1 , h2 , h3 , h4 {
              color:red;
          }
      </style>
  </head>
  <body>
    <p><br>
        <?php
        $expand = 12;
        echo '<h1>Marcel Roesink</h1>';
        echo "Tou can also have embedded newlines in 
        strings tis way as it is 
        okay to do so.\n
        The variable contains the number $expand\n
        ";
        echo "12a" + 15;
        $hello = "Marcel ";
        $hello .= " Roesink";
        echo $hello;
        ?>
    </p>
  </body>
</html>
