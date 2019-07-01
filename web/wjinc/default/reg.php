<?php $this->display('head.php');?>
<div class="banner">
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
<div class="main">
    <div class="container clearfix">
        <div class="leftmenu fl">
            <div class="tit">快速导航</div>
            <div class="list">
                <ul>
                    <li>
                        <a href="/At1.php" class="about"></a>
                    </li>
                    <li>
                        <a href="/At2.php" class="question1"></a>
                    </li>
                    <li>
                        <a href="/At3.php" class="question3"></a>
                    </li>
                    <li>
                        <a href="/At4.php" class="question2"></a>
                    </li>
                    <li>
                        <a href="/At6.php" class="activity"></a>
                    </li>
                    <li>
                        <a href="/At5.php" class="contact"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text fl text-reg">
            <div class="wrap">
                <div class="regbox">
                    <div class="tit">注册账号</div>
                    <form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
                        <input type="hidden" name="keys" value="add" />
                        <input type="hidden" name="website" value="18b18.com" />
                        <fieldset>
                            <legend>注册帐号</legend>
                            <div class="tbwrap">
                            <table style="color:#FFF">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <td>账号规则：账号必须为6-15位数字和字母组合</td></tr>
                                    <TR>
                                        <TH>
                                            <SPAN>*</SPAN>会员账号：</TH>
                                        <TD>
                                            <input name="username" id="username" type="text" size="40" class="inp-txt" /></TD>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>密码规则：密码必须为6-15位数字和字母组合</td></tr>
                                    <TR>
                                        <TH>
                                            <SPAN>*</SPAN>登陆密码：</TH>
                                        <TD>
                                            <INPUT name="password" id="password" type="password" size="40" class="inp-txt" /></TD>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <TR>
                                        <TH>
                                            <SPAN>*</SPAN>确认密码：</TH>
                                        <TD>
                                            <INPUT type="password" name="cpasswd" size="40" class="inp-txt" /></TD>
                                    </TR>
                                    <th></th>
                                    <td style="color:#FF0000;">真实姓名必须与您用于提款的银行户名字一致</td></tr>
                                    <TR>
                                        <TH>
                                            <SPAN>*</SPAN>真实姓名：</TH>
                                        <TD>
                                            <INPUT id="name" size="40" maxLength="10" name="name" class="inp-txt" /></TD>
                                    </TR>
                                    <tr>
                                        <th></th>
                                        <td style="color:#FF0000;">提款认证必须，务必记住</td></tr>
                                    <TR>
                                        <TH>
                                            <SPAN>*</SPAN>取款密码：</TH>
                                        <TD>
                                            <INPUT type="text" name="coinpwd" size="40" class="inp-txt" /></TD>
                                    </TR>
                                    <tr>
                                        <th></th>
                                        <td style="color:#FBFBFB;">电子邮箱(Email)格式：88888888@qq.com</td></tr>
                                    <TR>
                                        <TH>
                                            <SPAN>*</SPAN>电子邮箱：</TH>
                                        <TD>
                                            <input name="email" type="text" size="40" maxlength="30" class="inp-txt" /></TD>
                                    </TR>
                                    <TR>
                                        <Td colspan="2" height="5"></TD>
                                    </TR>
                                </tbody>
                            </table>
                            </div>
                        </fieldset>
                        <div class="check">
                            <label for="Ctycbx">
                                <strong>*</strong>
                                <INPUT id="Checkbox" type="checkbox" name="Checkbox" checked="checked" />
                                <span>我已届满18岁合法博彩年龄﹐且同意各项开户条约。</span></label>
                        </div>
                        <div class="btns">
                            <input type="submit" name="regBtn" value="立即提交" />
                            <input type="reset" name="regBtn2" value="重新填写"  />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->display('foot.php');?>