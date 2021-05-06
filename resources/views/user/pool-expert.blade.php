@extends('user.layouts.app')

@section('content')

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
                                        <label class="form-check-label radio"><input type="radio" class="form-check-input" name="optradio"> Pool</label><br>
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
                                        <label class="form-check-label radio"><input type="radio" name="optradio" class="form-check-input"> Över telefon</label>
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

@endsection()