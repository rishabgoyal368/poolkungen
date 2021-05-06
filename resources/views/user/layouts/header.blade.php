<header>
        <div class="top-bar">
            <ul class="d-flex align-items-center mb-0">
                <li> <i class="fas fa-phone-alt"></i> 020-134255 </li>
                <li> <i class="fas fa-check"></i> ALLTIDFRIFRAKT</li>
                <li> <i class="fas fa-check"></i> PRISGARANT</li>
            </ul>
        </div>

        <nav class="navbar navbar-expand-lg nav-custom main-nav pt-0">
            <div class="container-fluid">
                <div class="nav-outer">
                    <a class="site-logo" href="javascript:;"> Svenska Poolfabriken </a>

                    <button class="navbar-toggler navbar-light float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-list-link m-auto">
                            <li class="nav-item">


                                <a class="nav-link" href="{{url('/')}}">HEM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/pool-shape')}}">VÅRAPOOLER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/support')}}">KUNDSERVICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about-us')}}">OM POOLFABRIKEN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">POOLGUIDEN</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/spabad')}}">SPABAD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/booking')}}">HAR FINNS VI</a>
                            </li>


                        </ul>
                        <ul class="icon-head d-flex align-items-center mb-0">
                            <li>
                                <a href="javascript:;"> <i class="far fa-search"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="" data-toggle="modal" data-target="#exampleModal">
                                    <i class="far fa-user"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content login-standard">
                                            <div class="modal-header border-0 p-0">
                                                <h5 class="modal-title" id="exampleModalLabel"> Logga in </h5>
                                                <button type="button" class="close" id="fancybox-close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div id="fancybox-content" class="modal-inner_body">
                                                    <div>
                                                        <div class="">
                                                            <div id="login-form" class="login_outer">
                                                                <div id="login-wrapper">
                                                                    <div class="already_customer">

                                                                        <form class="dummy">
                                                                            <div class="form">
                                                                                <div> <label> E-post
                                                                                        <input type="text" name="email" id="login-email" autocomplete="email">
                                                                                    </label>
                                                                                </div>
                                                                                <div>
                                                                                    <label> Lösenord
                                                                                        <input type="password" name="password" id="login-password">
                                                                                    </label>
                                                                                </div>
                                                                                <div class="buttons_wrapper my-3 d-flex align-items-center">
                                                                                    <a id="enter-forgot-login" class="">
                                                                                        Glömt ditt
                                                                                        lösenord? </a>
                                                                                    <a id="login-submit" class="button ml-auto login_btn">
                                                                                        <span class="normal">Logga
                                                                                            in</span> </a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer new_customer border-0">
                                                <div class="">
                                                    <h3>Ny medlem</h3>
                                                    <p> Registrera dig för att få tillgång till unika erbjudanden och de
                                                        senaste nyheterna via
                                                        e-post. </p>
                                                    <div class="buttons_wrapper common_btn">
                                                        <a class="button m-auto" href="javascript:;">Registrera
                                                            dig</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;"> <i class="fas fa-shopping-cart"></i> </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </nav>
    </header>