<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!--welcome-starts-->
<div class="welcome">
    <div class="container">
        <div class="welcome-top">
            <div class="col-md-4 welcome-left" id="welcome-left">
                <div class="lvlight-box">
                    <div class="welcome-bottom">
                        <h4>
                            <?php random_posts();?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 welcome-left">
 
            </div>
            <div class="col-md-4 welcome-left" id="welcome-right">
                <div class="lvlight-box">
                    <div class="welcome-bottom">
                        <h4>
                            <?php random_posts();?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <script type="text/javascript">
            $(function(){
                if($("#welcome-left").height() > $("#welcome-right").height()){
                    $("#welcome-right").css("height",$("#welcome-left").height()) }else{
                        $("#welcome-left").css("height",$("#welcome-right").height()) 
                    }
            })
        </script>
    </div>
</div>	 
<!--welcome-ends-->

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

<!--testimonials-starts-->
	<div class="testimonials">
		<div class="container">
			<div class="testimonials-top">
				<h3>Bulletin</h3>
				<p><?php if ($this->options->TBulletin){$this->options->TBulletin();} ?></p>
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