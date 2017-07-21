<?php get_header(); ?>
<?php
$iden = get_the_ID();
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'politica-de-calidad') !== false) {
    $size = '8';
    $visible = 'hide';
} else {
    $size = '4';
    $visible = 'vista';
}

if ($iden == "95") {
    $size = '8';
    $visible = 'hide';
    $muestra = "display:block;";
} else {
    $size = '4';
    $visible = 'vista';
    $muestra = "display:none;";
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
    .marca{
        background-color: #FFFFFF;
        padding: 100px 50px 50px 50px;
        min-height: 300px;

    }
    .pFull100{
        padding: 100px;
    }
    hr{
        height: 1px !important;
        background-color: #8e8e8e;
    }
    ul{
        padding-left: 20px;

    }
    .mTop70 {
        padding-top:  70px;
    }
    .mLeft30 {
        padding-left: 50px;
    }
    .minHt {
        min-height: 420px !important;
    }

@media (min-width: 992px){
    
    .marca{
        background-color: #FFFFFF;
        padding: 100px 50px 50px 50px;
        min-height: 500px;

    }

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
            <div class="col-xs-12 Pad0 bg-gray-2" id="us">
                <div class="text-left container-fluid Pad0" style="z-index: 1;">
                    <div class="col-xs-12 col-sm-4 col-md-4 marca">
                    
                        <div class="serv_content istok-b text-red" style="font-size: 26px;">
<?php the_field('izquierda'); ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-<?php echo $size ?> col-md-<?php echo $size ?>; mBot35 mTop100 <?php echo $visible; ?>">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905;">
<?php the_field('centro'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 mBot35 mTop100 <?php echo $visible; ?>">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905;">
<?php the_field('derecha'); ?>
                        </div>
                    </div> 


                    <div class="col-xs-12 col-sm-8 col-md-8 mTop35 animateme" style="z-index: 1; " data-from="0.75" data-to="0" data-opacity="0" data-translatex="400" id="parent-certs">
                    <div class="container" style="z-index: 1;">
                        <div id="owl-carousel-certifications" class="owl-carousel owl-theme">
<?php  
$args = array(
'post_type' => 'slider_certs',
//'orderby' => 'name',
//'order' => 'ASC',
'posts_per_page'    => -1
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>
                            <div class="item" style="min-height: 100px; max-width: 255px; margin: 0 auto;">
                                <div class="col-xs-12 Pad10 text-white item-content" style="">
                                    <img class="image" src="<?php echo the_field('imagen') ?>" alt="" style="width: 100%; height: auto;">
                                </div>
                            </div>
<?php 
}
}
wp_reset_postdata();
?>

                        </div>
                    </div>
                </div>                
             </div>                 

            <!-- nosotros -->
        </div>
<?php endwhile; endif; ?> 
<?php get_footer(); ?>        