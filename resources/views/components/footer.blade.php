@php
    $linkColumns = [
        [
            'DC Comics' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
            'Shop' => ['Shop DC', 'Shop DC Collectibles'],
        ],
        [
            'DC' => ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'],
        ],
        [
            'Sites' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'],
        ],
    ];

    $socials = [
        'Facebook' => 'footer-facebook.png',
        'Twitter' => 'footer-twitter.png',
        'YouTube' => 'footer-youtube.png',
        'Pinterest' => 'footer-pinterest.png'
    ];
@endphp

<footer>
    <section class="py-5"
        style="background: url('{{ Vite::asset('resources/assets/footer-periscope.png') }}') center / cover no-repeat;">
        <div class="container">
            <div class="row ms-3">
                @foreach ($linkColumns as $column)
                    <div class="col-auto me-4">
                        @foreach ($column as $title => $links)
                            <h5 class="text-white text-uppercase fw-bold">{{ $title }}</h5>
                            <ul class="list-unstyled mb-4">
                                @foreach ($links as $link)
                                    <li>
                                        <a href="#" class="link-secondary text-decoration-none small">{{ $link }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-dark py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <a href="#" class="btn btn-outline-primary text-uppercase fw-bold">Sign-up now!</a>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center gap-3">
                    <span class="text-primary text-uppercase fw-bold">Follow us</span>
                    @foreach ($socials as $name => $file)
                        <a href="#">
                            <img src="{{ Vite::asset('resources/assets/' . $file) }}" alt="{{ $name }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</footer>
