<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\wamp2\www\muke\public/../application/demo\view\index\index.html";i:1526356106;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Spasol Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="/muke/public/static/Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/muke/public/static/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="/muke/public/static/Home/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/muke/public/static/Home/js/move-top.js"></script>
    <script type="text/javascript" src="/muke/public/static/Home/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="header">
            <div class="logo">
                <h3>
                    <a class="link link--yaku" href="/muke/public/static/Home/index.html">
                        <span>幕</span><span>课</span><span>网</span>
                    </a>
                </h3>
            </div>
            <div class="navigation">
                <span class="menu"><img src="/muke/public/static/Home/images/menu.png" alt=""/></span>
                <ul class="nav1">
                    <li><a class="hvr-overline-from-center button2 active" href="/muke/public/static/Home/index.html">主页</a></li>
                    <li><a class="hvr-overline-from-center button2" href="/muke/public/static/Home/lesson.html">课程列表</a></li>
                    <li><a class="hvr-overline-from-center button2" href="/muke/public/static/Home/contact.html">论坛</a></li>
                    <!--<li><a class="hvr-overline-from-center button2" href="/muke/public/static/Home/shortcodes.html">评论</a></li>-->
                    <li><a class="hvr-overline-from-center button2" href="/muke/public/static/Home/my.html">我的</a></li>
                </ul>
                <!-- script for menu -->
                <script>
                    $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- //script for menu -->
            </div>
            <div class="search">
                <form>
                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="banner-info">
            <script src="/muke/public/static/Home/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: false,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-text">
                            <h3>前端开发 <span>|</span> 后端开发 <span>|</span> 数据库</h3>
                            <h4>小程序直播开发</h4>
                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h3>前端开发 <span>|</span> 后端开发 <span>|</span> 数据库</h3>
                            <h4>系统学习数据结构</h4>
                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h3>前端开发 <span>|</span> 后端开发 <span>|</span> 数据库</h3>
                            <h4>Web前端攻城狮</h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="read-more"><a class="hvr-shutter-in-horizontal button" href="/muke/public/static/Home/#">立即学习</a></div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <h3 class="tittle-one">Welcome to our website!</h3>
        <div class="bottom-grids">
            <div class="col-md-3 bottom-grid">
                <img src="/muke/public/static/Home/images/read3.jpg" alt="" />
            </div>
            <div class="col-md-3 bottom-grid grid-one">
                <h4>Temporibus autem</h4>
                <p>Libero tempore, cum soluta nobis est eligendi
                    optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus  ut
                    et voluptates repudiandae sint et molestiae non recusandae</p>
            </div>
            <div class="col-md-3 bottom-grid">
                <img src="/muke/public/static/Home/images/read4.jpg" alt="" />
            </div>
            <div class="col-md-3 bottom-grid grid-one">
                <h4>Temporibus autem</h4>
                <p>Libero tempore, cum soluta nobis est eligendi
                    optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus  ut
                    et voluptates repudiandae sint et molestiae non recusandae</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<div class="keep">
    <div class="container">
        <h3 class="tittle-one">系统学习课程</h3>
        <p>在我们的网站里，您可以了解到各种课程的信息和课程文档。</p>
    </div>
</div><div class="copyrights">Collect from <a href="/muke/public/static/Home/http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<!-- features -->
<div class="feature">
    <div class="container">
        <h3 class="tittle-one">分类简介</h3>
        <div class="feature-grids">
            <div class="col-md-3 feature-grid text-center">
                <div class="feature-grid-one">
                    <a href="/muke/public/static/Home/#" class="hi-icon hi-icon-archive glyphicon glyphicon-pencil"> </a>
                    <h4>课件资源</h4>
                    <p>可以在这里查看想要课程的课件资源.</p>
                </div>
            </div>
            <div class="col-md-3 feature-grid text-center">
                <div class="feature-grid-two">
                    <a href="/muke/public/static/Home/#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
                    <h4>师资团队</h4>
                    <p> 可以在这里查看每门课程的主讲老师.</p>
                </div>
            </div>
            <div class="col-md-3 feature-grid text-center">
                <div class="feature-grid-one">
                    <a href="/muke/public/static/Home/#" class="hi-icon hi-icon-archive glyphicon glyphicon-star"> </a>
                    <h4>课程收藏</h4>
                    <p>可以在这里查看您收藏的课程和浏览.</p>
                </div>
            </div>
            <div class="col-md-3 feature-grid text-center">
                <div class="feature-grid-two">
                    <a href="/muke/public/static/Home/#" class="hi-icon hi-icon-archive glyphicon glyphicon-map-marker"> </a>
                    <h4>前沿技术</h4>
                    <p>可以在这里寻找您喜欢的新型技术视频.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //features -->
<!-- tips -->
<div class="tips">
    <div class="container">
        <h3 class="tittle-one">recommend tips</h3>
        <div class="tip-grids">
            <div class="col-md-4 tip-grid">
                <figure class="effect-julia">
                    <img src="/muke/public/static/Home/images/rec1.jpg" alt="" />
                    <figcaption>
                        <h4>全网最热Python3入门+进阶 更快上手实际开发</h4>
                        <p>详解面向对象</p>
                        <p>重基础、有进阶</p>
                        <p>写出更高效的代码</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 tip-grid">
                <figure class="effect-julia">
                    <img src="/muke/public/static/Home/images/rec2.jpg" alt="" />
                    <figcaption>
                        <h4>区块链入门与去中心化应用实战</h4>
                        <p>什么是去中心化Dapp？</p>
                        <p>什么是以太坊？</p>
                        <p>什么是智能合约？</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 tip-grid">
                <figure class="effect-julia">
                    <img src="/muke/public/static/Home/images/rec3.jpg" alt="" />
                    <figcaption>
                        <h4>推荐算法理论与实践</h4>
                        <p>算法基础</p>
                        <p>算法巩固与提高</p>
                        <p>如何学好算法</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //tips -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 ftr_navi ftr">
            <h3>导航</h3>
            <ul>
                <li><a href="/muke/public/static/Home/index.html">Home</a></li>
                <li><a href="/muke/public/static/Home/about.html">About</a></li>
                <li><a href="/muke/public/static/Home/treatments.html">Treatments</a></li>
                <li><a href="/muke/public/static/Home/contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3 ftr_navi ftr">
            <h3>相关推荐</h3>
            <ul>
                <li><a href="/muke/public/static/Home/#">###</a></li>
                <li><a href="/muke/public/static/Home/#">###</a></li>
                <li><a href="/muke/public/static/Home/#">#</a></li>
                <li><a href="/muke/public/static/Home/#">##</a></li>
            </ul>
        </div>
        <div class="col-md-3 ftr_navi ftr">
            <h3>关于我们</h3>
            <h2>SpaSol</h2>
            <p>Diamond street,</p>
            <p>260-14 City, Country</p>
            <p>+62 000-0000-00</p>
        </div>
        <div class="col-md-3 ftr_navi ftr">
            <h3>联系我们</h3>
            <form>
                <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}" required="">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"><input type="submit" value=" "></span>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->
<!-- copy right -->
<div class="copy-right">
    <div class="container">
        <p>Copyright &copy; 2018.Company name All rights reserved.</p>
    </div>
</div>
<!-- //copy right -->
<!-- for bootstrap working -->
<script src="/muke/public/static/Home/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="/muke/public/static/Home/#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>