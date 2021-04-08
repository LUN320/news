<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>


<?php
include("conm.php")
?>

  <form name="example" method="post" action="">
	  <input type="text" name="name" id="value" value="1"/>
    <input type="submit" value="提交" onClick="<?php
    echo "1";
	?>"/>
</form>

<?php
//查表
$sql = "SELECT * FROM websitenews where id = \"2\"";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<div class=\"bzxw_con\">"
			."<div class=\"row\">".
				"<div class=\"col-md-3 col-sm-3 col-xs-3\">".
					"<img src=\"".$row["img"]."\" class=\"img-responsive\" alt=\"\">"
				."</div>".
				"<div class=\"col-md-9 col-sm-9 col-xs-9 bzxw_con_nr\">".
					"<div class=\"bzxw_con_nr_title\">".$row["title"]."</div>".
					"<div class=\"bzxw_con_nr_content\">".$row["content"]."</div>".
					"<div class=\"bzxw_con_nr_foot\">".
						"<div class=\"bzxw_con_nr_foot_left\">".
							"<div class=\"bzxw_con_nr_foot_left_1 hidden-xs\">本站新闻-NOTICE</div>".
							"<div class=\"bzxw_con_nr_foot_left_2\">".$row["publish"]."</div>".
						"</div>".
						"<div class=\"bzxw_con_nr_foot_right\">".$row["time"]."</div>".
					"</div>".
				"</div>".
			"</div>"
		."</div>";
		}
	}else {
    echo "0 结果";
}

?>

</body>
</html>