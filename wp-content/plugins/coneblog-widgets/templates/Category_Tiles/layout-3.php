<?php
echo '<div class="coneblog-category-list box-' . $item['_id'] . '">';

    echo '<div class="icon-container">';
    if($item['selected_icon']['value']) {
        echo '<span class="coneblog-catlist-icon"><i class="'.$item['selected_icon']['value'].'"></i></span>';
    }
    echo '</div>';
    echo '<div class="text-container">';
        
        echo '<h3 class="category-name">';
            echo '<a href="'.$category_url.'" class="coneblog-category-tile-link">';
                echo $item['category_title'];
            echo '</a>';
        echo '</h3>';
        if ( 'yes' === $settings['show_post_count'] ) {
            echo '<div class="coneblog-catlist-post-count"><span>'.$post_count.' '.($post_count > 1 ? 'Posts' : 'Post').'</span></div>';
        }
    echo '</div>';
    
echo '</div>';
?>