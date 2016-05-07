<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="content-language" content="zh-CN" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s '),
            'search'    =>  _t('关键字"%s"'),
            'tag'       =>  _t('标签"%s" '),
            'author'    =>  _t('%s ')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->options->keywords('_'); ?>" />
    <meta name="Description" content="<?php $this->options->description(); ?>"/>
    <meta name="generator" content="鹿乃 1.0.14.10.10" />
    <meta name="Y:Edition" content="1.7.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" type="image/x-icon" href="<?php if ($this->options->logoUrl){$this->options->logoUrl();}else{$this->options->siteUrl('favicon.ico');} ?>" />
    <link rel='stylesheet' href='http://fonts.useso.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CRaleway%3A600%2C500%2C400' type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" media="all" href="http://lvlvl.cn/usr/rain/css/Quantity.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/styles.css'); ?>">
    <script src="<?php $this->options->themeUrl('js/jquery-1.11.0.min.js'); ?>"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>

<body>

<!--banner-starts-->
<header>
<div class="bnr" id="home">
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <div class="banner-1">
                    <div class="container">
                        <div class="logo">
                            <a href="<?php $this->options->siteUrl(); ?>"><img src="<?php if ($this->options->logoUrl){$this->options->logoUrl();}else{echo 'http://lvlvl.cn/logo.png';} ?>" alt="<?php $this->options->title(); ?>" /></a>
                        </div>
                        <div class="banner-top">
                                <?php if ($this->options->Welcome){$this->options->Welcome();}else{$this->options->title();} ?>
                            <div class="title">
                                <?php $this->archiveTitle(array( 
                                 'category'  =>  _t('Category - %s 所有的文章'),
                                 'search'    =>  _t('包含关键字 %s 所有的文章'), 
                                 'tag'       =>  _t('标签 %s 所有的文章'), 
                                 'author'    =>  _t('%s ') ), ''); ?>

                            </div>
                        </div>
                        <div class="banner-text">
                            <h1>　　　　　　<?php $this->options->description(); ?></h1>
                            <h2><?php $this->options->title(); ?></h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-2">
                    <div class="container">
                        <div class="logo">
                            <a href="<?php $this->options->siteUrl(); ?>"><img src="<?php if ($this->options->logoUrl){$this->options->logoUrl();}else{echo 'http://lvlvl.cn/logo.png';} ?>" alt="<?php $this->options->title(); ?>" /></a>
                        </div>
                        <div class="banner-top">
                                <?php if ($this->options->Welcome){$this->options->Welcome();}else{$this->options->title();} ?>
                            <div class="title">
                                <?php $this->archiveTitle(array( 
                                 'category'  =>  _t('Category - %s 所有的文章'),
                                 'search'    =>  _t('包含关键字 %s 所有的文章'), 
                                 'tag'       =>  _t('标签 %s 所有的文章'), 
                                 'author'    =>  _t('%s ') ), ''); ?>

                            </div>
                        </div>
                        <div class="banner-text">
                            <h1>　　　　　　<?php $this->options->description(); ?></h1>
                            <h2><?php $this->options->title(); ?></h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-3">
                    <div class="container">
                        <div class="logo">
                            <a href="<?php $this->options->siteUrl(); ?>"><img src="<?php if ($this->options->logoUrl){$this->options->logoUrl();}else{echo 'http://lvlvl.cn/logo.png';} ?>" alt="<?php $this->options->title(); ?>" /></a>
                        </div>
                        <div class="banner-top">
                                <?php if ($this->options->Welcome){$this->options->Welcome();}else{$this->options->title();} ?>
                            <div class="title">
                                <?php $this->archiveTitle(array( 
                                 'category'  =>  _t('Category - %s 所有的文章'),
                                 'search'    =>  _t('包含关键字 %s 所有的文章'), 
                                 'tag'       =>  _t('标签 %s 所有的文章'), 
                                 'author'    =>  _t('%s ') ), ''); ?>

                            </div>
                        </div>
                        <div class="banner-text">
                            <h1>　　　　　　<?php $this->options->description(); ?></h1>
                            <h2><?php $this->options->title(); ?></h2>
                        </div>
                    </div>
                </div>
            </li>
        
        </ul>
    </div>
    <div class="clearfix">
    </div>
</div>
</header>
<!--banner-ends-->

<!--Slider-Starts-Here-->
            <script>
			    // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
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
<!--End-slider-script-->

<!--header-starts-->
<div class="header-bottom">
    <div class="fixed-header">
        <div class="container">
            <div class="top-menu">
                <span class="menu">
                    <img src="<?php $this->options->themeUrl('images/nav-icon.png'); ?>" alt="<?php $this->options->title(); ?>" />
                </span>
                <ul class="nav">
                    <li><a class="active" href="<?php $this->options->siteUrl(); ?>">主页</a></li>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li><a href="<?php $pages->permalink(); ?>" target="_self"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>

                </ul>
          <!-- script for menu -->
                <script>
                    $( "span.menu" ).click(function() {
                        $( "ul.nav" ).slideToggle( "slow", function() {
                            // Animation complete.
                        });
                    });
                </script>
          <!-- script for menu -->
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="<?php $this->options->siteUrl('Bulletin.php'); ?>" target="_blank"><span class="Bulletin"></span></a></li>
                    <li><a href="<?php $this->options->siteUrl('sitemap.xml'); ?>" target="_blank"><span class="Sitemap"></span></a></li>
                    <li><a href="<?php $this->options->adminUrl(''); ?>" target="_blank"><span class="admin"></span></a></li>
                </ul>
            </div>
        <div class="clearfix"></div>
        <script>
            $(document).ready(function() {
                var navoffeset=$(".header-bottom").offset().top;
                $(window).scroll(function(){
                    var scrollpos=$(window).scrollTop(); 
                    if(scrollpos >=navoffeset){
                        $(".header-bottom").addClass("fixed");
                    }else{
                        $(".header-bottom").removeClass("fixed");
                    }
                });
            });
        </script>
      </div>
   </div>
</div>
            <!--Slider-Starts-Here-->
            <script>
			    // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
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
            <!--End-slider-script-->
<!--header-ends-->

<div class="header section">
    <div class="header-inner section-inner">
        <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" rel="home" class="logo">
            <img src="http://q1.qlogo.cn/g?b=qq&nk=<?php if ($this->options->aMail){$this->options->aMail();}else{echo '1696674719';} ?>&s=100" alt="<?php $this->options->title() ?>">
        </a>
        <div class="blog-title">
            <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" rel="home"><?php $this->options->title() ?></a>
        </div>
        <div class="clear"></div>                                     
    </div>
</div>
