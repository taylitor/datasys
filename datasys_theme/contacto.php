<?php 
/* Template Name: Contacto */
?>
<?php get_header() ?>
            <!-- Top Navigation -->
            <!-- Top content -->
            <div class="Pad0 col-xs-12 row-eq-height" style="position: relative;">
                <div class="Pad0 col-xs-12 col-sm-6 col-md-7 bg-blue" style="">
                    <div class="Pad0 col-xs-12 item-100vh auto-height bg-black-after vertical-align parallax" style="position: relative;background: url(<?php echo the_field('imagen'); ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        <div data-depth="0.6" class="layer">
                            <div id="particles-js"></div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="position: relative;z-index: 1;">
                            <h1 class="contact-info text-left text-white istok-b let-sp-0" style="">
                                <?php //echo the_field(''); ?>Permitanos ser parte del desarrollo de su empresa
                            </h1>
                            <div class="orange_line text-center mTop10" style="height: 6px; width: 80px; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                <div class="Pad0 col-xs-12 col-sm-6 col-md-5" style="background: #e6e6e6;position: relative;">
                    <div class="Pad0 col-xs-12 item-100vh" style="background: #e6e6e6;position: relative; display: inline-table;">
                        <div class="col-xs-12 text-center mTop35" style="z-index: 1;">
                            <h1 class="upper istok-b text-gray-1 let-sp-0" style="font-size: 30px;"><?php the_title(); ?></h1>
                        </div>
                        <div class="Pad0 col-xs-12 col-sm-10 col-sm-offset-1 mTop20 bg-white bg-white mBot35" style="z-index: 1;">
                            <div class="container-form">
                            <?php echo do_shortcode('[contact-form-7 id="215" title="Contacto"]'); ?>
                                <!--<form>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="nombre" name="nombre"/>
                                        <label for="nombre" class="control-label">Nombre</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="empresa" name="empresa"/>
                                        <label for="empresa" class="control-label">Empresa</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="telefono" name="telefono"/>
                                        <label for="telefono" class="control-label">Tel</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <select id="asunto" name="asunto">
                                            <option>Comentarios generales</option>
                                            <option>Oportunidad de mejora</option>
                                            <option>Cotizaci&oacute;n</option>
                                        </select>
                                        <label for="asunto" class="control-label">Asunto</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <textarea required="required" rows="3" id="comentario" name="comentario"></textarea>
                                        <label for="comentario" class="control-label">Comentario</label><i class="bar"></i>
                                    </div>
                                    <div class="checkbox hidden">
                                        <label>
                                            <input type="checkbox" checked="checked"/><i class="helper"></i>I'm the label from a checkbox
                                        </label>
                                    </div>
                                    <div class="form-radio-mdb hidden">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio" checked="checked"/><i class="helper"></i>I'm the label from a radio button
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"/><i class="helper"></i>I'm the label from a radio button
                                            </label>
                                        </div>
                                    </div>
                                    <div class="button-container">
                                        <button type="submit" class="button istok-b upper"><span>Enviar</span></button>
                                    </div>
                                </form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top content -->
        </div>
        <?php wp_enqueue_style( 'dashicons' ); ?>
<?php get_footer() ?>