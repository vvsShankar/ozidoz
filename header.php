
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Ozidoz</title>
    <?php wp_head(); ?>
    
</head>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
            
                    <img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"/>
                   
            </div>  <!-- END OF LEFT SIDE -->

            <div class="navbar col-md-8">
                <?php wp_nav_menu(array('theme_location'=>'Primary'));
                ?>
                </div> <!-- end of right side -->
            </div>
        </div> <!-- end of row-->
    </div><!-- end of container -->


        <?php 
            if(is_front_page()):
                $ozidoz_classes = array('ozidoz-home');
            else:
                $ozidoz_classes = array('not-home');
            endif;
        ?>

   <body <?php body_class( $ozidoz_classes ); ?>>
