
<!DOCTYPE html>
<!-- 
            ◢＼　 ☆　　 ／◣
    　  　∕　　﹨　╰╮∕　　﹨
    　  　▏　　～～′′～～ 　｜
    　　  ﹨／　　　　　　 　＼∕
    　 　 ∕ 　　●　　　 ●　＼
      ＝＝　○　∴·╰╯　∴　○　＝＝
    　    ╭──╮　　　　　╭──╮
  ╔═ ∪∪∪═Mashiro&Hitomi═∪∪∪═╗
-->
<html lang="zh-CN">
<head>
<link rel="stylesheet" type="text/css" href="/Moe-Mashiro/Moe-Mashiro.css">
<link rel="stylesheet" type="text/css" href="/assets/css/system.css">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title itemprop="name">キツネのFox</title>
<link rel="shortcut icon" href=""/> 
<link rel='stylesheet' id='saukra_css-css'  href='assets/css/style.css?ver=3.3.8' type='text/css' media='all' />
<script>
var mashiro_option = new Object();
var mashiro_global = new Object();
mashiro_option.jsdelivr_css_src = "/assets/css/lib.min.css";
// 随机图片API
mashiro_option.cover_api = "https://api.btstu.cn/sjbz/api.php?lx=dongman&format=images";
// 音乐播放器开关
mashiro_option.float_player_on = true;
mashiro_option.meting_api_url = "https://miaomi.muyu.love/wp-json/sakura/v1/meting/aplayer";
// mashiro_option.meting_api_url = "https://cdn.jsdelivr.net/npm/meting@2.0.1/dist/Meting.min.js"

mashiro_option.windowheight = /Mobile|Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ? 'fixed' : 'auto';

mashiro_option.skin_bg0 = "none";

mashiro_option.skin_bg1 = "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg1.png";

mashiro_option.skin_bg2 = "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg2.png";

mashiro_option.skin_bg3 = "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg3.png";

mashiro_option.skin_bg4 = "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg4.png";
mashiro_option.signaturetext= "https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/vision/background/foreground/bg4.png";

// 页面剪切板版权提示
mashiro_option.clipboardCopyright = true;
</script>
</head>
<div class="headertop filter-dot">
<div id="banner_wave_1"></div><div id="banner_wave_2"></div><!--两个DIV插在这。-->
<div id="live2d-baimiao"></div><div id="live2d-heimiao"></div><!--两个DIV插在这。-->
<figure id="centerbg" class="centerbg">
<div class="focusinfo">
<div class="header-tou"><a href="https://muyu.love" ><img src="https://cdn.jsdelivr.net/gh/mirai-mamori/web-img/img/avatar.jpg"></a></div>

<!--个人介绍-->
<div class="header-info">
			<!-- 首页一言打字效果 -->
			<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11/lib/typed.min.js"></script>
			<i class="fa fa-quote-left"></i>			<span class="element">疯狂造句中......</span>
			<i class="fa fa-quote-right"></i>			<span class="element"></span>
			<script>
            var typed = new Typed('.element', {
              strings: ["给时光以生命，给岁月以文明","回首往事旧时光，早已是物事人非！",], //输入内容, 支持html标签
              typeSpeed: 140, //打字速度
              backSpeed: 50, //回退速度
              loop: false,//是否循环
              loopCount: Infinity,
              showCursor: true//是否开启光标
            });
            </script>
    <p></p>
</div>
<div class="top-social">
<!--加载上一张背景-->
<li id="bg-pre"><img class="flipx" src="/assets/images/next-b.svg"/></li>
<!--QQ-->
<li class="qq"><a href="tencent://message/?uin=1287470612" title="Initiate chat ?"><img src="/assets/images/sns/qq.png"/></a></li>
<!--微信-->
<li class="wechat"><a href="#"><img src="/assets/images/sns/wechat.png"/></a>
<div class="wechatInner"><img src="" alt="WeChat">
</div>
</li>
<!--哔哩哔哩-->
<li><a href="https://space.bilibili.com/16152344" target="_blank" class="social-bili" title="bilibili"><img src="/assets/images/sns/bilibili.png"/></a></li>
<!--网易云音乐-->
<li><a href="https://music.163.com/#/user/home?id=416928313" target="_blank" class="social-wangyiyun" title="CloudMusic"><img src="/assets/images/sns/wangyiyun.png"/></a></li>
<!--电子邮件-->
<li><a onclick="mail_me()" class="social-wangyiyun" title="E-mail"><img src="/assets/images/sns/email.svg"/></a></li>
<!--加载下一张背景-->
<li id="bg-next"><img src="/assets/images/next-b.svg"/></li>	
</div>
</div>
</figure>
<div id="video-container" style="">
    <video id="bgvideo" class="video" video-name="" src="" width="auto" preload="auto"></video>
    <div id="video-btn" class="loadvideo videolive"></div>
    <div id="video-add"></div><div class="video-stu"></div></div><!-- 首页下拉箭头 -->
    <div class="headertop-down faa-float animated" onclick="headertop_down()"><span>
        <i class="fa fa-chevron-down" aria-hidden="true"></i></span></div>
		</div>	

    <!--Logo-->
<header class="site-header no-select" role="banner">
				<div class="site-top">
					<div class="site-branding">
						<span class="site-title">
							<span class="logolink Moe-Mashiro">
                                <a href="/">
                                    <ruby>
                                    <span class="sakuraso" style="font-family: 'Moe-Mashiro', 'Merriweather Sans', Helvetica, Tahoma, Arial, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft Yahei', 'WenQuanYi Micro Hei', sans-serif;;">キツネ</span>
                                    <span class="no" style="font-family: 'Moe-Mashiro', 'Merriweather Sans', Helvetica, Tahoma, Arial, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft Yahei', 'WenQuanYi Micro Hei', sans-serif;">の</span>
                                    <span class="shironeko" style="font-family: 'Moe-Mashiro', 'Merriweather Sans', Helvetica, Tahoma, Arial, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft Yahei', 'WenQuanYi Micro Hei', sans-serif;">Fox</span>
                                    <rp></rp><rt class="chinese-font"></rt><rp>
                                    </rp></ruby>
                                </a>
                            </span>
						</span>	
						<!-- logo end -->
					</div><!-- .site-branding -->

				</div>
			</header>
			
			

</header>
<!--首页下拉箭头-->
<div id="content" class="site-content"></div>
<h1 class="main-title" style="font-family: 'Ubuntu', sans-serif;"></h1>
<!--站点-->
<div class="l-news-wrap">
			<div class="l-news">
				<!--<div class="link-btn-1st_site">-->
				<!--	<a target="_blank" href="//music.muyu.love/">音乐</a>-->
				<!--</div>-->
				
				<div class="link-btn-1st_site">
					<a target="_blank" href="//img.muyu.love/">图床</a>
				</div>

				<div class="link-btn-1st_site">
					<a target="_blank" href="//api.muyu.love">接口</a>
				</div>

				<!--<div class="link-btn-1st_site">-->
				<!--	<a target="_blank" href="//bfq.muyu.love">解析</a>-->
				<!--</div>-->
				<div class="link-btn-1st_site">
					<a target="_blank" href="//inis.muyu.love">InIs</a>
				</div>

				<div class="link-btn-1st_site">
					<a target="_blank" href="//maomi.muyu.love">さくら荘の猫咪</a>
				</div>
				
				<div class="link-btn-1st_site">
					<a target="_blank" href="//www.muyu.love">さくら荘丨樱花庄</a>
				</div>
				
			</div>
			<div class="l-twitter">
				<!--<div class="link-btn-radio">-->
				<!--	<a target="_blank" href="//movies.muyu.love">影视</a>-->
				<!--</div>-->
				
				<div class="link-btn-radio">
					<a target="_blank" href="//cloudreve.muyu.love/">网盘</a>
				</div>

				<div class="link-btn-radio">
					<a target="_blank" href="//open.muyu.love/">接口</a>
				</div>
				
				<div class="link-btn-radio">
					<a target="_blank" href="//shoka.muyu.ink">shoka</a>
				</div>
				
				<div class="link-btn-radio">
					<a target="_blank" href="//miaomi.muyu.love">さくら荘の喵咪</a>	
				</div>
				
				<div class="link-btn-radio">
					<a target="_blank" href="//kami.muyu.love">さくら荘丨樱花庄</a>	
				</div>
			</div>
		</div>
	
<!--尾部-->
<h1 class="main-title" style="font-family: 'Ubuntu', sans-serif;"></h1>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" theme-info="Sakurairo v3.3.8">
			<div class="footertext">
			    <i class="iconfont icon-sakura rotating" style="color: #ed6375;display:inline-block;font-size:26px"></i>
				<div  Theme <a href="" target="_blank" style="color: #b9b9b9;;text-decoration: underline dotted rgba(0, 0, 0, .1);"></a><a href="//www.muyu.love" target="_blank" style="color: #b9b9b9;;text-decoration: underline dotted rgba(0, 0, 0, .1);">キツネ丨Fox</a>
<p></p>
<p class="footer-copy"><a href="https://icp.gov.moe/?keyword=20211224">萌ICP备 20221224号</a></p> 
<p class="footer-copy"><a href="https://beian.miit.gov.cn/">闽ICP备 18027703号-3</a></p> 
				</div>
				<script src="/assets/js/jquery-3.4.1.min.js"></script>
			<div class="footer-device">
					<span style="color: #b9b9b9;">
					    <!--页尾一言-->
						<script type="text/javascript" src="https://api.btstu.cn/yan/api.php?charset=utf-8&encode=js" ></script>
						<div id="yan"><script>text()</script></div>
                        </p>
					</span>
				</p>
			</div>
		</div>
		</div>
	</footer>
	<!--返回顶部-->
	<a class="cd-top faa-float animated "></a>
	<button id="moblieGoTop" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	<!--设置按钮-->
    <button id="changskin" style="bottom: 15px; transform: scale(0);"><i class="iconfont icon-gear inline-block rotating"></i></button>
	<!-- 音乐播放器 -->
    <link rel="stylesheet" href="/assets/css/APlayer.min.css">
    <script src="/assets/js/APlayer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/meting@2.0.1/dist/Meting.min.js"></script>
    <div id="aplayer-float" style="z-index: 99999999999999;"
	    class="aplayer"
        data-id="2312157124"
        data-server="netease"
        data-type="playlist"
        data-fixed="true"
        data-volume="0.5"
        data-theme="#ee9ca7">
    </div>
	<!--引入必要js-->
<script type='text/javascript' src='assets/js/lib.min.js?ver=3.3.8' id='js_lib-js'></script>
<script type='text/javascript' id='app-js-extra'>
/* <![CDATA[ */
var Poi = {"pjax":"","movies":{"url":"https:\/\/cdn.jsdelivr.net\/gh\/moezx\/cdn@3.1.3","name":"The Pet Girl of Sakurasou","live":"close"},"windowheight":"auto","codelamp":"close","ajaxurl":"https:\/\/miaomi.muyu.love\/wp-admin\/admin-ajax.php","order":"asc","formpostion":"bottom","reply_link_version":"new","api":"https:\/\/miaomi.muyu.love\/wp-json\/","nonce":"f6b08abf31","google_analytics_id":"","gravatar_url":"sdn.geekzu.org\/avatar"};
/* ]]> */
</script>
<script type='text/javascript' src='/assets/js/sakura-app.js?ver=3.3.8' id='app-js'></script>
<script type='text/javascript' src='https://miaomi.muyu.love/wp-includes/js/wp-embed.min.js?ver=5.7.2' id='wp-embed-js'></script>
<div class="changeSkin-gear no-select" style="bottom: -999px;"></div>
<div class="skin-menu no-select">
</p>Style
    <div class="theme-controls row-container">
        <ul class="menu-list">
            <li id="white-bg">
                <i class="fa fa-television" aria-hidden="true"></i>
			</li><!--Default-->
			            <li id="diy1-bg">
			    <i class="fa fa-heart-o" aria-hidden="true"></i>
			</li><!--Diy1-->
						            <li id="diy2-bg">
                <i class="fa fa-star-o" aria-hidden="true"></i>
			</li><!--Diy2-->
						            <li id="diy3-bg">
			    <i class="fa fa-delicious" aria-hidden="true"></i>
			</li><!--Diy3-->
						            <li id="diy4-bg">
			    <i class="fa fa-lemon-o" aria-hidden="true"></i>
			</li><!--Diy4-->
			            <li id="dark-bg">
                <i class="fa fa-moon-o" aria-hidden="true"></i>
            </li><!--Night-->
        </ul>
	</div>
	</p>
		Font
    <div class="font-family-controls row-container">
        <button type="button" class="control-btn-serif selected" data-mode="serif" 
                onclick="mashiro_global.font_control.change_font()"><i class="fa fa-font" aria-hidden="true"></i></button>
        <button type="button" class="control-btn-sans-serif" data-mode="sans-serif" 
                onclick="mashiro_global.font_control.change_font()"><i class="fa fa-bold" aria-hidden="true"></i></button>
	</div>
	</div>

<!-- 飘落动效 -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/static/js/sakura-native.js"></script>
<!-- 首页波浪特效 -->
<link rel="stylesheet" href="/assets/css/bolang.css">
<!--Live2d2d-->
<script src="https://cdn.muyu.love/Blog/Handsome/Live2d/load.js"></script>
<!--清空控制台-->
<script type="text/javascript">
  console.clear();  
  console.log("\n %c キツネのFox丨MuYu-Blog","color:#fff;background: linear-gradient(to right , #7A88FF, #d27aff);padding:5px;border-radius: 10px;");
</script>
</html>