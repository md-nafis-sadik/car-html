@props([
    'marginTop' => true
])
    <footer class="oy-footer">
        <div class="container-fluid px-3 px-lg-5">
            <div class="bg-dark rounded-6 overflow-hidden">
                <!-- ==================== Subsection: Footer TOP ==================== -->
                <div class="oy-footer-top bg-dark-light">
                    <div class="container px-4">
                        <div class="row text-center text-lg-start gy-5 justify-content-between">
                            <div class="col-12 col-lg-auto">
                                <a href="/" class="img-fluid"><img src="{{ asset('assets/img/header/logo-light.svg') }}" alt=""></a>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <div class="d-flex flex-wrap gap-4">
                                    <a class="btn btn--gradient-primary" href="#">
                                        <span class="btn__text">View Fleet</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a class="btn btn--outline-light" href="#">
                                        <span class="btn__text">Get a Quote</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Subsection: Footer TOP -->


                <!-- ==================== Subsection: Footer Middle ==================== -->
                <div class="oy-footer-middle">
                    <div class="container">
                        <div class="row gy-4 accordion" id="accordionFooter">
                            <div class="col-sm-6 col-lg-3 col-xl-2">
                                <div class="footer-widget footer-widget-list d-none d-md-block">
                                    <h5 class="text-b3-semibold text-white mb-4">The Company</h5>
                                    <ul class="oy-footer__menu list-unstyled">
                                        <li><a href="{{ route('about') }}" class="oy-footer__menu-link">About Autofusion</a></li>
                                        <li><a href="{{ route('testimonials') }}" class="oy-footer__menu-link">Francise Opportunity</a></li>
                                        <li><a href="{{ route('contact') }}" class="oy-footer__menu-link">Careers</a></li>
                                    </ul>
                                    <h5 class="text-b3-semibold text-white mb-4 mt-4">Reservations</h5>
                                    <ul class="oy-footer__menu list-unstyled">
                                        <li><a href="{{ route('account') }}" class="oy-footer__menu-link">My Account</a></li>
                                        <li><a href="{{ route('hire') }}" class="oy-footer__menu-link">Hiring Process</a></li>
                                        <li><a href="https://autofusionrepairs.co.uk/book" class="oy-footer__menu-link">Book Now</a></li>
                                        <li><a href="{{ route('hire') }}" class="oy-footer__menu-link">Car Hire Locations</a></li>
                                    </ul>
                                </div>


                                <!-- Mobile: Start Widget -->
                                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                                    <div
                                        class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-b5-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-fw-1"
                                                aria-expanded="false" aria-controls="collapse-fw-1">
                                                The Company
                                            </button>
                                        </h2>
                                        <div id="collapse-fw-1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFooter">
                                            <div class="accordion-body">
                                                <ul class="oy-footer__menu list-unstyled">
                                                    <li><a href="{{ route('about') }}" class="oy-footer__menu-link">About Autofusion</a>
                                                    </li>
                                                    <li><a href="{{ route('testimonials') }}" class="oy-footer__menu-link">Francise
                                                            Opportunity</a></li>
                                                    <li><a href="{{ route('contact') }}" class="oy-footer__menu-link">Careers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer-widget footer-widget-list accordion-item accordion--style-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-b5-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-fw-2"
                                                aria-expanded="false" aria-controls="collapse-fw-2">
                                                Reservations
                                            </button>
                                        </h2>
                                        <div id="collapse-fw-2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFooter">
                                            <div class="accordion-body">
                                                <ul class="oy-footer__menu list-unstyled">
                                                    <li><a href="{{ route('account') }}" class="oy-footer__menu-link">My Account</a></li>
                                                    <li><a href="{{ route('hire') }}" class="oy-footer__menu-link">Hiring Process</a></li>
                                                    <li><a href="https://autofusionrepairs.co.uk/book" class="oy-footer__menu-link">Book Now</a></li>
                                                    <li><a href="{{ route('hire') }}" class="oy-footer__menu-link">Car Hire Locations</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile: END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3 col-xl-2">
                                <div class="footer-widget footer-widget-list d-none d-md-block">
                                    <h5 class="text-b3-semibold text-white mb-4">Services</h5>
                                    <ul class="oy-footer__menu list-unstyled">
                                        <li><a href="#" class="oy-footer__menu-link">Supercar Hire</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Luxury Car Hire</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Wedding Car Hire</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Long Term Car Rental</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Business Car Hire</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Events Car Hire</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Photo Shoots Car Hire</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Music Video Car Hire</a></li>
                                    </ul>
                                </div>

                                <!-- Mobile: Start Widget -->
                                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                                    <div
                                        class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-b5-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-fw-3"
                                                aria-expanded="false" aria-controls="collapse-fw-3">
                                                Services
                                            </button>
                                        </h2>
                                        <div id="collapse-fw-3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFooter">
                                            <div class="accordion-body">
                                                <ul class="oy-footer__menu list-unstyled">
                                                    <li><a href="#" class="oy-footer__menu-link">Supercar Hire</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Luxury Car Hire</a>
                                                    </li>
                                                    <li><a href="#" class="oy-footer__menu-link">Wedding Car Hire</a>
                                                    </li>
                                                    <li><a href="#" class="oy-footer__menu-link">Long Term Car
                                                            Rental</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Business Car Hire</a>
                                                    </li>
                                                    <li><a href="#" class="oy-footer__menu-link">Events Car Hire</a>
                                                    </li>
                                                    <li><a href="#" class="oy-footer__menu-link">Photo Shoots Car
                                                            Hire</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Music Video Car
                                                            Hire</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile: END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3 col-xl-2">
                                <div class="footer-widget footer-widget-list d-none d-md-block">
                                    <h5 class="text-b3-semibold text-white mb-4">Vehicle Brands</h5>
                                    <ul class="oy-footer__menu list-unstyled">
                                        <li><a href="#" class="oy-footer__menu-link">Lamborghini</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Mercedes</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Ferrari</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">BMW</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Rolls Royce</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Porsche</a></li>
                                        <li><a href="#" class="oy-footer__menu-link">Land Rover</a></li>
                                    </ul>
                                    <a href="#" class="oy-footer__menu-more">Learn More</a>
                                </div>
                                <!-- Mobile: Start Widget -->
                                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                                    <div
                                        class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-b5-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-fw-4"
                                                aria-expanded="false" aria-controls="collapse-fw-4">
                                                Vehicle Brands
                                            </button>
                                        </h2>
                                        <div id="collapse-fw-4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFooter">
                                            <div class="accordion-body">
                                                <ul class="oy-footer__menu list-unstyled">
                                                    <li><a href="#" class="oy-footer__menu-link">Lamborghini</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Mercedes</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Ferrari</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">BMW</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Rolls Royce</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Porsche</a></li>
                                                    <li><a href="#" class="oy-footer__menu-link">Land Rover</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile: END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-3 col-xl-2">
                                <div class="footer-widget footer-widget-list d-none d-md-block">
                                    <h5 class="text-b3-semibold text-white mb-4">Vehicle Types</h5>
                                    <ul class="oy-footer__menu list-unstyled">
                                        <li><a href="#">Every-Day Cars</a></li>
                                        <li><a href="#">Luxury Cars</a></li>
                                        <li><a href="#">Performance Cars</a></li>
                                        <li><a href="#">Supercars</a></li>
                                    </ul>
                                    <h5 class="text-b3-semibold text-white mb-4 mt-4">Contact Info.</h5>
                                    <ul class="list-unstyled contact-list">
                                        <li><a href="tel:01412375050">
                                                <span class="contact-list__svg">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.7">
                                                            <path
                                                                d="M13.215 8.0627C12.8925 8.0627 12.6375 7.80019 12.6375 7.4852C12.6375 7.2077 12.36 6.6302 11.895 6.1277C11.4375 5.6402 10.935 5.3552 10.515 5.3552C10.1925 5.3552 9.9375 5.0927 9.9375 4.7777C9.9375 4.4627 10.2 4.2002 10.515 4.2002C11.265 4.2002 12.0525 4.6052 12.7425 5.3327C13.3875 6.0152 13.8 6.8627 13.8 7.4777C13.8 7.8002 13.5375 8.0627 13.215 8.0627Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M15.9228 8.0625C15.6003 8.0625 15.3453 7.8 15.3453 7.485C15.3453 4.8225 13.1778 2.6625 10.5228 2.6625C10.2003 2.6625 9.94531 2.4 9.94531 2.085C9.94531 1.77 10.2003 1.5 10.5153 1.5C13.8153 1.5 16.5003 4.185 16.5003 7.485C16.5003 7.8 16.2378 8.0625 15.9228 8.0625Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.2875 11.2125L6.9 12.6C6.6075 12.8925 6.1425 12.8925 5.8425 12.6075C5.76 12.525 5.6775 12.45 5.595 12.3675C4.8225 11.5875 4.125 10.77 3.5025 9.915C2.8875 9.06 2.3925 8.205 2.0325 7.3575C1.68 6.5025 1.5 5.685 1.5 4.905C1.5 4.395 1.59 3.9075 1.77 3.4575C1.95 3 2.235 2.58 2.6325 2.205C3.1125 1.7325 3.6375 1.5 4.1925 1.5C4.4025 1.5 4.6125 1.545 4.8 1.635C4.995 1.725 5.1675 1.86 5.3025 2.055L7.0425 4.5075C7.1775 4.695 7.275 4.8675 7.3425 5.0325C7.41 5.19 7.4475 5.3475 7.4475 5.49C7.4475 5.67 7.395 5.85 7.29 6.0225C7.1925 6.195 7.05 6.375 6.87 6.555L6.3 7.1475C6.2175 7.23 6.18 7.3275 6.18 7.4475C6.18 7.5075 6.1875 7.56 6.2025 7.62C6.225 7.68 6.2475 7.725 6.2625 7.77C6.3975 8.0175 6.63 8.34 6.96 8.73C7.2975 9.12 7.6575 9.5175 8.0475 9.915C8.1225 9.99 8.205 10.065 8.28 10.14C8.58 10.4325 8.5875 10.9125 8.2875 11.2125Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M16.4767 13.7473C16.4767 13.9573 16.4392 14.1748 16.3642 14.3848C16.3417 14.4448 16.3192 14.5048 16.2892 14.5648C16.1617 14.8348 15.9967 15.0898 15.7792 15.3298C15.4117 15.7348 15.0067 16.0273 14.5492 16.2148C14.5417 16.2148 14.5342 16.2223 14.5267 16.2223C14.0842 16.4023 13.6042 16.4998 13.0867 16.4998C12.3217 16.4998 11.5042 16.3198 10.6417 15.9523C9.77922 15.5848 8.91672 15.0898 8.06172 14.4673C7.76922 14.2498 7.47672 14.0323 7.19922 13.7998L9.65172 11.3473C9.86172 11.5048 10.0492 11.6248 10.2067 11.7073C10.2442 11.7223 10.2892 11.7448 10.3417 11.7673C10.4017 11.7898 10.4617 11.7973 10.5292 11.7973C10.6567 11.7973 10.7542 11.7523 10.8367 11.6698L11.4067 11.1073C11.5942 10.9198 11.7742 10.7773 11.9467 10.6873C12.1192 10.5823 12.2917 10.5298 12.4792 10.5298C12.6217 10.5298 12.7717 10.5598 12.9367 10.6273C13.1017 10.6948 13.2742 10.7923 13.4617 10.9198L15.9442 12.6823C16.1392 12.8173 16.2742 12.9748 16.3567 13.1623C16.4317 13.3498 16.4767 13.5373 16.4767 13.7473Z"
                                                                fill="currentColor" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>0141 237 5050</span></a></li>
                                        <li><a href="mailto:enquiries@autofusionhire.co.uk">
                                                <span class="contact-list__svg">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.7">
                                                            <path
                                                                d="M14.168 2.9165H5.83464C3.33464 2.9165 1.66797 4.1665 1.66797 7.08317V12.9165C1.66797 15.8332 3.33464 17.0832 5.83464 17.0832H14.168C16.668 17.0832 18.3346 15.8332 18.3346 12.9165V7.08317C18.3346 4.1665 16.668 2.9165 14.168 2.9165ZM14.5596 7.9915L11.9513 10.0748C11.4013 10.5165 10.7013 10.7332 10.0013 10.7332C9.3013 10.7332 8.59297 10.5165 8.0513 10.0748L5.44297 7.9915C5.1763 7.77484 5.13464 7.37484 5.34297 7.10817C5.55964 6.8415 5.9513 6.7915 6.21797 7.00817L8.8263 9.0915C9.45964 9.59984 10.5346 9.59984 11.168 9.0915L13.7763 7.00817C14.043 6.7915 14.443 6.83317 14.6513 7.10817C14.868 7.37484 14.8263 7.77484 14.5596 7.9915Z"
                                                                fill="currentColor" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>enquiries@autofusionhire.co.uk</span>
                                            </a></li>
                                    </ul>
                                </div>
                                <!-- Mobile: Start Widget -->
                                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                                    <div
                                        class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-b5-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-fw-5"
                                                aria-expanded="false" aria-controls="collapse-fw-5">
                                                Vehicle Types
                                            </button>
                                        </h2>
                                        <div id="collapse-fw-5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFooter">
                                            <div class="accordion-body">
                                                <ul class="oy-footer__menu list-unstyled">
                                                    <li><a href="#">Every-Day Cars</a></li>
                                                    <li><a href="#">Luxury Cars</a></li>
                                                    <li><a href="#">Performance Cars</a></li>
                                                    <li><a href="#">Supercars</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-b5-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-fw-6"
                                                aria-expanded="false" aria-controls="collapse-fw-6">
                                                Contact Info.
                                            </button>
                                        </h2>
                                        <div id="collapse-fw-6" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFooter">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled contact-list">
                                                    <li><a href="tel:01412375050">
                                                            <span class="contact-list__svg">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g opacity="0.7">
                                                                        <path
                                                                            d="M13.215 8.0627C12.8925 8.0627 12.6375 7.80019 12.6375 7.4852C12.6375 7.2077 12.36 6.6302 11.895 6.1277C11.4375 5.6402 10.935 5.3552 10.515 5.3552C10.1925 5.3552 9.9375 5.0927 9.9375 4.7777C9.9375 4.4627 10.2 4.2002 10.515 4.2002C11.265 4.2002 12.0525 4.6052 12.7425 5.3327C13.3875 6.0152 13.8 6.8627 13.8 7.4777C13.8 7.8002 13.5375 8.0627 13.215 8.0627Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.9228 8.0625C15.6003 8.0625 15.3453 7.8 15.3453 7.485C15.3453 4.8225 13.1778 2.6625 10.5228 2.6625C10.2003 2.6625 9.94531 2.4 9.94531 2.085C9.94531 1.77 10.2003 1.5 10.5153 1.5C13.8153 1.5 16.5003 4.185 16.5003 7.485C16.5003 7.8 16.2378 8.0625 15.9228 8.0625Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M8.2875 11.2125L6.9 12.6C6.6075 12.8925 6.1425 12.8925 5.8425 12.6075C5.76 12.525 5.6775 12.45 5.595 12.3675C4.8225 11.5875 4.125 10.77 3.5025 9.915C2.8875 9.06 2.3925 8.205 2.0325 7.3575C1.68 6.5025 1.5 5.685 1.5 4.905C1.5 4.395 1.59 3.9075 1.77 3.4575C1.95 3 2.235 2.58 2.6325 2.205C3.1125 1.7325 3.6375 1.5 4.1925 1.5C4.4025 1.5 4.6125 1.545 4.8 1.635C4.995 1.725 5.1675 1.86 5.3025 2.055L7.0425 4.5075C7.1775 4.695 7.275 4.8675 7.3425 5.0325C7.41 5.19 7.4475 5.3475 7.4475 5.49C7.4475 5.67 7.395 5.85 7.29 6.0225C7.1925 6.195 7.05 6.375 6.87 6.555L6.3 7.1475C6.2175 7.23 6.18 7.3275 6.18 7.4475C6.18 7.5075 6.1875 7.56 6.2025 7.62C6.225 7.68 6.2475 7.725 6.2625 7.77C6.3975 8.0175 6.63 8.34 6.96 8.73C7.2975 9.12 7.6575 9.5175 8.0475 9.915C8.1225 9.99 8.205 10.065 8.28 10.14C8.58 10.4325 8.5875 10.9125 8.2875 11.2125Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M16.4767 13.7473C16.4767 13.9573 16.4392 14.1748 16.3642 14.3848C16.3417 14.4448 16.3192 14.5048 16.2892 14.5648C16.1617 14.8348 15.9967 15.0898 15.7792 15.3298C15.4117 15.7348 15.0067 16.0273 14.5492 16.2148C14.5417 16.2148 14.5342 16.2223 14.5267 16.2223C14.0842 16.4023 13.6042 16.4998 13.0867 16.4998C12.3217 16.4998 11.5042 16.3198 10.6417 15.9523C9.77922 15.5848 8.91672 15.0898 8.06172 14.4673C7.76922 14.2498 7.47672 14.0323 7.19922 13.7998L9.65172 11.3473C9.86172 11.5048 10.0492 11.6248 10.2067 11.7073C10.2442 11.7223 10.2892 11.7448 10.3417 11.7673C10.4017 11.7898 10.4617 11.7973 10.5292 11.7973C10.6567 11.7973 10.7542 11.7523 10.8367 11.6698L11.4067 11.1073C11.5942 10.9198 11.7742 10.7773 11.9467 10.6873C12.1192 10.5823 12.2917 10.5298 12.4792 10.5298C12.6217 10.5298 12.7717 10.5598 12.9367 10.6273C13.1017 10.6948 13.2742 10.7923 13.4617 10.9198L15.9442 12.6823C16.1392 12.8173 16.2742 12.9748 16.3567 13.1623C16.4317 13.3498 16.4767 13.5373 16.4767 13.7473Z"
                                                                            fill="currentColor" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <span>0141 237 5050</span></a></li>
                                                    <li><a href="mailto:enquiries@autofusionhire.co.uk">
                                                            <span class="contact-list__svg">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g opacity="0.7">
                                                                        <path
                                                                            d="M14.168 2.9165H5.83464C3.33464 2.9165 1.66797 4.1665 1.66797 7.08317V12.9165C1.66797 15.8332 3.33464 17.0832 5.83464 17.0832H14.168C16.668 17.0832 18.3346 15.8332 18.3346 12.9165V7.08317C18.3346 4.1665 16.668 2.9165 14.168 2.9165ZM14.5596 7.9915L11.9513 10.0748C11.4013 10.5165 10.7013 10.7332 10.0013 10.7332C9.3013 10.7332 8.59297 10.5165 8.0513 10.0748L5.44297 7.9915C5.1763 7.77484 5.13464 7.37484 5.34297 7.10817C5.55964 6.8415 5.9513 6.7915 6.21797 7.00817L8.8263 9.0915C9.45964 9.59984 10.5346 9.59984 11.168 9.0915L13.7763 7.00817C14.043 6.7915 14.443 6.83317 14.6513 7.10817C14.868 7.37484 14.8263 7.77484 14.5596 7.9915Z"
                                                                            fill="currentColor" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <span>enquiries@autofusionhire.co.uk</span>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile: END Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="footer-widget footer-widget-subscribe">
                                    <h4 class="text-h5 text-white mb-5">Don't miss out on our offers! Sign up for deals!
                                    </h4>
                                    <form action="#" class="oy-footer-newsletter rounded-5 p-5 bg-white bg-opacity-10">
                                        <div>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="Email Address" required>
                                        </div>
                                        <button type="submit" class="btn btn--gradient-primary w-100">
                                            <span class="btn__text">Subscribe</span>
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Subsection: Footer Middle -->

                <!-- ==================== Subsection: Footer Utility ==================== -->
                <div class="oy-footer-utility bg-dark-light">
                    <div class="container">
                        <div class="row align-items-center gy-5">
                            <div class="col-12 col-lg-4 order-0 order-lg-1">
                                <div class="social-list">
                                    <!-- Social: Facebook -->
                                    <a class="social-list__item" href="https://www.facebook.com/AutofusionUK"><svg width="56" height="56"
                                            viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                                            <path
                                                d="M29.9144 40.349V29.0996H33.7095L34.2736 24.695H29.9144V21.8896C29.9144 20.6186 30.2685 19.7484 32.0926 19.7484H34.404V15.8215C33.2793 15.701 32.1489 15.6428 31.0179 15.6472C27.6634 15.6472 25.3602 17.695 25.3602 21.4545V24.6868H21.5898V29.0913H25.3685V40.349H29.9144Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                    <!-- Social: Instagram -->
                                    <a class="social-list__item" href="https://www.instagram.com/autofusionrepairs/?hl=en">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                                            <g clip-path="url(#clip0_10061_18863)">
                                                <path
                                                    d="M33.7624 16.4712H22.2333C19.0631 16.4712 16.4688 19.0655 16.4688 22.2358V33.7655C16.4688 36.9348 19.0631 39.53 22.2333 39.53H33.7624C36.9327 39.53 39.527 36.9348 39.527 33.7655V22.2358C39.527 19.0655 36.9327 16.4712 33.7624 16.4712ZM37.6054 33.7655C37.6054 35.8839 35.8821 37.6084 33.7624 37.6084H22.2333C20.1146 37.6084 18.3904 35.8839 18.3904 33.7655V22.2358C18.3904 20.1167 20.1146 18.3928 22.2333 18.3928H33.7624C35.8821 18.3928 37.6054 20.1167 37.6054 22.2358V33.7655Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M34.238 23.1972C35.0339 23.1972 35.6792 22.552 35.6792 21.7561C35.6792 20.9602 35.0339 20.3149 34.238 20.3149C33.4421 20.3149 32.7969 20.9602 32.7969 21.7561C32.7969 22.552 33.4421 23.1972 34.238 23.1972Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M27.9989 22.2349C24.8146 22.2349 22.2344 24.8154 22.2344 27.9994C22.2344 31.1823 24.8146 33.7646 27.9989 33.7646C31.1824 33.7646 33.7635 31.1823 33.7635 27.9994C33.7635 24.8154 31.1824 22.2349 27.9989 22.2349ZM27.9989 31.8429C25.8767 31.8429 24.156 30.1222 24.156 27.9994C24.156 25.8766 25.8767 24.1565 27.9989 24.1565C30.1212 24.1565 31.8419 25.8766 31.8419 27.9994C31.8419 30.1222 30.1212 31.8429 27.9989 31.8429Z"
                                                    fill="currentColor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10061_18863">
                                                    <rect width="23.0588" height="23.0588" fill="currentColor"
                                                        transform="translate(16.4688 16.4712)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <!-- Social: Linkedin -->
                                    <a class="social-list__item" href="#">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                                            <path
                                                d="M18.6289 16.1602C16.8173 16.1602 15.6328 17.3498 15.6328 18.9133C15.6328 20.4424 16.782 21.6659 18.5594 21.6659H18.5938C20.4408 21.6659 21.5903 20.4424 21.5903 18.9133C21.5558 17.3498 20.4408 16.1602 18.6289 16.1602Z"
                                                fill="currentColor" />
                                            <path d="M15.9453 23.8408H21.2415V39.7745H15.9453V23.8408Z"
                                                fill="currentColor" />
                                            <path
                                                d="M34.2411 23.4688C31.384 23.4688 29.4682 26.1535 29.4682 26.1535V23.8427H24.1719V39.7764H29.4679V30.8784C29.4679 30.4021 29.5024 29.9264 29.6423 29.5858C30.0252 28.6346 30.8965 27.6492 32.3596 27.6492C34.276 27.6492 35.0425 29.1104 35.0425 31.2524V39.7764H40.3382V30.6403C40.3382 25.7462 37.7253 23.4688 34.2411 23.4688Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                    <!-- Social: Tiktok -->
                                    <a class="social-list__item" href="#">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                                            <path
                                                d="M34.0393 20.7902C33.0059 19.5887 32.4645 18.0361 32.5073 16.4554L28.6451 16.3623V16.7492V32.8915C27.6054 37.5252 20.8992 36.3161 21.5705 31.6015C21.9451 29.448 24.2587 28.123 26.315 28.872V24.9314C21.8386 24.1521 17.5964 27.7149 17.641 32.254C18.0322 42.0978 32.1513 42.0993 32.5431 32.254C32.4444 31.9017 32.4995 25.3416 32.4855 24.7883C34.2417 25.881 36.285 26.4271 38.3543 26.3576V22.2876C36.4413 22.2876 34.9813 21.779 34.0393 20.7902Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                    <!-- Social: Youtube -->
                                    <a class="social-list__item" href="#">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                                            <g clip-path="url(#clip0_10061_18881)">
                                                <path
                                                    d="M38.4883 21.3695C37.6671 20.3933 36.1509 19.9951 33.2553 19.9951H22.7445C19.7826 19.9951 18.2408 20.419 17.4226 21.4583C16.625 22.4716 16.625 23.9647 16.625 26.0311V29.9697C16.625 33.9731 17.5714 36.0057 22.7445 36.0057H33.2554C35.7664 36.0057 37.1578 35.6543 38.058 34.7928C38.9811 33.9094 39.375 32.467 39.375 29.9697V26.0311C39.375 23.8519 39.3133 22.35 38.4883 21.3695ZM31.2306 28.5442L26.4576 31.0387C26.3509 31.0945 26.2342 31.1221 26.1177 31.1221C25.9857 31.1221 25.8541 31.0866 25.7375 31.016C25.5179 30.883 25.3838 30.645 25.3838 30.3883V25.4153C25.3838 25.159 25.5175 24.9212 25.7367 24.7881C25.9559 24.655 26.2285 24.6459 26.4559 24.764L31.2289 27.2425C31.4717 27.3685 31.6242 27.6192 31.6246 27.8927C31.6249 28.1665 31.473 28.4175 31.2306 28.5442Z"
                                                    fill="currentColor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10061_18881">
                                                    <rect width="22.75" height="22.75" fill="currentColor"
                                                        transform="translate(16.625 16.625)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 order-1 order-lg-0">
                                <div class="oy-footer-utility__content">
                                    <ul
                                        class="oy-footer-utility__menu list-unstyled justify-content-center justify-content-lg-start mb-4">
                                        <li><a href="#">Cookie Policy</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="https://autofusioncars.co.uk/downloads/Autofusion-Limited-Hire-Car-Terms-And-Conditions.pdf">Terms & Conditions</a></li>
                                        <li><a href="#">Complaints</a></li>
                                        <li><a href="#">Modern Slavery Act Statement</a></li>
                                    </ul>
                                    <p class="text-white text-opacity-75 text-center text-lg-start mb-0">Copyright ©
                                        2025 AUTOFUSION.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Subsection: Footer Utility -->
            </div>
        </div>
    </footer>

<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Autofusion",
      "foundingDate" : "2019",
      "address": {
        "@type": "PostalAddress",
        "addressLocality" : "Glasgow",
        "addressRegion" : "Scotland"
      }
    }
</script>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
