<?php
echo '<div class="coneblog-category-box box-' . $item['_id'] . '">';

    echo '<div class="icon-container">';
    if($item['selected_icon']['value']) {
        echo '<span class="coneblog-box-icon"><i class="'.$item['selected_icon']['value'].'"></i></span>';
    }
    echo '</div>';
    echo '<div class="image-container" style="background-image: url('.$item['tile_bg_image']['url'].')">';
        if ( 'yes' === $settings['show_post_count'] ) {
            echo '<div class="coneblog-box-post-count"><span>'.$post_count.' '.($post_count > 1 ? 'Posts' : 'Post').'</span></div>';
        }
        echo '<span class="tile-overlay" style="background-color: '.$item['coneblog_cat_tile_bg_color'].'"></span>';
        
    echo '</div>';
    echo '<div class="category-name">';
        echo '<a href="'.$category_url.'" class="coneblog-category-tile-link">';
            echo $item['category_title'];
        echo '</a>';
    echo '</div>';
echo '</div>';
?>