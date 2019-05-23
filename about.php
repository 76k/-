
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>关于我们</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/adapt.css">
    <script src="js/adapt.js"></script>
</head>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=g4giuq4FmE0fwwCzwqkayyznscPfPYlM">
</script>
<body>
    <!-- 关于我们 -->
    
    <div id="box">
        <?php require_once "top.php";?>
        <!-- banner -->
        <div class="banner">
            <img src="img/about_banner.jpg" alt="">
        </div>
        <!-- 关于我们 -->
        <div class="aboutus">
            <div class="aboutus_top ls">
                <div class="labe">
                    <h2>OUR INTRODUCTION</h2>
                    <h3>关于我们</h3>
                </div>
                <p>从初的以贸易公司模式不断发展壮大，成功转型为一个集研发、生产、销售为一体的高新技术企业，公司经过十余年发展历程现拥有一批专业化的研发团队、先进的生产设备、精细化的生产工艺流程，人才济济，设备齐全，公司执行ISO9001：2015国际标准化质量管理体系。<br>
公司主要生产多功能电源适配器、手机充电器、车载充电器、LED驱动电源、开关电源、安防电源、小家电（音响、机顶盒、灯饰）电源、多功能排插、电子美容产品，产品设计绿色环保、结构新颖、舒适安全，有超薄式、折叠式、多接口USB输出等一系列产品，大小功率品种齐全，广泛应用于家庭、办公、灯饰、美容美发、母婴用品、医疗器械等领域。<br>
公司产品取得UL PSE GS CE KC SAA 3C等国际安规认证数百项，符合IEC60950信息类、IEC61347 灯饰类、IEC60601医疗类等多项认证标准，我们为客户提供1W到150W高标准、高能效电源，紧随国际市场经济发展趋势，力求走遍世界各地，产品远销日本、韩国、美国、欧洲、澳大利亚、巴西等地，目前我们成为国内外大企业企业的直接或间接供应商。为进一步拓展海内外市场，我们每年积极参加各种国内或国际展会。<br>
我们承载着良好的社会责任，不断追求，不断进步，我们的宏伟蓝图将精彩粉呈。</p>
            </div>
        </div>
        <!-- 企业文化 -->
        <div class="culture">
            <div class="culture_content ls">
                <div class="labe">
                    <h2>COMPANY CULTURE</h2>
                    <h3>企业文化</h3>
                </div>
                <p><i>我们的使命：</i>致其知，诚其意，精其术，达其道，学以致用，和谐共进，富强我的祖国！</p>
                <p><i>我们的宗旨：</i>不让顾客在短时内对我们的企事业大喜过望，要让顾客长时间对我们的企业不失望！</p>
                <p><i>我们的愿景</i>成为世界先进企业，成为幸福自在的主人！</p>
                <p><i>我们的状态</i>阳光奋斗，洒脱傻乐！</p>
                <p><i>我们的作风</i>谦卑、专业、众善奉行！</p>
                <p><i>我们的团队</i>特别能吃苦，特别能战斗！</p>
                <p><i>核心文化</i>信念+军队+学校+家庭。</p>
                <p><i>我们不断完善、持续改进、规范管理、精益求精，满足客户的需求，提高员工的综合素质、引进先进的管理模式、推广企业形象、打造先进企业、满足客户需求。</i></p>
            </div>
        </div>
        <!-- 联系我们 -->
        <div class="contact">
            <div class="contact_centent">
                <div class="cont_left">
                    <h2>CONTACT US</h2>
                    <h3>联系我们</h3>
                    <p>联系QQ：258506508</p>
                    <p>手机号码：130000000</p>
                    <p>联系邮箱：contact@fkadjkhsf.co</p>
                    <p>联系电话：020-000000 000-000000</p>
                    <p>联系地址：XXX省XXX市XXX县XXX路XXX号</p>
                </div>
                <div class="cont_right" id="container"></div>
            </div>
        </div>

        <!-- 底部 -->
        <?php require_once "bottom.php";?>
    </div>
</body>
<script>
    var container = document.getElementById("container")
    var map = new BMap.Map("container");
    var point = new BMap.Point(116.404, 39.915);
    map.enableScrollWheelZoom();
    map.centerAndZoom(point, 15);  
</script>


</html>