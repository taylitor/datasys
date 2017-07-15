<?php 
/* Template Name: Empleo*/
?>
<?php get_header() ?>

            <!-- Top Navigation -->
            <!-- Top content -->
            <div class="Pad0 col-xs-12 row-eq-height" style="position: relative;">
                <div class="Pad0 col-xs-12 col-sm-6 col-md-7 bg-blue" style="">
                    <div class="Pad0 col-xs-12 item-100vh auto-height bg-black-after vertical-align parallax" style="position: relative;background: url(assets/img/bg-contacto.png) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        <div data-depth="0.6" class="layer">
                            <div id="particles-js"></div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="position: relative;z-index: 1;">
                            <h1 class="text-left text-white istok-b let-sp-0" style="font-size: 25px;">
                                Empleo
                            </h1>
                            <h1 class="mTop10 contact-info text-left text-white istok-b let-sp-0" style="">
                                &Uacute;nete a nuestro equipo
                            </h1>
                            <div class="orange_line text-center mTop10" style="height: 6px; width: 80px; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
                <div class="Pad0 col-xs-12 col-sm-6 col-md-5" style="background: #e6e6e6;position: relative;">
                    <div class="Pad0 col-xs-12 item-100vh" style="background: #e6e6e6;position: relative; display: inline-table;">
                        <div class="col-xs-12 text-center mTop35" style="z-index: 1;">
                            <h1 class="istok-b text-gray-1 let-sp-0" style="font-size: 30px;">Formulario de empleo</h1>
                        </div>
                        <div class="Pad0 col-xs-12 col-sm-10 col-sm-offset-1 mTop20 bg-white bg-white mBot35" style="z-index: 1;">
                            <div class="container-form">
                            <?php echo do_shortcode('[contact-form-7 id="245" title="Empleo"]'); ?>
                                <!--<form>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="nombre" name="nombre"/>
                                        <label for="nombre" class="control-label">Nombre*</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="apellidos" name="apellidos"/>
                                        <label for="apellidos" class="control-label">Apellidos*</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="email" name="email"/>
                                        <label for="email" class="control-label">Correo*</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="telefono" name="telefono"/>
                                        <label for="telefono" class="control-label">Tel</label><i class="bar"></i>
                                    </div>
                                    <div class="form-group-mdb">
                                        <input type="text" required="required" id="puesto" name="puesto"/>
                                        <label for="puesto" class="control-label">Puesto para el que aplica</label><i class="bar"></i>
                                    </div>
                                    <div style="    position: relative; margin-top: 50px; margin-bottom: 50px;">
                                        <div class="box">
                                            <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="cv-file[]" id="cv-file" class="inputfile inputfile-1" data-multiple-caption="{count} Imagen seleccionada" />
                                            <label class="" for="cv-file" style="width: 100%;line-height: 40px;">
                                                <span class="istok-b">Cargar curriculum</span>
                                                <i class="fa fa-upload pull-right" style="line-height: 35px; margin-top: 2px; padding-left: 8px; border-left: 1px solid rgba(250, 166, 26, 1); font-size: 25px"></i>
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
<?php get_footer(); ?>