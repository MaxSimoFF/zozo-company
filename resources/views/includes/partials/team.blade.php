<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Nasz zespół</h2>
            <p>Dzięki zgranemu i wyszkolonemu zespołowi zaprowadzimy cię tam gdzie widzisz przyszłość swojej firmy.</p>
        </div>

        <div class="row gy-5 justify-content-center">

            @foreach ($teamManagers as $member)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img width="305" height="460" src="{{ asset($member->photo) }}" class="img-fluid"
                                alt="photo">
                        </div>
                        <div class="member-info">
                            {{-- <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> --}}
                            <h4>{{ $member->name }}</h4>
                            @if ($member->education)
                                <p class="mb-2">{{ $member->education }}</p>
                            @endif
                            <span>{!! $member->deals_with !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row mt-4">
            @foreach ($teamMembers as $member)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img width="305" height="460" src="{{ asset($member->photo) }}" class="img-fluid"
                                alt="photo">
                        </div>
                        <div class="member-info">
                            {{-- <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> --}}
                            <h4>{{ $member->name }}</h4>
                            @if ($member->education)
                                <p class="mb-2">{{ $member->education }}</p>
                            @endif
                            <span>{!! $member->deals_with !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Team Member -->

    </div>
</section>
