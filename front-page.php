<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">
    <title>デジタル園便り</title>
    <?php wp_head(); ?>

</head>

<body>

    <header>
        <div class="info_he info_img">
            <!-- <img class="header_img" src="<?php// echo get_template_directory_uri(); ?>/img/header5.png" alt=ヘッターの画像> -->
            <h2 class="head_title">さざなみえんだより
            <br><?php echo current_datetime()->format('y年m月'); ?>号</h2>
        </div>
    </header>
    <?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
    
        <!-- 山口0921ここから -->
    <div class="container">
        <div class="sec1">
            <?php $query = new WP_Query( ['post_type' => 'event' ,'posts_per_page' => 1 ]); ?>
            <?php if($query->have_posts()):?>
            <?php while($query->have_posts()): $query->the_post(); ?>
            <img src="<?php the_field("event_image") ;?>" class="event_img"> 
            <?php endwhile;?>
            <?php else:?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>       
        </div> 
        <!-- 山口0921ここまで  -->
        <!-- 徳0921 -->
        <div class="info">
            <div class="sec2">
                <?php $query = new WP_Query( ['post_type' => 'notice' ,'posts_per_page' => 1 ]); ?> <!--  <=朝みーこんさんに相談 -->
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h2><?php the_field("notice") ;?></h2>
                <p><?php the_field("notice_memo") ;?></p>        
                <?php endwhile;?>
                <?php else:?>
                  <?php endif;?>
                  <?php wp_reset_postdata(); ?>
            </div>     
         
        <!-- 山口0921ここから -->
            <div class="sec3">
                <span class="box-title">新着情報</span>
                <?php $query = new WP_Query( ['post_type' => 'new_info' ,'posts_per_page' => 3 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <p><?php the_field("new_info") ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>  
       
        <!-- 徳触りました9/23 -->
        <div class="sec4">
            <h3>イベントカレンダー</h3>
            <p >
                <iframe class="calender" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffde5a&amp;ctz=Asia%2FTokyo&amp;src=Nmt1ZXJtb3RmcjQ2NTBrZThibTNvcmN2cnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%239E69AF&amp;color=%23F6BF26&amp;showTitle=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                <!-- <iframe class="calender" src="https://calendar.google.com/calendar/embed?src=6kuermotfr4650ke8bm3orcvrs%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->
            </p>
        </div>
        <div class="sec5">
            <?php $query = new WP_Query( ['post_type' => 'menu' ,'posts_per_page' => 1 ]); ?>
            <?php if($query->have_posts()):?>
            <?php while($query->have_posts()): $query->the_post(); ?>
            <a href="<?php the_field('menu') ;?>" class="btn btn-custom01">
                <span class="btn-custom01-front">今月の献立表</span>
                <i class="fas fa-angle-right fa-position-right"></i>
            </a>
            <?php endwhile;?>
            <?php else:?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>       
        </div>

        <!-- 9/21カスタム投稿と紐付け -->
        <!-- 徳9/21 'posts_per_page' => 2のこの数字って何-->
        <div class="sec6">
            <h2>各クラスからのお知らせ</h2>
        </div>
        <ul>
            <li class="rose">
                <?php $query = new WP_Query( ['post_type' => 'roseclass' ,'posts_per_page' => 1 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h3>ミッキー</h3>
                <p><?php the_field('rose') ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>  
            </li>

            <li class="sakura">
                <?php $query = new WP_Query( ['post_type' => 'sakuraclass' ,'posts_per_page' => 1 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h3>ラビー</h3>
                <p><?php the_field('sakura') ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>  
            </li>

            <li class="sunflower">
                <?php $query = new WP_Query( ['post_type' => 'sunflowerclass' ,'posts_per_page' => 1 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h3>ドナルド</h3>
                <p><?php the_field('sunflower') ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>  
            </li>

            <li class="lily">
                <?php $query = new WP_Query( ['post_type' => 'lilyclass' ,'posts_per_page' => 1 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h3>シープ</h3>
                <p><?php the_field('lily') ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?> 
            </li>

            <li class="violet">
                <?php $query = new WP_Query( ['post_type' => 'violetclass' ,'posts_per_page' => 1 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h3>バンビ１歳</h3>
                <p><?php the_field('violet') ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>         
            </li>

            <li class="valley">
                <?php $query = new WP_Query( ['post_type' => 'valleyclass' ,'posts_per_page' => 1 ]); ?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <h3>バンビ０歳</h3>
                <p><?php the_field('valley') ;?></p>
                <?php endwhile;?>
                <?php else:?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>             
            </li>
        </ul>
    </div>

    <footer>
        <div>
        <!-- 徳 fontを組む可能性があるためbackground-imgに書き換えしました 9/23 -->
        <!-- <img class="footer_img" src="<?php //echo get_template_directory_uri(); ?>/img/footer2.png" alt=フッターの画像> -->
            <!-- <p class="copyright">Copyright &copy; DEMO all rights reserved.</p> -->
        </div>
    </footer>
    <p class="copyright">Copyright; digital-letter all rights reserved.</p>
    <?php wp_footer(); ?>
</body>
</html>