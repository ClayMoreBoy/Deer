<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<div style="display:none">
<script src="<?php if ($this->options->CNZZtjsrc){$this->options->CNZZtjsrc();}else{} ?>" language="JavaScript"></script>
</div>

<script type="text/javascript" src="<?php $this->options->themeUrl('js/nivo-lightbox.min.js'); ?>"></script>
<script type="text/javascript">
		$(document).ready(function(){
		$('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
		});
</script>
    
<?php $this->footer(); ?>

<?php if($this->is('post')): ?>
<?php else: ?>
<div class="skills percent-text"></div>
<!-- Footer-starts -->
<div class="footer section">
    <div class="footer-inner footer-section-inner">
        <div class="footer-a widgets">
            <div class="widget widget_recent_entries"><div class="widget-content">  
                <h3 class="widget-title"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); _e('Recent Posts'); ?></h3>
                <ul>
                    <?php $this->widget('Widget_Contents_Post_Recent')->parse('
                    <li><a href="{permalink}">{title}</a></li>'); ?>
                    
                </ul>
                </div>
                <div class="clear"></div></div>         
            <div class="clear"></div>
        </div>
        
       <!-- footer-a -->
            
        <div class="footer-b widgets">
            <div class="widget widget_categories">
                <div class="widget-content">
                    <h3 class="widget-title"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); _e('Category'); ?>
                    </h3>
                    <ul>
                        <?php $this->widget('Widget_Metas_Category_List')->parse('
                    <li><a href="{permalink}" title="{description}">{name}</a> ({count})</li>'); ?>
                    
                    </ul>
                </div>
                <div class="clear"></div></div>         
            <div class="clear"></div>
        </div>

       <!-- footer-b -->

        <div class="footer-c widgets">
            <div class="widget widget_text">
                <div class="widget-content">
                    <h3 class="widget-title"><?php _e('FOR ME'); ?></h3>
                    <div class="textwidget">
                        <ul>
                            <li><?php $this->options->title(); ?></li>
                            <li><?php _e('微博：'); ?><a href="http://weibo.com/Lusuzy" target="_blank" title="新浪微博"><?php if ($this->options->SinaWBName){$this->options->SinaWBName();}else{} ?></a></li>
                            <li><?php _e('邮箱：'); $this->options->aMail(); ?></li>
                        </ul>
                     </div>
                 </div>
               <div class="clear"></div></div>         
            <div class="clear"></div>
         </div><!-- footer-c -->
    <div class="clear"></div>
</div><!-- footer-inner -->
</div><!-- footer -->
<div class="skills percent-text"></div>
<?php endif;?>
<div class="credits section">
    <div class="credits-inner footer-section-inner">
        <p class="credits-left">
            <span><?php _e('©Copyright '); ?><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a>　.　
                <ul>
                    <?php if($this->user->hasLogin()): ?>
                    
                    <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台(%s)',$this->user->screenName); ?></a>
                    </li>  
                    <?php else: ?>
                    
                    <li class="last">
                        <a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('注册登录'); ?></a>
                    </li>
                    <?php endif; ?>
                    
                </ul>
        </p>
        <p class="credits-right">
            <a href="javascript:scroll(0,0)"><?php _e('返回顶部'); ?></a>
        </p>
        <div class="clear"></div>
    </div><!-- credits-inner -->
</div><!-- credits -->

<?php if($this->is('index')):  ?><?php else: ?><div class="hurdle"></div><?php endif; ?>

<?php if($this->is('index')): ?>

<!--copyrights start here-->
   <hr style="height:1px;border:none;border-top:1px solid #FC0B4E;"/>
     <div class="copyright">鹿乃 - LVLVL.CN 版本1.7.0
         <a href="http://lvlvl.cn/" target="_blank" title="创始人"> / Designed By Lunaiiy / </a>！模板个人设计. 保留所有权利.
     </div>
<!--copyright end here-->
<div style="display:none">
<script src="http://s4.cnzz.com/z_stat.php?id=1257185262&web_id=1257185262" language="JavaScript"></script>
</div>
<!-- Friendship link-starts -->
<links>
    <div class="links-box">
        <div class="links">
            <span class="text"><span class="en-code" style="font-family: arial;font-size: 16px;"><?php _e('@'); ?></span><a href="http://wpa.qq.com/msgrd?v=3&uin=1696674719&site=qq&menu=yes" target="_blank"><?php _e('友情链接:'); ?></a></span>
                <!--?php Links_Plugin::output(); ?-->  
        </div>
    </div>
</links>
<!-- link-ends -->
<?php else: ?>
<?php endif; ?>

   </body>
</html>