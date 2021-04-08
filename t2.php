<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/bootstrap.css">
<style>
.con{
      display: flex;
      width: 800px;
      height: 150px;
	  margin:15px 5px;
      padding: 5px;
      border: 1px solid black;
    }
    .con .left{
      flex: 1;
    }
    .con img{
      height: 135px;
    }
    .con .right{
      flex: 3;
      margin-left: 20px;
    }
    .title{
      font-size: 24px;
      margin-bottom: 10px;
    }
    .content{
      text-indent: 2em;
      flex-wrap: wrap;
      overflow: hidden;
      height: 70px;
      font-size: 14px;
      line-height: 20px;
    }
    .comment , .like , .dislike{
        display: flex;
    }
    .dislike{
        margin:0px 20px;
    }
    .conment_item{
        margin: 5px;
        font-size: 13px;
    }
    .comment button{
        font-size: 13px;
        height: 25px;
        width: 25px;
    }
    .comment_words{
      margin-top: 8px;
    }
	
	.foot{
      display: flex;
      width: 380px;
      justify-content: space-between;
    }
    .delete{
      margin-top: 10px;
      font-size: 10px;
      display: none;
    }
    .comment:hover .delete{
      display: block;
      cursor: pointer;
    }
</style>
</head>

<body>
<?php include("conm.php")?>
<?php 
$sql = "SELECT * FROM newslist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<div class=\"con\">"
			."<img class=\"left\" src=\"".$row["imges"]."\" alt=\"\">"
			."<div class=\"right\">"
				."<div class=\"title\">".$row["title"]."</div>"
				."<div class=\"content\">".$row["content"]."</div>"
				."<div class=\"comment\">"
					."<div class=\"like\">"
						."<div class=\"conment_item like_text\">".$row["like"]."</div>"
						."<button class=\"like_btn\"><span class=\"glyphicon glyphicon-thumbs-up\"></span></button>"
					."</div>"
					."<div class=\"dislike\">"
						."<div class=\"conment_item dislike_text\">".$row["dislike"]."</div>"
						."<button class=\"dislike_btn\"><span class=\"glyphicon  glyphicon-thumbs-down\"></span></button>"
					."</div>"
					."<div class=\"foot\">"
						."<div class=\"comment_words\">评论(".$row["comment"].")</div>"
						."<div class=\"delete\"><a href='javascript:void(0);' onclick='doDel({$row['id']})'>不喜欢此类内容(删除)</a></div>"
					."</div>"
				."</div>"
			."</div>"
		."</div>";
		}
	}else {
    echo "0 结果";
}
?>
</body>
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
  var like = document.getElementsByClassName("like_btn");
  var dislike = document.getElementsByClassName("dislike");
  var like_text =document.getElementsByClassName("like_text");
  var dislike_text = document.getElementsByClassName("dislike_text");
  for (var i = 0; i < like.length; i++) {
    like[i].onclick =(function(n){
      return function(){
        var num1 = parseInt (like_text[n].innerHTML);
        num1 += 1 ;
        like_text[n].innerHTML = num1;
      //   $.ajax({
			// 	url:"add.php", 			//the page containing php script
			// 	type: "POST", 				//request type
			// 	data:{action: n},
			// 	success:function(result){
			// 		alert(result);
			// 	}
			// });
      }
    }(i));

    dislike[i].onclick =(function(n){
      return function(){
        var num2 = parseInt (dislike_text[n].innerHTML);
        num2 += 1 ;
        dislike_text[n].innerHTML = num2;
      }
    }(i));
  }
</script>
<script>
 function doDel(id) {
  if(confirm('确认删除?')) {
  window.location='action.php?action=del&id='+id;
  }
 }
 </script>
</html>