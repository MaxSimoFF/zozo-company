<section id="contact" class="contact">
    <div class="container">

        <div class="section-header">
            <h2>Kontakt</h2>
            <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
                adipisci aliquam.</p>
        </div>

    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="container">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                    <h3>Skontaktuj się z nami</h3>
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Lokalizacja:</h4>
                            <p>Kostromska 37, 97-300 Piotrków Trybunalski</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>biuro@liczydlosc.pl</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Telefon:</h4>
                            <p>+48 889 421 363</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                <form action="{{ route('contacts.store') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Twoje imie" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Twój adres Mailowy" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Wiadomość" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Ładowanie</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Twoja wiadomość została wysłana. Dziękuję Ci!</div>
                    </div>
                    <div class="text-center"><button type="submit">Wyślij wiadomość</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section>
