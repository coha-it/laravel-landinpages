
<!-- Contact & Map starts -->
<section id="anmelden" class="half-section p-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 pl-lg-0">
                <div class="skill-box form_c_wrapper">
                    <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                        <h5> kostenlos & unverbindlich </h5>
                        <h2 class="text-initial"> Jetzt Anmelden </h2>
                        <p>  </p>
                    </div>

                    <div class="col-sm-12 p-0" id="result"></div>

                    <div class="company-contact-form">
                        <form class="contact-form-outer form_c" onsubmit="return false;" method="POST" action="{{ route('scf') }}">
                            @csrf
                            <input type="hidden" name="data[type]" id="type" value="register">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="text" placeholder="Vorname *" class="form-control" required="" id="firstname" name="data[firstname]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="text" placeholder="Nachname *" class="form-control" required="" id="lastname" name="data[lastname]">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="email" placeholder="Email *" class="form-control" required="" id="email" name="data[email]">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="tel" placeholder="Straße & Hausnummer" class="form-control" id="streetandnumber" name="data[streetandnumber]">
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="tel" placeholder="PLZ und Ort" class="form-control" id="zipandlocation" name="data[zipandlocation]">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="tel" placeholder="Telefon / Mobil" class="form-control" id="phone" name="data[phone]">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-form-textfield pb-4">
                                        <input type="tel" placeholder="Firma" class="form-control" id="company" name="data[company]">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-textfield pb-4">
                                        <textarea placeholder="Zusätzliche Nachricht" class="form-control message" id="message" name="data[message]"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-xs-25px text-lg-left text-center">
                                    <button type="submit" class="btn-setting btn-hvr-setting-main btn-primary btn-hvr text-uppercase" id="submit_btn"><i class="ti ti-reload ti-reload mr-2 d-none" aria-hidden="true"></i>
                                        <b class="font-weight-normal">
                                            Anmeldung absenden
                                        </b>
                                        <span class="btn-hvr-setting btn-hvr-black">
                                         <span class="btn-hvr-setting-inner">
                                         <span class="btn-hvr-effect"></span>
                                         <span class="btn-hvr-effect"></span>
                                         <span class="btn-hvr-effect"></span>
                                         <span class="btn-hvr-effect"></span>
                                         </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact & Map ends -->
