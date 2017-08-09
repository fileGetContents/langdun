<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//    var_dump($_POST);
var_dump($_FILES);
/*array (size=1)
  'img' => //file控件的name
    array (size=5)
//文件名字
      'name' => string '11111111.jpg' (length=12)
//类型
      'type' => string 'image/jpeg' (length=10)
//文件上传后临时保存的位置
      'tmp_name' => string 'D:\wamp\tmp\php2275.tmp' (length=23)
//是否出错 (0表示没有错误)
      'error' => int 0
//文件大小
      'size' => int 11730*/

if (isset($_FILES["img"])) {
    //判断文件上传是否错误
    if ($_FILES["img"]["error"]==0) {
        //上传操作
        move_uploaded_file($_FILES["img"]["tmp_name"],"public/111.doc");
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="txt"/>
    <input type="file" name="img"/> <br/>
    <input type="submit"/>
</form>
</body>
</html>