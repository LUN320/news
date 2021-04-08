<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/Mycss4.css">
</head>

<body>
<?php include("conm.php")?>
	<?php include("top.php")?>
    <div class="row">
        <div class="col-md-10 col-md-push-1" style="margin-top:80px;">
            <div class="row bzxw">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="row bzxw_bt">本站新闻-NOTICE</div>
                    <?php
                        //查表
                        $sql = "SELECT * FROM websitenews where id = \"1\"";
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
                </div>

                <div class="col-md-4 hidden-xs hidden-sm">
                    <div class="row hzxx">
                        <div class="hzxx_top">会展信息</div>
                        <div class="hzxx_con">
                            <div class="hzxx_item">
                                <div class="hzxx_tu"><img src="./img/news/Exhibition/1.jpg" class="img-responsive" alt=""></div>
                                <div class="hzxx_wz">关注：潜心创造价值，耕耘行业未来 | 2021CKIW深圳针博会完美落幕！</div>
                            </div>
                            <div class="hzxx_item">
                                <div class="hzxx_tu"><img src="./img/news/Exhibition/2.png" class="img-responsive" alt=""></div>
                                <div class="hzxx_wz">金针奖：期待已久的 2021 CKIW中国针织行业颁奖盛典圆满落幕细看花落几家</div>
                            </div>
                        </div>

                        <div class="hzxx_con">
                            <div class="hzxx_item">
                                <div class="hzxx_tu"><img src="./img/news/Exhibition/3.jpg" class="img-responsive" alt=""></div>
                                <div class="hzxx_wz">共赴“重启”创意之约 第六届“濮院杯”PH Value中国针织设计师大赛完美收官</div>
                            </div>
                            <div class="hzxx_item">
                                <div class="hzxx_tu"><img src="./img/news/Exhibition/4.jpg" class="img-responsive" alt=""></div>
                                <div class="hzxx_wz">ICBE ：2021广州跨交会有什么亮点</div>
                            </div>
                        </div>

                        <div class="hzxx_con">
                            <div class="hzxx_item">
                                <div class="hzxx_tu"><img src="./img/news/Exhibition/5.jpg" class="img-responsive" alt=""></div>
                                <div class="hzxx_wz">辛巴复出翻车了？故技重施忽悠老铁，疑似...</div>
                            </div>
                            <div class="hzxx_item">
                                <div class="hzxx_tu"><img src="./img/news/Exhibition/6.jpg" class="img-responsive" alt=""></div>
                                <div class="hzxx_wz">范文芳与老公恩爱同框，一袭拼色连衣裙优...</div>
                            </div>
                        </div>
                    </div>

                    <div class="hzxx_xxk">
                        <div class="box">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#name1" data-toggle="tab">新闻</a></li>
                                <li><a href="#name2" data-toggle="tab">娱乐</a></li>
                                <li><a href="#name3" data-toggle="tab">军事</a></li>
                                <li><a href="#name4" data-toggle="tab">社会</a></li>
                                <li><a href="#name5" data-toggle="tab">体育</a></li>
                            </ul>
                            <div class="tab-content">
                                <div  id="name1" class="tab-pane fade in active"> <!-- fade有淡入淡出的效果-->
                                    <div class="wrap">
                                        <img src="./img/news/tab/1.jpg" alt=""/>
                                        <ul class="myList">
                                            <li><a href="#">村主任看风水收费一万不算违纪？</a></li>
                                            <li><a href="#">女经理色诱警官卖17台伪劣安检机</a></li>
                                            <li><a href="#">男子一夜情后疑染病将女子推下楼</a></li>
                                            <li><a href="#">游客遭老虎咬死专家称园方无责任</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div  id="name2" class="tab-pane fade">
                                    <div class="wrap">
                                        <img src="./img/news/tab/2.jpg" alt=""/>
                                        <ul class="myList">
                                            <li><a href="#">曾红遍中韩范冰冰为她龙套却因这陨落他曾是超级男模</a></li>
                                            <li><a href="#">赵薇凭什么首任威尼斯电影节评委</a></li>
                                            <li><a href="#">他是中国首位入狱童星今二度被捕</a></li>
                                            <li><a href="#">辣眼睛！！！</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div  id="name3" class="tab-pane fade">
                                    <div class="wrap">
                                        <img src="./img/news/tab/3.jpg" alt=""/>
                                        <ul class="myList">
                                            <li><a href="#">斯诺登再曝绝密 美暗中攻击他们</a></li>
                                            <li><a href="#">菲对比中菲军力 曝结果令其绝望</a></li>
                                            <li><a href="#">中国使必杀一招 美在南海投降了</a></li>
                                            <li><a href="#">红旗9突然撤下永兴岛 绝密曝光</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="name4" class="tab-pane fade">
                                    <div class="wrap">
                                        <img src="./img/news/tab/4.jpg" alt=""/>
                                        <ul class="myList">
                                            <li><a href="#">YY直播不雅视频10岁女孩现场脱衣</a></li>
                                            <li><a href="#">抢劫犯弃新婚妻带小姨子潜逃28年</a></li>
                                            <li><a href="#">婆婆与儿媳同生娃孙子比儿子还大</a></li>
                                            <li><a href="#">网红生产线：21岁小伙年入百万元</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="name5" class="tab-pane fade">
                                    <div class="wrap">
                                        <img src="./img/news/tab/5.jpg" alt=""/>
                                        <ul class="myList">
                                            <li><a href="#">十大看点引爆国安恒大工体对决</a></li>
                                            <li><a href="#">国足集训名单：没球踢3将入选</a></li>
                                            <li><a href="#">中超赛场暴力冲突堪比格斗大赛</a></li>
                                            <li><a href="#">曼联全队 离京穆帅告别红魔球迷</a></l>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-push-1">
            <div class="col-md-4">
                <div class="zwxx_left_rs">
                    <div class="zwxx_left_rs_top">
                        <div class="zwxx_left_rs_bt">热搜榜单</div>
                        <div class="zwxx_left_rs_gd">更多>></div>
                    </div>
                    <div class="xia-xian"></div>
                    <div class="zwxx_left_rs_con_k">
                        <?php
                            $sql = "SELECT * FROM websitenews where id = \"3\"";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<div class=\"zwxx_left_rs_con\">"
                                            ."<div class=\"zwxx_left_rs_con_title\"><a>".$row["title"]."</a></div>"
                                            ."<div class=\"zwxx_left_rs_con_center\">"
                                                ."<div class=\"zwxx_left_rs_con_center_img\"><img src=\"".$row["img"]."\" class=\"img-responsive\" alt=\"\"></div>"
                                                ."<div class=\"zwxx_left_rs_con_center_r\">"
                                                    ."<div class=\"zwxx_left_rs_con_center_rt_top\">"
                                                        ."<div class=\"zwxx_left_rs_con_center_rt_top_l\">".$row["publish"]."</div>"
                                                        ."<div class=\"zwxx_left_rs_con_center_rt_top_r\">".$row["time"]."</div>"
                                                    ."</div>"
                                                    ."<div class=\"zwxx_left_rs_con_center_rt_foot\">".$row["content"]."</div>"
                                                ."</div>"
                                            ."</div>"
                                        ."</div>";
                                    }
                                }else {
                                echo "0 结果";
                            }
                        ?>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-8">
                <div class="zwxx_right_top col-md-2 col-sm-2 col-xs-2 col-md-push-10"><span>站外资讯</span></div>
                <?php 
                    $sql = "SELECT * FROM newslist";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class=\"con\">"
                                
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
                                ."<img class=\"left\" src=\"".$row["imges"]."\" alt=\"\">"
                            ."</div>";
                            }
                        }else {
                        echo "0 结果";
                    }
                ?>
            </div>
        </div>
    </div>
    <?php include("foot.php")?>
    
    


</body>
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</html>