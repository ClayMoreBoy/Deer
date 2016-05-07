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

<!--Duosuo插件-starts-->
<div id="comments"> 
<?php if($this->allow('comment')): ?>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php if ($this->options->short_name){$this->options->short_name();}else{echo 'yrain';} ?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>

    </div> <!--Post-->
</div>

<?php $this->need('footer.php'); ?>