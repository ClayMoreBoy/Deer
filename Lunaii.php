<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="skills"><ul><li><div class="percentage"></div><div class="percent-text"></div><div class="clear"></div></li></ul></div>

<!--welcome-starts-->
<div class="welcome">
    <div class="container">
        <div class="welcome-top">
            <div class="col-md-4 welcome-left">
                <div class="lvlight-box">
                    <div class="welcome-bottom">
                        <h4>
                                
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 welcome-left">
 
            </div>
            <div class="col-md-4 welcome-left">
                <div class="lvlight-box">
                    <div class="welcome-bottom">
                        <h4>
                            
                        </h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>	 
<!--welcome-ends-->

<div class="skills"><ul><li><div class="percentage"> </div><div class="percent-text"> </div><div class="clear"></div></li></ul></div>

<!--test-starts-->
<div class="news">
    <div class="container">
        <div class="news-top">
            <h3>Music</h3>
        </div>
        <div class="news-main">
            <?php while($this->next()): ?>
                
            <div class="col-md-6 news-left">
                <div class="col-md-4 n-left">
                    <img src="<?php echo Lu_img_postthumb($this->cid); ?>" alt="<?php $this->options->title(); ?>" >
                </div>
                <div class="col-md-8 n-right">
                    <p><a href="<?php $this->permalink() ?>" target="_blank" rel="bookmark" title="<?php $this->title() ?>"><?php $this->title(); ?></a></p>
                    
                    <p>　　　<?php $this->excerpt(80, '...'); ?></p>
                    <span><?php $this->date('F j, Y'); ?></span>
                </div>
                <div class="clearfix"> </div>
            </div> 
            <?php endwhile; ?>

        </div>
    </div>
</div>
<!--test-ends-->


<div class="skills"><ul><li><div class="percentage"></div><div class="percent-text"></div><div class="clear"></div></li></ul></div>

<!--advice-starts-->
<div class="style">
    <div class="container">
        <div class="style-text">
            <h3><?php $this->options->title(); _e('关于诉求与建议'); ?></h3>
               <p><?php if ($this->options->siteIntro){$this->options->siteIntro();}else{} ?>
                <div class="s-btn">
                    <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=MwIEAwMKBQYHAQAHc0JCHVBcXg" style="text-decoration:none;"><?php _e('邮箱留言入口'); ?></a>
                    <a href="<?php if ($this->options->hitfun){$this->options->hitfun();}else{} ?>" target="_blank"><?php _e('触及致力乐趣'); ?></a>
               </div>
        </div>
    </div>
</div>
<!--advice-ends-->

<!--testimonials-starts-->
	<div class="testimonials">
		<div class="container">
			<div class="testimonials-top">
				<h3>Bulletin</h3>
				<p><?php if ($this->options->TBulletin){$this->options->TBulletin();}else{} ?></p>
				<p><?php echo hitokoto();?></p>
			</div>
		</div>
	</div>
<!--testimonials-ends-->

			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 5
			      $("#slider5").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
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