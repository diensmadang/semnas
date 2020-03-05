<?php 


/**** image button ****/

add_action('admin_enqueue_scripts', 'devfly_premium_widget_scripts');

function devfly_premium_widget_scripts(){

    wp_enqueue_media();

    wp_enqueue_script( 'devfly_premium_widget_script', get_template_directory_uri() . '/js/widget.js', false, '1.0', true );

}




class Devfly_Premium extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct() 
    {
        parent::__construct(
            'premium-widget', // Base ID
            esc_attr__( 'Devfly - Social widget', 'devfly' ), // Name
            array( 
                'description' => esc_attr__( 'Display a Premium or Feature description.', 'devfly' ),
            )
        );
    }
    
    /* *front-end widget form.
    front page view */
    public function widget( $args, $instance ){


    echo $args['before_widget'];

  ?>
    
          <h4><?php if( !empty( $instance['social_title'] ) ): echo apply_filters( 'widget_title', $instance['social_title'] ); endif; ?></h4>
          <ul class=" soci ">
              <?php if( !empty( $instance['facebook_url'] ) ){?>
            <li class="list-group-item col-md-2"><a href="<?php if( !empty( $instance['facebook_url'] ) ): echo apply_filters( 'widget_title', $instance['facebook_url'] ); endif; ?>" title="facebook"><i class="fa fa-facebook"></i></a></li>
              <?php }?>
               <?php if( !empty( $instance['twitter_url'] ) ){?>
            <li class="list-group-item col-md-2"><a href="<?php if( !empty( $instance['twitter_url'] ) ): echo apply_filters( 'widget_title', $instance['twitter_url'] ); endif; ?>" title="twitter"><i class="fa  fa-twitter"></i></a></li>
               <?php }?>
              <?php if( !empty( $instance['google_url'] ) ){?>
            <li class="list-group-item col-md-2"><a href="<?php if( !empty( $instance['google_url'] ) ): echo apply_filters( 'widget_title', $instance['google_url'] ); endif; ?>" title="google-plus"><i class="fa  fa-google-plus"></i></a> </li>
              <?php }?>
              <?php if( !empty( $instance['inst_title'] ) ){?>
            <li class="list-group-item col-md-2"><a href="<?php if( !empty( $instance['inst_title'] ) ): echo apply_filters( 'widget_title', $instance['inst_title'] ); endif; ?>" title="instagram"><i class="fa  fa-instagram"></i></a></li>
                <?php }?>
            <?php 
                    if( !empty($instance['text']) ):
                    
                        echo '<p>';
                            $wp_kses_args = array(
                                'br' => array(),
                                'em' => array(),
                                'strong' => array(),
                            );
                            echo htmlspecialchars_decode( wp_kses( apply_filters( 'widget_title', $instance['text'] ), $wp_kses_args ) );
                        echo '</p>';
                    endif;
                    ?>  
          </ul>
        

   
        <?php

        echo $args['after_widget'];

    }
    
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {

        ?>
        
         <p>
            <label for="<?php echo $this->get_field_id('social_title'); ?>"><?php esc_html_e( 'Social Title', 'devfly' ); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('social_title'); ?>"
                   id="<?php echo $this->get_field_id('social_title'); ?>" value="<?php if( !empty( $instance['social_title'] ) ): echo $instance['social_title']; endif; ?>"
                   class="widefat"/>
        </p>
        
         <p>
            <label for="<?php echo $this->get_field_id('facebook_url'); ?>"><?php esc_html_e( 'Facebook Url', 'devfly' ); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('facebook_url'); ?>"
                   id="<?php echo $this->get_field_id('facebook_url'); ?>" value="<?php if( !empty( $instance['facebook_url'] ) ): echo $instance['facebook_url']; endif; ?>"
                   class="widefat"/>
        </p>


        <p>

            <label for="<?php echo $this->get_field_id('twitter_url'); ?>"><?php esc_html_e( 'Twitter Url', 'devfly' ); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('twitter_url'); ?>"
                   id="<?php echo $this->get_field_id('twitter_url'); ?>" value="<?php if( !empty( $instance['twitter_url'] ) ): echo $instance['twitter_url']; endif; ?>"
                   class="widefat"/>

        </p>
            

        <p>

            <label for="<?php echo $this->get_field_id('google_url'); ?>"><?php esc_html_e( 'Google Url', 'devfly' ); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('google_url'); ?>"
                   id="<?php echo $this->get_field_id('google_url'); ?>" value="<?php if( !empty( $instance['google_url'] ) ): echo $instance['google_url']; endif; ?>"
                   class="widefat"/>

        </p>
        

        <p>

            <label for="<?php echo $this->get_field_id('inst_title'); ?>"><?php esc_html_e( 'Instagram Title', 'devfly' ); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('inst_title'); ?>"
                   id="<?php echo $this->get_field_id('inst_title'); ?>" value="<?php if( !empty( $instance['inst_title'] ) ): echo $instance['inst_title']; endif; ?>"
                   class="widefat"/>

        </p>
        
    <?php

    }

}
register_widget( 'Devfly_Premium' );
?>