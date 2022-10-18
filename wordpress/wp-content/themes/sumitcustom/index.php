<?php
get_header();
wp_list_pages();
echo "<pre>";
print_r(get_post_meta(2,'Currently Reading', true));
if(have_posts()):
    while(have_posts()):
      the_post();
       echo "<br>";
       echo "<b font='20'>Title</b>: ".get_the_title();
       echo "<br>";
       echo "<b font='20'>Content</b>: ".get_the_content('Read More', false);
       echo "<br>";
       echo "<b font='20'>Excerpt</b>: ".get_the_excerpt();
       echo "<br>";
       echo "<b font='20'>Tags</b>: ";
       $tags = get_the_tags();
       if(!empty($tags)){
            foreach($tags as $value){
                    echo $value->name.',';
            }
        }else{
            echo "No tags found.!".get_permalink();
        }
       echo "<br>";
       echo "<b font='20'>Categories</b>: ";
       $cat = get_the_category();
       if(!empty($cat)){
            foreach($cat as $value){
                    echo $value->name.',';
            }
        }else{
            echo "No Category found.!";
        }
       echo "<br>";
       echo "<b font='20'>Contact</b>: ".get_post_meta(get_the_ID(),'Contact', true);
       echo "<br>";
       echo "<b font='20'>Today's Mood</b>: ".get_post_meta(get_the_ID(),'Today\'s Mood', true);    
       echo "<br>";
       echo "=======================================";
    endwhile;
endif;
get_footer();