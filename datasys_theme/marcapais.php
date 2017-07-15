<?php get_header(); ?>
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
        padding: 100px;

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
                <div class="text-left container-fluid Pad0" style="z-index: 1;">
                    <div class="col-xs-12 col-sm-4 col-md-4 marca">
                    
                        <div class="serv_content istok-b text-red" style="font-size: 26px;">
<?php the_field('izquierda'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 mBot35 mTop70 mLeft30">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905;">
<?php the_field('centro'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 mBot35 hide">
                        <div class="serv_content istok" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905;">
<?php the_field('derecha'); ?>
                        </div>
                    </div>                    
                </div>
            </div>
            <!-- nosotros -->
        </div>
<?php endwhile; endif; ?> 
<?php get_footer(); ?>        