<?php

namespace AnythingMachine;

//"Meta boxes" appear in the add new and edit post admin pages.
class MetaboxPathway{
    
    public function __construct() {
        //die('MetaboxPathway');
        add_action( 'add_meta_boxes_idea', array($this, 'doAddMetaBox') );
    }
    
    public function doAddMetaBox(){
        add_meta_box('pathway-meta-box', __( 'Pathways'),array( $this,'echoPathwaySelector'), 'Idea', 'side', 'high');
        
    }
    
    public function echoPathwaySelector(){
        global $post;
        $this_post_id= $post->ID;
        $output = "<input type = 'hidden' value = '$this_post_id' name = 'postID' id = 'postID' />";
        
        $args=array(
            'post_type' => 'pathway'
        );
        
        $childpages = new \WP_Query($args);
        //die('MetaboxPathway');
        if($childpages->post_count > 0) { /* display the children content  */
            $count = 1;
            while ($childpages->have_posts()) {
                $childpages->the_post();
                $title =  get_the_title();
                $output = $output . <<<OUTPUT
				<input type="checkbox" id="pathway_$count" name="pathway_$count" > $title<br />
OUTPUT;
                $count = $count + 1;
            }
        }
        echo $output;
        wp_reset_query();
        
    }
}