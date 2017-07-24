<?php 
/* Template Name: Blog Posts*/
?>
<?php get_header(); ?>
    <body class="bg-gray-1">
        <div class="col-xs-12 Pad0">
            <!-- Top Navigation -->
<?php  
$args = array(
'post_type' => 'menu',
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>             
            <div class="col-xs-12 Pad0 bg-blue menu-stripe" style="">
            </div>
            <style type="text/css">
                .form-control {
    padding-right: 30px;
}

.form-control + .glyphicon {
    position: absolute;
    right: 0;
}
            </style>
<?php 
}
}
wp_reset_postdata();
?>
            <!-- Top content -->
            <div class="Pad0 col-xs-12" style="position: relative;background: #e6e6e6; ">
                <div class="container Pad0" style="position: relative;">
                    <div class="Pad0 col-xs-12 col-sm-6 col-md-8 mTop35 mBot35" style="z-index: 1;">
                        <div class="Pad0 col-xs-12" style="z-index: 1;">
                        <h3 class="istok-b mTop35">Titulo blog-Titulo blog-Titulo blog</h3><br>
                        <h4>  <span style="font-size: 15px;"><i class="fa fa-clock-o" aria-hidden="true" style="color: red;"></i></span> 27 de septiembre</h4><br>
                        <center><div style="width: 90%;background: rgba(128, 128, 128, 0.15); height: 1px;"></div></center>
<?php  
$args = array(
'post_type' => 'post',
'posts_per_page' => 2
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?> 
                            <div class="col-xs-12 col-sm-12 col-md-6 mTop20 mBot20" style="z-index: 1;">

                                <div class="col-xs-12 Pad15">
                                    <div class=" col-xs-12" style="height: 300px;position: relative;background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                                    </div>
                                </div>
                                <div class="col-xs-12 Pad0 mTop35">
                                    <div class="blog-info istok">
                                        <?php echo the_excerpt() ?>
                                    </div>
                                </div>
                                <div class="col-xs-12 Pad0 mTop35">
                                    <a href="<?php the_permalink(); ?>" class=" btn-red-flat bg-red      text-white text-center istok-b let-sp-0 upper" style="border-radius: 25px;height: 47px;line-height: 47px; margin: 0 auto; font-size: 20px; background: #d7272f;">LEER M&aacute;s</a>
                                </div>
                            </div>
<?php 
}
}
wp_reset_postdata();
?>                            


                        </div>
                        <div class="Pad0 text-red text-center col-xs-12 mTop35 mBot35 PadTop20" style="z-index: 1; border-top: 1px solid #b5b4b4;">
                            <!--Paginación-->
                             <?php wp_pagenavi(); ?>
                        </div>
                    </div>
                    <div class=" col-xs-12 col-sm-6 col-md-4 mTop35 mBot35 sidebar" style="z-index: 1;">
                        <div class="col-xs-12 mTop20 Pad15">
                            <div id="sb-search-parent" class="col-xs-12 Pad0" style="background: rgba(255,255,255, .2); border-radius: 13px;">
                                <div id="sb-search" class="sb-search">
                                    <form role="search" method="get" action="<?php echo home_url( '/' ); ?>"    >
                                        <input class="sb-search-input form-control" placeholder="Que buscas" type="search" value="" name="s" id="s" style="border-radius: 8px;">
                                        <input class="sb-search-submit" type="submit" value="" style="display:none;">
                                        <span class="glyphicon glyphicon-search form-control-feedback" style="color:#ED2324;"></span>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-xs-12 mTop10 mBot20 Pad15">
                            <p class="blog-info istok">Categor&iacute;a</p>
                            <ul class="blog-info istok">
                                <li><a href="#" class="blog-info istok link-red" style="text-decoration: none;">2016</a>
                                    <ul>
                                        <li><a href="#" class="blog-info istok link-red" style="text-decoration: none;">enero</a></li>
                                        <li><a href="#" class="blog-info istok link-red" style="text-decoration: none;">febrero</a></li>
                                        <li><a href="#" class="blog-info istok link-red" style="text-decoration: none;">marzo</a></li>
                                        <li><a href="#" class="blog-info istok link-red" style="text-decoration: none;">abril</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="blog-info istok link-red" style="text-decoration: none;">2016</a></li>
                            </ul>
                        </div>-->
                        <div class="col-xs-12 mBot20 Pad15">
                                 <p class="blog-info istok-b">Categoria</p><br>
                                 <p class="blog-info istok" style="font-size: 15px;">2016</p>
                                  <p class="blog-info istok" style="font-size: 15px;"><ul style="margin-left: 20px;">
                                      <li>enero</li>
                                      <li>febrero</li>
                                      <li>marzo</li>
                                      <li>abril</li>
                                  </ul></p>
                                   <p class="blog-info istok" style="font-size: 15px;"><br>2015</p><br>

                            <p class="blog-info istok-b">Recientes</p>
<?php  
$args = array(
'post_type' => 'post',
'orderby' => 'rand',
//'order' => 'ASC',
'posts_per_page'  => 3
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?> 

                            <div class="col-xs-12 Pad0 recents-img mTop20">
                                <div class="col-xs-3 Pad0">
                                    <div class="recents-img col-xs-12 Pad0" style="height: auto;">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="display: block; max-width: 100%; height: auto; max-height: 75px; margin: 0 auto; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                                        <a style="display: inline-block;" href="<?php the_permalink(); ?>" class="col-xs-12 Pad0 text-center hidden-sm hidden-md hidden-lg text-blue link-red istok">ver más</a>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <div class="blog-info istok" style="font-size: 11px; line-height: 12px;">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a style="display: inline-block;" href="<?php the_permalink(); ?>" class="hidden-xs text-blue link-red istok">ver más</a>
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
            <!-- Top content -->
        </div>

<?php get_footer(); ?> 