<!-- 徳カスタムフィールド追加9/21 お知らせ-->
<?php the_post(); ?>
        <div class="sec2">
            <h2><?php the_field("notice") ;?></h2>
            <p><?php the_field("notice_memo") ;?></p>        
        </div>
