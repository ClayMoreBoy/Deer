<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('Lunai.php'); ?>

<div class="skills"><ul><li><div class="percent-text"> </div><div class="clear"></div></li></ul></div>

<!--Blog-starts-->
	<div class="blog">
		<div class="container">
			<div class="team-top contact-top">
                <h3><?php $this->archiveTitle(array(
            'category'  =>  _t('Category - %s 所有的文章'),
            'search'    =>  _t('包含关键字 %s 所有的文章'),
            'tag'       =>  _t('标签 %s 所有的文章'),
            'author'    =>  _t('%s ')
            ), ''); ?></h3>
            </div>

			<div class="col-md-8 blog-left">
             <?php while($this->next()): ?>
                <div class="blog-one">


                            <img src="<?php echo Lu_img_postthumb($this->cid); ?>" alt="<?php $this->options->title(); ?>" />


                    <a href="<?php $this->permalink() ?>" target="_blank"><h4><?php $this->title() ?></h4></a>
					<p><?php $this->date('F j, Y'); ?>　　<?php _e('分类：'); ?><?php $this->category(' , '); ?> <?php _e('标签：'); ?><?php $this->tags(' , ', true, '无'); ?><br>
                    　　　<?php $this->excerpt(160, '...'); ?></p>
					<div class="b-btn">
						<a href="<?php $this->permalink() ?>" target="_blank"><?php _e('点击进去&raquo;'); ?></a>
					</div>
				</div>

                <?php endwhile; ?>

				<div class="blog-btm">
                    <nav>
                        <div class="post-nav archive-nav">    
                            <?php $this->pageNav('&laquo; ', ' &raquo;',6,'',array('wrapTag' 
                                                                                       => 'nav','wrapClass'
                                                                                       =>'pagination','itemTag'
                                                                                       =>'','prevClass'  
                                                                                       =>  'extend prev', 'nextClass'     
                                                                                       =>  'extend next', 'currentClass'     
                                                                                       =>  'page-number current')); ?>
                            <div class="clear"></div>          
                        </div> 
                    </nav>
                </div>
			</div>
            <div id="windows">
			<div class="col-md-4 blog-right">
				<div class="categories">
					<div class="blog-top contact-top">
						<h3 style="padding-top: 3.5em">CATEGORIES</h3>
					</div>
                    <ul>
                        <?php $this->widget('Widget_Metas_Category_List')
    ->parse('<li><a href="{permalink}" target="_blank" title="{description}">{name}</a> ({count})</li>'); ?>
                    </ul>
				</div>
				<div class="archives">
					<div class="blog-top contact-top">
						<h3>ARCHIVES</h3>
					</div>
					<ul>
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li><a href="{permalink}" target="_blank" >{date}</a></li>'); ?>
                        <li><a href="<?php $this->options->feedUrl(); ?>" target="_blank" ><?php _e('文章 RSS'); ?></a>&nbsp;&nbsp;<a href="<?php $this->options->commentsFeedUrl(); ?>" target="_blank" ><?php _e('评论 RSS'); ?></a></li>
					</ul>
				</div>
			</div>
            </div> 
			<div class="clearfix"></div>
		</div>
	</div>
<!-- Blog-ends-->

<?php $this->need('footer.php'); ?>