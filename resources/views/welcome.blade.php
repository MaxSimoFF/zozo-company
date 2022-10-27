@extends('layouts.app')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>O nas</h2>
                <p>AKancelaria Liczydło to firma rodzinna, której obecność na polskim rynku sięga 2009 roku. Początki naszej działalności związane były z usługami księgowymi, wokół których, na przestrzeni już ponad dekady powstała marka wspierająca Klientów i oferująca najwyższy poziom usług w obszarach rachunkowym, kadrowym, płacowym, podatkowym.</p>
            </div>

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">o nas</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Jesteśmy ambitnym Zespołem, który obok założycieli</h4>
                            </div>
                            <p>Jesteśmy ambitnym Zespołem, który obok założycieli, ich sukcesorów oraz Partnerów, tworzy grupa kilkudziesięciu wykwalifikowanych specjalistów i ekspertów codziennie dbających o najwyższy standard usług i zadowolenie naszych Klientów. Słuchamy ich i sami wciąż poszukujemy rozwiązań, które przeniosą naszą współpracę z nimi na jeszcze wyższy poziom.</p>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>W naszej codziennej pracy pomagamy firmom rodzinnym</h4>
                            </div>
                            <p>W naszej codziennej pracy pomagamy firmom rodzinnym, fundacjom i stowarzyszeniom, jak również podmiotom sklasyfikowanym jako duże przedsiębiorstwa, sukcesywnie poszerzając spektrum naszych doświadczeń i możliwości, które wykorzystujemy do ciągłego rozwoju. Wiemy, że prawo i rachunkowość to jedne z najstarszych dziedzin życia gospodarczego, ale naszą ambicją jest to, aby dzięki nieustannemu kształceniu się oraz nowym technologiom te właśnie dziedziny stanowiły szanse i przewagi, a nie wyłącznie przeszkody i trudności.</p>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Z dumą możemy pochwalić się relacjami z Klientami</h4>
                            </div>
                            <p>Z dumą możemy pochwalić się relacjami z Klientami, z którymi współpracujemy. Wobec każdej nowej współpracy, z każdym Klientem podchodzimy w sposób i z myślą, aby ta relacja była trwała, pełna zaufania i aby na przestrzeni przyszłych lat razem stawiać czoła nowym wyzwaniom rynkowym, prawnym i technologicznym.</p>


                        </div><!-- End Tab 1 Content -->
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Nasze usługi</h2>
                <p>Stale szkolimy się w każdej dziedzinie którą obejmuje nasza działalność aby świadczyć usługi na najwyższym poziomie.</p>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Usługi księgowe</h3>
                            </a>
                            <p>Kompleksowe usługi księgowe, ryczałt, PKPiR, Księgi handlowe.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>usługi kadrowo - płacowe</h3>
                            </a>
                            <p>Prowadzenie teczek osobowych, naliczanie wynagrodzeń, Rozliczenia z ZUS oraz urzędem skarbowym w zakresie umów o pracę, umów cywilnoprawnych.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Doradztwo podatkowe</h3>
                            </a>
                            <p>Audyty podatkowe, Wnioski interpretacyjne. Reprezentacja kontrahentów przed organami administracji skarbowej, Doradztwo w zakresie PIT, CIT, VAT.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Nadzór księgowy</h3>
                            </a>
                            <p>Nadzór nad prowadzeniem ewidencji księgowej i podatkowej. Sporządzanie polityki rachunkowości oraz zakładowego planu kont. Audyty ksiąg rachunkowych i podatkowych.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>szkolenia branżowe</h3>
                            </a>
                            <p>W zakresie bieżących zmian podatkowych PIT, CIT, VAT. Szkolenia dotyczących księgowości, kadr i płac.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>doradztwo biznesowe</h3>
                            </a>
                            <p>Doradztwo w zakresie wyboru formy opodatkowania, zakładania jednoosobowej działalności gospodarczej, zakładania spółek prawa handlowego, pozyskiwania dofinansowanie zewnętrznego.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content px-xl-5">
                        <h3>Frequently Asked <strong>Questions</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>

                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    @include('includes.partials.team')
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    @include('includes.partials.contact')
    <!-- End Contact Section -->
@endsection
