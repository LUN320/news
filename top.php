<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
    @import url("css/bootstrap.css");
    @import url("css/Mycss.css");
  </style>
</head>
<body>
<nav class="navbar navbar-fixed-top nav-bg">
         	<div class="container-fluid">
            	<div class="row">
                	<div class="col-md-1">
                   	  <div class="navbar-header">
                       	<button class="navbar-toggle nav-bg2" data-toggle="collapse" data-target="#myNavbar">
                            	<span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                                
                            </button>
                          <a class="navbar-brand"><img src="img/loge.jpg" class="img-responsive" width="90px"/></a>
                        </div>
                    </div>
                    <div class="col-md-11">
                    	<div id="myNavbar" class="collapse navbar-collapse row">
                        	<div class="col-md-7">
                            	<ul class="nav navbar nav-justified nav-wezi">
                                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                                    <li><a href="brand.html">品牌闪购</a></li>
                                    <li><a href="electrical.html">平价家电</a></li>
                                    <li><a href="#">主题超市</a></li>
                                    <li><a href="#">热点资讯</a></li>
                                    <li class="dropdown">                               
                                      <a class="dropdown-toggle" data-toggle="dropdown">更多
                                        <span class="caret"></span>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">联系我们</a></li>
                                        <li><a href="#">在线客服</a></li>
                                        <li><a href="#">加入会员</a></li>
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs nav-top">
								<div class="input-group">
                                	<input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">搜索</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 hidden-sm hidden-xs nav-top">
                            	<button class="btn btn-primary" data-toggle="modal" data-target="#mymodal">登录</button>
                        		<button class="btn btn-primary" >注册</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </nav>
       
    <div id="mymodal" class="modal fade" dtaa-backdrop="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">登录账号</h4>
                </div>
                <div class="media-body">
                    <form action="#">
                        <div  class="myMP col-md-10 col-md-offset-1">
                            <input class="form-control" type="text" placeholder="手机/邮箱/用户名"/>
                        </div>
                        <div class="myMP col-md-10 col-md-offset-1">
                            <input class="form-control" type="text" placeholder="密码"/>
                        </div>
                        <div class="myMP col-md-10 col-md-offset-1">
                            <input type="checkbox" />下次自动登录
                        </div>
                        <div class="myB col-md-12">
                            <input class="btn btn-primary form-control" type="submit" value="登录"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
      </div> 
</body>
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>