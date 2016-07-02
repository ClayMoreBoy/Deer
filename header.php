<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="content-language" content="zh-CN" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s '),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 所有的文章'),
            'author'    =>  _t('%s ')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="<?php $this->options->siteUrl('favicon.ico'); ?>" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/styles.css'); ?>">
    <link rel='stylesheet' href='http://fonts.useso.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CRaleway%3A600%2C500%2C400' type='text/css' media='all' />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
    <?php $this->header("generator="); ?>

</head>
    
<body>

<!-- HTMLheader返回值 -->
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
