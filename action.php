<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//1. 链接数据库
try{
 $pdo = new PDO("mysql:host=localhost;dbname=news;", "root", "");
}catch (PDOException $e) {
//  echo 'Connection failed: ' . $e->getMessage();
 die('数据库连接失败'.$e->getMessage());
}
 $pdo->query("SET NAMES 'UTF8'");
  
//2.action 的值做对操作

switch ($_GET['action']){
	case 'del'://get
    $id = $_GET['id'];
    $sql = "delete from newslist where id={$id}";
    $rw = $pdo->exec($sql);
    if ($rw > 0){
      echo "<script>alter('删除成功');</script>";
    }else{
      echo "<script>alter('删除失败');</script>";
    }
    header('Location: t2.php');
    break;
	
} 

  

?>
</body>
</html>