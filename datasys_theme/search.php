<?php get_header(); ?>

        <main class="cd-main-content">
            <!-- carousel -->
            <div class="container-fluid Pad0">
                <div class="Pad0 col-xs-12">
                    <div class="">
                        <div class="item" style=" height: 250px; width:100%; background: url(<?php echo get_template_directory_uri() ?>/assets/img/bg-blog.png) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel -->
            <!-- blog -->
            <div class="col-xs-12 Pad0 mTop10 bg-gray" style="position: relative;background: #e6e6e6; ">
            <div class="container mTop10 mBot35">


      <h1 class="search-title text-yellow Pad15 M0"> <?php echo $wp_query->found_posts; ?>
        <?php _e( '=> Resultados de busqueda para', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

        <?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>
                <div class="col-xs-12 col-sm-12 col-md-6 mTop20 mBot20" style="z-index: 1;">
                    <div class="col-xs-12 Pad0">
                        <div class="Pad0 col-xs-12" style="height: 300px;position: relative;background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        </div>
                    </div>
                    <div class="col-xs-12 Pad0 mTop35">
                        <div class="blog-info istok">
                            <?php echo the_excerpt() ?>
                        </div>
                    </div>
                    <div class="col-xs-12 Pad0 mTop35">
                        <a href="<?php the_permalink(); ?>" class="bg-red btn-red-flat text-white text-center istok-b let-sp-0 upper" style="border-radius: 0px;height: 47px;line-height: 47px; margin: 0 auto; font-size: 20px;">M&aacute;s</a>
                    </div>
                </div>
               <!--<li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php  the_post_thumbnail('small') ?>
                 <?php //echo substr(get_the_excerpt(), 0,200); ?>
                 
               </li>-->

            <?php } ?>

            </ul>

           <?php paginate_links(); ?>

        <?php } ?>

          

            </div>
            </div>
            <!-- blog -->
            <!-- footer -->
  
<?php get_footer(); ?>