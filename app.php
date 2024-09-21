<?php
    if (isset($_GET['name'])){
      $name = $_GET['name'];
      if (isset($_GET['url'])){
        $url = $_GET['url'];
        $time = $_GET['time'];
        $file = fopen("json.txt","a") or die("Unable to open file!");
        $text = '{"name":"' . $name . '",' . '"href":"' . $url . '","time":"' . $time . '"}';
        $text2 = "\n";
        fwrite($file,$text2);
        fwrite($file,$text);
        fclose($file);
      }else{
        echo "链接不能为空";
      }
    }else{
      echo "名称不能为空";
    }
?>