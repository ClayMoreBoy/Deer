<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<!--Posts-starts -->                                            
<div class="posts">
    <div class="post type-post status-publish">          
        <div class="content-inner">
            <div class="post-header">
                <h2 class="post-title"><a href="<?php $this->permalink() ?>" rel="bookmark" title="<?php $this->title(); _e(' - '); $this->options->title(); ?>"><?php $this->title(); ?></a></h2>
                <div class="post-meta">
                    <span class="date-sep"> / </span>
                    <span class="post-author">Author：<a href="<?php $this->author->permalink(); ?>" title="发布作者 Author ：<?php $this->author(); ?>" rel="author"><?php $this->author(); ?></a></span>
                    <span class="date-sep"> / </span>
                    <span class="post-categories">Category：<?php $this->category(' , '); ?></span>
                    <span class="date-sep"> / </span>
                    <span class="post-tags">Label：<?php $this->tags(' , ', true, '无'); ?></span>
                    
                </div> <!--meta-->
            </div> 
<!--header-->

<div class="content section-inner">

<!--Post-starts -->
    <div class="post-content">

     <!--Postcontent-starts -->

        <?php $this->content(); ?>

     <!--Postcontent-ends -->

    </div> 
<!--Post-ends-->

<!--content-inner -->
    <div class="clear"></div>
    <div class="skills"><div class="percent-text"></div></div> 
            </div> 
        </div>
<!--content-inner -->

<!-- QitaNav-starts-->
        <div class="clear"></div>                          
        <div class="post-nav">
            <?php thePrev($this); ?>
            <?php theNext($this); ?>
            <div class="clear"></div>
        </div>
<!-- QitaNav-ends-->

<!--PL-starts-->
        <div id="respond" class="comment-respond">

            <!--在这里放入你的评论代码 务必在这div之间-->
            
        </div><!--respond-->
    </div> <!--Post-->
</div>

<?php $this->need('footer.php'); ?>