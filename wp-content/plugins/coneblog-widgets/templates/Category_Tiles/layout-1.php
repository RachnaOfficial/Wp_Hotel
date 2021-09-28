<?php
echo '<div class="coneblog-category-tile tile-' . $item['_id'] . '" style="background-image: url('.$item['tile_bg_image']['url'].')">';
if ( 'yes' === $settings['full_box_link'] ) {
    echo '<a href="'.$category_url.'" class="coneblog-link-overlay"></a>';
}
if ( 'yes' === $settings['show_post_count'] ) {
    echo '<div class="coneblog-post-count"><span>'.$post_count.' '.($post_count > 1 ? 'Posts' : 'Post').'</span></div>';
}
echo '<span class="tile-overlay" style="background-color: '.$item['coneblog_cat_tile_bg_color'].'"></span>';
    echo '<div class="tile-content">';
    if ( 'yes' === $settings['show_icon'] ) {
        if($item['selected_icon']['value']) {
            echo '<span class="coneblog-tile-icon"><i class="'.$item['selected_icon']['value'].'"></i></span>';
        }
    }
        echo '<a href="'.$category_url.'" class="coneblog-category-tile-link">';
            echo $item['category_title'];
        echo '</a>';
    echo '</div>';
echo '</div>';
?>