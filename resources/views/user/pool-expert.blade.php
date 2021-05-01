<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title> Inspisration </title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

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

                    <button class="navbar-toggler navbar-light float-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-list-link m-auto">
                            <li class="nav-item">


                                <a class="nav-link" href="javascript:;">HEM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">VÅRAPOOLER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">KUNDSERVICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">OM POOLFABRIKEN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">POOLGUIDEN</a>
                            </li>
                        </ul>
                        <ul class="icon-head d-flex align-items-center mb-0">
                            <li>
                                <a href="javascript:;"> <i class="far fa-search"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:;"> <i class="far fa-user"></i> </a>
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

    <div class="breadcrumb m-0 inner-page_breadcrumb">
        <nav class="navbar">
            <ul class="d-flex">
                <li> <a href="javascript:;">Hem </a> </li>
                <li> <a href="javascript:;">Vårapooler </a> </li>
                <li> <a href="javascript:;">Designa din egenpoo </a> </li>
            </ul>
        </nav>
    </div>

    <section class="expert-banner-outer">
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="expert-content text-center">
                            <h1>Prata med en poolexpert</h1>
                            <p>Har du frågor och tankar kring ditt poolprojekt, eller vill du ha offert på
                                din drömpool? Boka en tid så hjälper en av våra experter dig.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space_t section-space_b">
        <div class="already_customer">
            <div class="container">
                <form class="dummy">
                    <div class="expert_form">
                        <div class="row  w-50 mx-auto">
                            <div class="col-12">
                                <label class="validator-invalid">
                                    Namn
                                    <span class="fieldSymbol"></span>
                                    <input type="text" data-bind="tbBookingName">
                                </label>
                            </div>

                            <div class="col-12">
                                <label class="validator-invalid">
                                    Namn
                                    <span class="fieldSymbol"></span>
                                    <input type="text" data-bind="tbBookingName">
                                </label>
                            </div>

                            <div class="col-6">
                                <form> 
                                <div class="radio_check">
                                    <label class="form-check-label">Jag är intresserad av<span class="fieldSymbol"></span></label>
                                    <p>
                                        <label class="form-check-label radio"><input type="radio"class="form-check-input" name="optradio"> Pool</label><br>
                                        <label class="form-check-label radio"><input type="radio" class="form-check-input" name="optradio"> Spabad</label>
                                    </p>
                                  </div>
                           
                                </form>
                            </div> 
                            <div class="col-6">
                            <form>
                                <div class="radio_check">
                                    <label class="form-check-label">Form av möte<span class="fieldSymbol"></span></label>
                                    <p>
                                        <label class="form-check-label radio" ><input type="radio" name="optradio"class="form-check-input"> Över telefon</label>
                                    </p>
                                  </div>
                                </form>
                               
                            </div>
                            <div class="col-12">
                                <label class="validator-invalid">
                                    Namn
                                    <span class="fieldSymbol"></span>
                                    <input type="text" data-bind="tbBookingName">
                                </label>
                            </div>
                            <div class="col-12">
                                <div class="calender">
                                    <img src="images/calender.png" alt="" class="w-100">
                                </div>
                                </div>

                                <div class="col-12 mt20">
                                    <label class="validator-neutral">
                                        Vilken tid passar dig?
                                        <span class="fieldSymbol"></span>
                                        <div data-bind="lblBookingTime">
                                            <select>
                                                <option value="">Välj datum ovan...</option>
                                                <option value=""> Option 1 </option>
                                                <option value=""> Option 2</option>
                                                <option value="" hidden=""> Option 3</option>
                                            </select>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="validator-neutral">
                                        Vad vill du prata om?
                                        <span class="fieldSymbol"></span>
                                        <textarea data-bind="tbBookingDescription"></textarea>
                                    </label>
                                </div>
                                <div class="col-12">
                                <div class="common_btn">
                                    <a href="javascript:;" class=""> Boka möte med en poolexpert </a>
                                </div>
</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="foot-logo">
                            <h4> <a href="javascript:;" class="text-white"> Kontakt </a> </h4>
                            <ul class="footer-ul">
                                <li> Telefon </li>
                                <li> 02–381063 </li>
                                <li> (mån-fre10.00-17.00) </li>
                                <li> E-post </li>
                                <li> <a href="javascript:;" class="text-white"> kundservice@poolfabriken.se </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="foot-logo">
                            <h4> <a href="javascript:;" class="text-white"> Produkter </a> </h4>
                            <ul class="footer-ul">
                                <li> <a href="javascript:;"> LuleåPool </a></li>
                                <li> <a href="javascript:;"> KirunaPool </a></li>
                                <li> <a href="javascript:;"> UmeåPool </a></li>
                                <li> <a href="javascript:;"> PiteåPool </a></li>
                                <li> <a href="javascript:;"> SkellefteåPool </a></li>
                                <li> <a href="javascript:;"> ÖstersundPool </a></li>
                                <li> <a href="javascript:;"> ÖrnsköldsvikPool </a></li>
                                <li> <a href="javascript:;"> BodenPool </a></li>
                                <li> <a href="javascript:;"> ArvidsjaurPool </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="foot-logo">
                            <h4> <a href="javascript:;" class="text-white"> Vierbjuder </a> </h4>
                            <ul class="footer-ul">
                                <li> <a href="javascript:;"> FrifraktinomSverige </a></li>
                                <li> <a href="javascript:;"> Kortaleveranstider </a></li>
                                <li> <a href="javascript:;"> Komplettaprodukter–alltsombehövsföljermed </a></li>
                                <li> <a href="javascript:;"> Enkelbeställningonline </a></li>
                            </ul>
                            <ul class="footer-ul">
                                <li> <a href="javascript:;"> Tryggochsäkerbetalningviafaktura,kortellerdelbetalning
                                    </a>
                                </li>
                                <li> <a href="javascript:;"> Bolagsinformation </a></li>
                                <li> <a href="javascript:;"> SvenskaPoolfabrikeniLuleåAB </a></li>
                                <li> <a href="javascript:;"> Organisationsnummer556897-2607 </a></li>
                                <li> <a href="javascript:;"> F-skattochmomsregistrerade </a></li>
                            </ul>
                            <ul class="footer-ul">
                                <li> <a href="javascript:;"> MerinformationomPoolfabriken </a></li>
                                <li> <a href="javascript:;"> Sökjobbhososs! </a></li>
                                <li> <a href="javascript:;"> Besökvårblogg </a></li>
                            </ul>

                        </div>
                    </div>



                    <div class="col-sm-2">
                        <div class="foot-logo">
                            <h4> <a href="javascript:;" class="text-white"> Tryggabetalningar </a> </h4>
                            <ul class="footer-ul">
                                <li> <a href="javascript:;"> Hosossbetalarnimed </a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-sm-2 footer-margin_col">
                        <div class="foot-logo">
                            <h4> <a href="javascript:;" class="text-white"> Följoss </a> </h4>
                        </div>
                        <div class="foot-input_div">
                            <ul class="footer-ul">
                                <li> <a href="javascript:;"> Nyheter,erbjudandenochinspiration </a></li>
                            </ul>
                            <form>
                                <input type="email" placeholder="Angee-postadress" class="footer_input">
                                <a href="javascript:;" class="foot-black_btn"> Skicka </a>
                            </form>
                            <div class="social-footer_icons">
                                <a href="javascript:;"><i class="fab fa-facebook-square"></i> </a>
                                <a href="javascript:;"> <i class="fab fa-twitter-square"></i> </a>
                                <a href="javascript:;"> <i class="fab fa-whatsapp-square"></i> </a>
                                <a href="javascript:;"> <i class="fab fa-youtube"></i> </a>
                                <a href="javascript:;"> <i class="fab fa-google-plus-square"></i> </a>
                                <a href="javascript:;"> <i class="fab fa-instagram"></i></a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="copyright-footer">
                <h2> Svenska Poolfabriken </h2>
                <p> Copyright &copy; 2021 PoolKungen AB Allrights reserved. Produced by Avabrava </p>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>