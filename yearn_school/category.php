<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>郑州育人教育集团</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="郑州，教育，育人教育，育人教育集团，郑州育人教育集团，郑州育人国际学校，郑州外国语，郑州外国语女子中学，郑州航空港育人国际学校，郑州航空港">
    <meta name="description" content="郑州育人教育集团创始于2002年，集学前、小学、初中、高中教育为一体，联通学生成长、学习的各个学段，使学段间的科研、教研、教学融为一体，保证教育教学的连贯性和一致性。育人教育集团发展至今已在郑州成功打造了郑州外国语女子中学、育人国际学校等7所学校，3所幼儿园，在校学生近万人,教职员工近千人。">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/head.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/news.css">
    <style>
        .head-lis-two>.head-lis-active {
            border-bottom: none;
        }
        @media (max-width:860px){
          .bp-video{
            width:100% !important;
          }
          iframe{
            width:100% !important;
            height:250px !important;
          }
        }
    </style>

</head>

<body>
    <div class="head head-two" style="position: static">
        <div class="head-con head-con-two">
            <span id="nav-toggle" class="nav-toggle"><span></span><span></span><span></span></span>
            <a class="head-logo" href="/"></a>
            <ul class="head-lis head-lis-two">
                <li><a href="/">首页</a></li>
                <li><a href="http://jkyr.yearnedu.com" target="_blank">智慧校园</a></li>
                <!-- <li><a href="##">特色课程</a></li> -->
                <li class="down">
                    <a href="##">全景校园<i class="iconFont">&#xe621;</i></a>
                    <!-- <div class="line"></div> -->
                    <ul class="downpanel">
                        <li><a href="https://www.gy720.com/pano/view/9986" target="_blank">郑州航空港育人国际学校</a></li>
                        <li><a href="https://www.gy720.com/pano/view/9989" target="_blank">郑州外国语女子中学</a></li>
                        <li><a href="https://www.gy720.com/pano/view/9991" target="_blank">郑州航空港区育人高级中学</a></li>
                        <li><a href="https://www.gy720.com/pano/view/10019" target="_blank">襄城育人国际学校</a></li>
                    </ul>
                </li>
                <!-- <li><a href="##">教师风采</a></li> -->
                <!-- <li class="head-lis-active"><a href="##">集团动态</a></li> -->
                <!-- <li><a href="##">关于我们</a></li> -->
            </ul>
        </div>
        <div class="mask-layer" id="mask-layer" role="遮罩层"></div>
    </div>
    <div class="news-box">
        <div class="news-head headerImg"></div>
        <ul class="news-container">
				<?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>		
						<li>
						<a href="<?php the_permalink(); ?>">
							<div class="imgbox">
							<?php if ( has_post_thumbnail() ) : ?>
								 <?php the_post_thumbnail( 'thumbnail' ); ?>
							<?php else: ?>
								<img src="<?php echo get_first_image(); ?>" alt="<?php the_title();?>" class="news-imgbox">
							<?php endif; ?>
							</div>
							<div class="news-item">
								<h4><?php the_title();?></h4>
								<p><?php echo wp_trim_words($post->post_content, 66 );?></p>
								<div><?php the_time('Y-n-j'); ?></div>
							</div>
							<div class="news-more">
								<div><?php the_time('n-j'); ?></div>
								<div>more ></div>
							</div>
						</a>
						</li>	
					<?php endwhile; endif;?>
        </ul>
		<?php echo get_pagination();?>
    </div>


    <div class="foot">
        Copyright ? 2017 yearnedu.com Inc. All Rights Reserved. 郑州育人教育集团备案/许可证编号： 豫ICP备16026588号
    </div>
</body>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<script>
    function toggleNav() {
        $("#nav-toggle").toggleClass(" toggle-animate");
        $("body").toggleClass("open-nav");
    }
    $("#nav-toggle,#mask-layer").on("click", function () {
        toggleNav();
    });

    $(document).ready(function () {
        var w = document.body.clientWidth;
        if (w < 840) {
            $('.head-con').removeClass('head-con-two');
        } else {
            $('.head-con').addClass('head-con-two');
        }
    });
</script>

</html>