<?php include_once __DIR__ . '/recurrentes/head.php'; ?>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>	

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
<?php include_once __DIR__ . '/recurrentes/menu.php'; ?>
    <!-- End header area -->

    <main class="main__content_wrapper">

        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-1 row-cols-1">
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Ofertas</h2>
                                        <p class="account__login--header__desc"></p>
                                    </div>
                                    <div class="account__login--inner">
                                        <h3>Cambiar Slider</h3>
                                        <?php if (!empty($data['ofertas_slider'])): ?>
                                            <?php foreach ($data['ofertas_slider'] as $slider): ?>
                                                
                                                <button type="button" data-open="editStyleModal<?php echo htmlspecialchars($slider->id); ?>" class="btn btn-warning"><?php echo htmlspecialchars($slider->titulo); ?></button> <br>

                                                <div class="modal" id="editStyleModal<?php echo htmlspecialchars($slider->id); ?>" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="width:500px;">
                                                            <form action="" method="post" enctype="multipart/form-data">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Cambiar Imagenn</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label for="">Imagen actual</label>
                                                                    <img width="400" height="300" src="<?php echo htmlspecialchars($slider->image_rute); ?>">
                                                                    <label for="">Cargar nueva imagen</label> <small style="color:red;">La imagen debe tener las siguientes dimenciones 1920x766</small>
                                                                    <input type="file" name="image_rute_frond" id="" class="form-control">
                                                                    <label for="">Titulo</label>
                                                                    <input type="text" class="form-control" name="titulo" id="" value="<?php echo htmlspecialchars($slider->titulo); ?>">
                                                                    <label for="">Descripcion 1</label>
                                                                    <input type="text" class="form-control" name="descripcion" id="" value="<?php echo htmlspecialchars($slider->descripcion); ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="actualizar_slider" value="<?php echo htmlspecialchars($slider->id); ?>">
                                                                    <button type="button" class="btn btn-secondary" data-close>Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <p>No se encontraron usuarios.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div>
        <!-- End login section  -->
    </main>

<!-- Start footer section -->
<?php include_once __DIR__ . '/recurrentes/pie.php'; ?>
<!-- End footer section -->
<!-- Scroll top bar -->
<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
<?php include_once __DIR__ . '/recurrentes/footer.php'; ?>