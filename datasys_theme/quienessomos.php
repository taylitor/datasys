<?php get_header(); ?>
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'marca-pais') !== false) {
    $size = '8';
    $visible = 'hide';
} else {
    $size = '4';
    $visible = 'vista';
}

if (strpos($url,'quienes-somos') !== false) {
    $size = '8';
    $visible = 'hide';
    $visible_nosotros = 'vista';
    $fluid = '-fluid';
    $usBg = 'somosground pFull100';
} else {
    $size = '4';
    $visible = 'vista';
    $visible_nosotros = 'hide';
}
?>
<style type="text/css">
    .hide {
        visibility: hidden;
        display: none;
    }
    .vista {
        display: block;
        visibility: visible;
    }
    .img_us { 
        height: 100%;
        width: 100%;
    }
    .somosground{
        background-color: #FFFFFF;
    }
    .pFull100{
        padding: 100px;
    }
    hr{
        height: 1px !important;
        background-color: #8e8e8e;
    }
    ul{
        padding-left: 40px;

    }

</style>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
            <!-- Top Navigation -->
            <!-- Top content -->
            <div class="Pad0 col-xs-12 row-eq-height" style="position: relative;">
                <div class="Pad0 col-xs-12 bg-blue" style="">
                    <div class="Pad0 col-xs-12 item-50vh bg-black-after vertical-align parallax" style="position: relative; background: url(<?php echo the_field('imagen'); ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        <div data-depth="0.6" class="layer">
                            <div id="particles-js"></div>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="position: relative;z-index: 1;">
                            <h1 class="mTop100 upper contact-info text-left text-white istok-b let-sp-0" style="">
                                <?php the_title(); ?>
                            </h1>
                            <div class="orange_line text-center mTop10" style="height: 6px; width: 80px; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top content -->
            <!-- nosotros -->
            <div class="col-xs-12 Pad0 bg-gray-2">
                <div class="text-left container<?php echo $fluid; ?>" style="z-index: 1; padding-left: 0px !important; padding-right: 0px !important;">
                    <div class="col-xs-12 col-sm-4 col-md-4  <?php echo $usBg; ?>">
                        <div class="serv_content istok-b text-red" style="font-size: 26px;">
<?php the_field('izquierda'); ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-<?php echo $size; ?> col-md-<?php echo $size; ?>  mTop100" style="padding-left: 50px !important; padding-right: 50px !important;">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905; ">
<?php the_field('centro'); ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 <?php echo $visible; ?>">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905; ">
<?php the_field('derecha'); ?>
                        </div>
                    </div>                    
                </div>

                <div class="text-left container<?php echo $fluid; ?> <?php echo $visible_nosotros; ?> " style="z-index: 1; padding-left: 0px !important; padding-right: 0px !important;">
                    <div class="col-xs-12 col-sm-4 col-md-4 Pad0" >
                    
                        <div class="serv_content istok-b text-red " style="font-size: 26px;">
                        <img src="<?php echo the_field('left_bottom_imagen'); ?>" class="img_us">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-<?php echo $size; ?> col-md-<?php echo $size; ?>" style="padding-left: 50px !important; padding-right: 50px !important;">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905; ">
                        <?php the_field('derecha'); ?>
                        </div>
                    </div>
                        </div>
                    </div>                    
                </div>

            </div>
            <!-- nosotros -->
        </div>
<?php endwhile; endif; ?> 
<?php get_footer(); ?> 