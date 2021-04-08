//评论
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


  // 删除数据
  function doDel(id) {
    if(confirm('确认删除?')) {
    window.location='action.php?action=del&id='+id;
    }
   }