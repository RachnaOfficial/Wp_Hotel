<div class="coneblog-author-box layout-<?php echo $atts['layout'] ?><?php echo ($atts['box_shadow'] == 'true' ? ' has-shadow' : '') ?>">
    <?php if('true' == $atts['avatar']): ?>
    <div class="cb-avatar<?php //echo ($atts['show_avatar_border'] == 'yes' ? ' has-border' : '') ?>">
        <?php
        if($avatar) {
            echo $avatar;
        } else {
            echo '<img src="' . $atts['avatar']['url'] . '">';
        }
        ?>
    </div>
    <?php endif; ?>
    <div class="cb-author-name">
        <h3><?php echo $author_name ?></h3>
    </div>
    <?php if('true' == $atts['title']): ?>
    <div class="cb-author-title">
        <span class="title"><?php echo $atts['title'] ?></span>
        <span class="title-sep">at</span>
        <span class="bsuiness"><a href="<?php echo $atts['business_url'] ?>" target="_blank"><?php echo $atts['business_name'] ?></a></span>
    </div>
    <?php endif; ?>
    <?php if('true' == $atts['bio']): ?>
    <div class="cb-author-bio">
        <p><?php echo $author_bio ?></p>
    </div>
    <?php endif; ?>
    <?php if('true' == $atts['social_links']): ?>
    <div class="cb-social-links">
        <ul>
            <?php if(isset($atts['fb_url']) && $atts['fb_url'] !=""){ ?>
            <li><a href="<?php echo $atts['fb_url'] ?>" target="_blank"><i class="icon-facebook"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['tw_url']) && $atts['tw_url'] !=""){ ?>
            <li><a href="<?php echo $atts['tw_url'] ?>" target="_blank"><i class="icon-twitter"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['insta_url']) && $atts['insta_url'] !=""){ ?>
            <li><a href="<?php echo $atts['insta_url'] ?>" target="_blank"><i class="icon-instagram"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['in_url']) && $atts['in_url'] !=""){ ?>
            <li><a href="<?php echo $atts['in_url'] ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['pin_url']) && $atts['pin_url'] !=""){ ?>
            <li><a href="<?php echo $atts['pin_url'] ?>"target="_blank"><i class="icon-pinterest"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['reddit_url']) && $atts['reddit_url'] !=""){ ?>
            <li><a href="<?php echo $atts['reddit_url'] ?>" target="_blank"><i class="icon-reddit"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['yt_url']) && $atts['yt_url'] !=""){ ?>
            <li><a href="<?php echo $atts['yt_url'] ?>" target="_blank"><i class="icon-youtube"></i></a></li>
            <?php } ?>
            <?php if(isset($atts['behance_url']) && $atts['behance_url'] !=""){ ?>
            <li><a href="<?php echo $atts['behance_url'] ?>" target="_blank"><i class="icon-behance"></i></a></li>
            <?php } ?>
        </ul>
    </div>
    <?php endif; ?>			
</div>