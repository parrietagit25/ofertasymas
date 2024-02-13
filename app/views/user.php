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

    

    <main class="main__content_wrapper">
        
        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <p class="account__welcome--text">Usuaios Registrados</p>
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title h3 mb-20">Usuarios</h2>
                        <ul class="account__menu">
                            <li class="account__menu--list active"><a href="">Todos</a></li>
                            <!--<li class="account__menu--list"><a href="my-account-2.html">Addresses</a></li>
                            <li class="account__menu--list"><a href="wishlist.html">Wishlist</a></li>
                            <li class="account__menu--list"><a href="login.html">Log Out</a></li>-->
                        </ul>
                    </div>
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h2 class="account__content--title h3 mb-20">Todos los Usuarios <button type="button" data-open="registroUser" class="btn btn-warning">Registrar</button></h2>

                            <!-- Modal -->
                            <div class="modal" id="registroUser" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width:500px;">
                                        <form action="" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Registrar Usuario</h5>
                                                <button type="button" data-close class="btn-close" aria-label="Cerrar"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" id="" value="">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" name="email" id="" value="">
                                                <label for="">Password</label>
                                                <input type="text" class="form-control" name="pass" id="" value="">
                                                <label for="">Tipo de usuario</label>
                                                <select name="tipo_user" class="form-control" id="">
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Usuario</option>
                                                    <option value="3">Usuario Final</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-close>Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                <input type="hidden" class="" name="registrar" valie="1">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="account__table--area">
                                <table class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th class="account__table--header__child--items">Numero </th>
                                            <th class="account__table--header__child--items">Nombre</th>
                                            <th class="account__table--header__child--items">Email</th>
                                            <th class="account__table--header__child--items">Tipo User</th>
                                            <th class="account__table--header__child--items">Acciones</th>	 	 	 	
                                        </tr>
                                    </thead>
                                    <tbody class="account__table--body mobile__none">
                                        <?php if (!empty($data['users'])): ?>
                                            <?php foreach ($data['users'] as $user): ?>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items"><?php echo htmlspecialchars($user->id); ?></td>
                                                    <td class="account__table--body__child--items"><?php echo htmlspecialchars($user->nombre); ?></td>
                                                    <td class="account__table--body__child--items"><?php echo htmlspecialchars($user->email); ?></td>
                                                    <td class="account__table--body__child--items"><?php echo htmlspecialchars($user->tipo_user); ?></td>
                                                    <td class="account__table--body__child--items">
                                                        <button type="button" data-open="editUserModal<?php echo htmlspecialchars($user->id); ?>" class="btn btn-warning">Editar</button>
                                                        <button type="button" data-open="elimUserModal<?php echo htmlspecialchars($user->id); ?>" class="btn btn-danger">Eliminar</button>
                                                    </td>
                                                </tr>

                                                <div class="modal" id="editUserModal<?php echo htmlspecialchars($user->id); ?>" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="width:500px;">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Editar Usuario</h5>
                                                                    <button type="button" data-close class="btn-close" aria-label="Cerrar"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label for="">Nombre</label>
                                                                    <input type="text" class="form-control" name="nombre" id="" value="<?php echo htmlspecialchars($user->nombre); ?>">
                                                                    <label for="">Email</label>
                                                                    <input type="text" class="form-control" name="email" id="" value="<?php echo htmlspecialchars($user->email); ?>">
                                                                    <label for="">Tipo de usuario</label>
                                                                    <select name="tipo_user" class="form-control" id="">
                                                                        <option value="">Seleccionar</option>
                                                                        <option value="<?php echo htmlspecialchars($user->tipo_user); ?>"><?php echo htmlspecialchars($user->tipo_user); ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-close>Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                                    <input type="hidden" class="" name="actualizar" value="<?php echo htmlspecialchars($user->id); ?>">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal" id="elimUserModal<?php echo htmlspecialchars($user->id); ?>" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="width:500px;">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Eliminar Usuario</h5>
                                                                    <button type="button" data-close class="btn-close" aria-label="Cerrar"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Esta seguro que desea eliminar el usuario <?php echo htmlspecialchars($user->nombre); ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-close>Cerrar</button>
                                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                    <input type="hidden" class="" name="eliminar" value="<?php echo htmlspecialchars($user->id); ?>">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <p>No se encontraron usuarios.</p>
                                        <?php endif; ?>
                                    </tbody>
                                    <tbody class="account__table--body mobile__block">
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                        <tr class="account__table--body__child">
                                            <td class="account__table--body__child--items">
                                                <strong>Order</strong>
                                                <span>#2014</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Date</strong>
                                                <span>November 24, 2022</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Payment Status</strong>
                                                <span>Paid</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Fulfillment Status</strong>
                                                <span>Unfulfilled</span>
                                            </td>
                                            <td class="account__table--body__child--items">
                                                <strong>Total</strong>
                                                <span>$40.00 USD</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- my account section end -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3 section--padding pt-0">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping1.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping2.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping3.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping4.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Support</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->

    </main>

<!-- Start footer section -->
<?php include_once __DIR__ . '/recurrentes/pie.php'; ?>
<!-- End footer section -->
<!-- Scroll top bar -->
<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
<?php include_once __DIR__ . '/recurrentes/footer.php'; ?>