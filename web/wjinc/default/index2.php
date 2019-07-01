<?php $this->display('head.php');?>
    <!-- <div class="bannerbg">
        <div style="height:60px; width:100%; float:left"></div>
        <div style="padding-left:320px;">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="549" height="265">
                <param name="movie" value="yoy/images/index.swf">
                <param name="quality" value="high">
                <param name="wmode" value="transparent">
                <param name="swfversion" value="8.0.35.0">
                下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。
                [if !IE]>
                    <object type="application/x-shockwave-flash" data="yoy/images/index.swf" width="549" height="265">
                    <![endif]
                    <param name="quality" value="high">
                    <param name="wmode" value="transparent">
                    <param name="swfversion" value="8.0.35.0">
                    浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。
                    <div>
                        <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
                        <p>
                            <a href="http://www.adobe.com/go/getflashplayer">
                                <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a>
                        </p>
                    </div>
                    [if !IE]></object>
                <![endif]</object>
        </div>
    </div> -->
    <!-- global header end -->

    <div class="banner-index">
        <div class="lb-wrap">
            <div id="lb_Index" class="lb-index">
                <ul>
                    <!-- <li><img src="/img/lb/0.jpg" alt=""></li> -->
                    <!-- <li><img src="/img/lb/1.jpg" alt=""></li> -->
                    <!-- <li><img src="/img/lb/2.jpg" alt=""></li> -->
                    <!-- <li><img src="/img/lb/3.jpg" alt=""></li> -->
                    <li><img src="/img/lb/4.jpg" alt=""></li>
                    <li><img src="/img/lb/5.jpg" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="radio">
            <div class="wrap">
                <div class="tit">
                    <i></i>
                    <span>公告NEWS:</span>
                </div>
                <div class="marquee">
                    <marquee scrollamount="4" scrolldelay="30" onmouseover="this.stop();" onmouseout="this.start();" >全网第一最具公信力信誉平台！两面赔率1.993 定位赔率9.93 期期返水0.5%！集齐当红最热高频彩票一站式体验！玩法公平、规则公正、信誉公开！大额无忧！百万取款3分钟内火速到账！</marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="main-index" id="gamelist">
        <div class="wrap">
            <ul class="clearfix">
                <li>
                    <a href="javascript:void(0)" onclick="alert('请先登录哦')">
                        <img src="img/gamelist/g1.png" alt="">
                        <span>立即开始</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="alert('请先登录哦')">
                        <img src="img/gamelist/g2.png" alt="">
                        <span>立即开始</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="alert('请先登录哦')">
                        <img src="img/gamelist/g3.png" alt="">
                        <span>立即开始</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="alert('请先登录哦')">
                        <img src="img/gamelist/g4.png" alt="">
                        <span>立即开始</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="alert('请先登录哦')">
                        <img src="img/gamelist/g5.png" alt="">
                        <span>立即开始</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mainbg footer-index">
        <div class="paylist"></div>
            
        <?php $this->display('foot.php');?>