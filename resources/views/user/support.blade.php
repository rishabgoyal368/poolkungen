@extends('user.layouts.app')

@section('content')


<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="expert-content text-center">
                    <h1> Kundservice </h1>
                    <p> Klicka dig fram till ditt svar via kategorierna nedan eller sök bland våra vanligaste frågor
                        i
                        sökfältet. Hittar du inte svaret på din fråga? Ingen fara, vi finns redo att hjälpa dig via
                        telefon eller mejl. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space_b">
    <article>
        <div class="main_content">
            <div class="section_wrapper">
                <div class="faq_wrapper clearfix">
                    <div class="container">
                        <div class="faq_search container">
                            <div class="input_close">
                                <span class="input_clearer" data-bind="faqSearchClear" style="display: none"></span>
                                <input type="text" placeholder="Sök bland våra frågor...">
                            </div>
                            <a class="button">
                                <span class="ss-loader">
                                    <span class="normal">Sök</span>
                                    <span class="worker"><i class="fa fa-spinner fa-spin"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>


                    <div class="container">
                        <div class="faq_categories">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="img_sec">
                                        <a href="javascript:;">
                                            <img src="images/question-mark.jpg" alt="">
                                            Kontakta kundservice
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="img_sec">
                                        <a href="javacsript:;">
                                            <img src="images/pool-faq.jpg" alt="Pool FAQ">
                                            Vanliga frågor om pool
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="img_sec">
                                        <a href="javascript:;">
                                            <img src="images/pool-faq.jpg" alt="Spabad FAQ">
                                            Vanliga frågor om spabad
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="img_sec">
                                        <a href="javascript:;">
                                            <img src="images/instruktionsvideos.jpg" alt="Instruktionsvideos pool och spabad">
                                            Instruktionsvideos
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="container">
                            <div class="faq_entries">
                                <h2>Vanliga frågor</h2>
                                <div id="accordion" class="accordion">
                                    <div class="card mb-0 faq_entry">
                                        <div class="card-header collapsed question" data-toggle="collapse" href="#collapseOne">
                                            <a class="card-title">
                                                Vad skall jag tänka på när
                                                jag
                                                väljer poolstorlek?
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="card-body collapse answer" data-parent="#accordion">
                                            <p>Innan du ska bygga pool kan det vara bra att fundera på vad du ska ha
                                                poolen
                                                till:</p>
                                            <ul class="list">
                                                <li>Ska du motionssimma eller bara svalka dig varma sommardagar?</li>
                                                <li>Hur många ska få plats i poolen samtidigt?</li>
                                                <li>Hur bred pool du får plats med. Poolens bredd påverkar poolens
                                                    badyta
                                                    allra mest.</li>
                                            </ul>
                                            <p>Standarddjupet i våra pooler är 1,50 m vilket ger ett perfekt baddjup på
                                                ca
                                                1,40 m.</p>
                                            <h2>Specialmått</h2>
                                            <p>Vår runda, ovala och åttaformade pool kan även som standard fås med
                                                pooldjup
                                                1,20m om så önskas.&nbsp;På Poolkungen arbetar vi även med alla typer av
                                                specialbeställda djup och storlekar om så önskas.</p>


                                            <div class="link_hd">
                                                <span class="lankar_hd">Länkar</span>
                                                <p><a href="javascript:;">Köpguide</a></p>
                                            </div>


                                            <div class="follow_up">
                                                <span class="h5">Fick du svar på din fråga?</span>
                                                <p class="m-0">
                                                    <a href="javascript:;" class="btn fq-inner_btn">Ja</a>
                                                    <!----><a href="javascript:;" class="btn fq-inner_btn">Nej - ta
                                                        kontakt</a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card mb-0 faq_entry">
                                        <div class="card-header collapsed question" data-toggle="collapse" href="#collapseTwo">
                                            <a class="card-title">
                                                Vad skall jag tänka på när
                                                jag
                                                väljer poolstorlek?
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="card-body collapse answer" data-parent="#accordion">
                                            <p>Innan du ska bygga pool kan det vara bra att fundera på vad du ska ha
                                                poolen
                                                till:</p>
                                            <ul class="list">
                                                <li>Ska du motionssimma eller bara svalka dig varma sommardagar?</li>
                                                <li>Hur många ska få plats i poolen samtidigt?</li>
                                                <li>Hur bred pool du får plats med. Poolens bredd påverkar poolens
                                                    badyta
                                                    allra mest.</li>
                                            </ul>
                                            <p>Standarddjupet i våra pooler är 1,50 m vilket ger ett perfekt baddjup på
                                                ca
                                                1,40 m.</p>
                                            <h2>Specialmått</h2>
                                            <p>Vår runda, ovala och åttaformade pool kan även som standard fås med
                                                pooldjup
                                                1,20m om så önskas.&nbsp;På Poolkungen arbetar vi även med alla typer av
                                                specialbeställda djup och storlekar om så önskas.</p>


                                            <div class="link_hd">
                                                <span class="lankar_hd">Länkar</span>
                                                <p><a href="javascript:;">Köpguide</a></p>
                                            </div>


                                            <div class="follow_up">
                                                <span class="h5">Fick du svar på din fråga?</span>
                                                <p class="m-0">
                                                    <a href="javascript:;" class="btn fq-inner_btn">Ja</a>
                                                    <!----><a href="javascript:;" class="btn fq-inner_btn">Nej - ta
                                                        kontakt</a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card mb-0 faq_entry">
                                        <div class="card-header collapsed question" data-toggle="collapse" href="#collapseThree">
                                            <a class="card-title">
                                                Vad skall jag tänka på när
                                                jag
                                                väljer poolstorlek?
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="card-body collapse answer" data-parent="#accordion">
                                            <p>Innan du ska bygga pool kan det vara bra att fundera på vad du ska ha
                                                poolen
                                                till:</p>
                                            <ul class="list">
                                                <li>Ska du motionssimma eller bara svalka dig varma sommardagar?</li>
                                                <li>Hur många ska få plats i poolen samtidigt?</li>
                                                <li>Hur bred pool du får plats med. Poolens bredd påverkar poolens
                                                    badyta
                                                    allra mest.</li>
                                            </ul>
                                            <p>Standarddjupet i våra pooler är 1,50 m vilket ger ett perfekt baddjup på
                                                ca
                                                1,40 m.</p>
                                            <h2>Specialmått</h2>
                                            <p>Vår runda, ovala och åttaformade pool kan även som standard fås med
                                                pooldjup
                                                1,20m om så önskas.&nbsp;På Poolkungen arbetar vi även med alla typer av
                                                specialbeställda djup och storlekar om så önskas.</p>


                                            <div class="link_hd">
                                                <span class="lankar_hd">Länkar</span>
                                                <p><a href="javascript:;">Köpguide</a></p>
                                            </div>


                                            <div class="follow_up">
                                                <span class="h5">Fick du svar på din fråga?</span>
                                                <p class="m-0">
                                                    <a href="javascript:;" class="btn fq-inner_btn">Ja</a>
                                                    <!----><a href="javascript:;" class="btn fq-inner_btn">Nej - ta
                                                        kontakt</a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>











                    </div>
                    <!--<p>Klicka dig fram till ditt svar via kategorierna nedan eller s&ouml;k bland v&aring;ra vanligaste fr&aring;gor i s&ouml;kf&auml;ltet. Hittar du inte svaret p&aring; din fr&aring;ga? Ingen fara, vi finns redo att hj&auml;lpa dig via telefon eller mejl.</p>-->
                </div>
            </div>
        </div>

    </article>
</section>

@endsection()