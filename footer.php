<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<div style="display:none">
<script src="<?php if ($this->options->CNZZtjsrc){$this->options->CNZZtjsrc();}else{} ?>" language="JavaScript"></script>
</div>
 
<script>
(function(){
   var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?08bd2299557fe146f56dfc5d3d2fa9da":"https://jspassport.ssl.qhimg.com/11.0.1.js?08bd2299557fe146f56dfc5d3d2fa9da";
   document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
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
                            <li><?php _e('微博：'); ?><a href="<?php if ($this->options->SinaWBsite){$this->options->SinaWBsite();}else{} ?>" target="_blank" title="新浪微博"><?php if ($this->options->SinaWBName){$this->options->SinaWBName();}else{} ?></a></li>
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
         <a href="http://lvlvl.cn/" target="_blank" title="创始人"> / Designed By Sharrow.Lu / </a>！模板个人设计. 保留所有权利.
     </div>
<!--copyright end here-->
<div style="display:none">
    <script src="http://s4.cnzz.com/z_stat.php?id=1257185262&web_id=1257185262" language="JavaScript"></script>
</div>

<links>
    <div class="links-box">
        <div class="links">
            <span class="text"><span class="en-code" style="font-family: arial;font-size: 16px;"><?php _e('@'); ?></span><a href="<?php _e('mailto:%s',$this->options->aMail); ?>" target="_blank"><?php _e('友情链接:'); ?></a></span>
               <a href="http://lvlvl.cn" title="鹿乃 - 致力于打造高品质的个人网站!" target="_blank">鹿乃</a>|
            <!--?php Links_Plugin::output(); ?-->  
        </div>
    </div>
</links>

<?php else: ?>
<?php endif; ?>

   </body>
</html>