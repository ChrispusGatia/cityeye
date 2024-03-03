<x-layout>

    <body id="top">

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">About Us</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section doctors">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2>{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>{!! $body_description !!}</p>
                        </div>
                    </div>
                </div>

                <div class="row shuffle-wrapper">
                    @foreach ($card_section as $content)
                        <div class="col-lg-4 col-sm-6 mb-4 shuffle-item">
                            <div class="position-relative doctor-inner-box">
                                <div class="doctor-profile">
                                    <div class="doctor-img">
                                        <img src="{{ asset($content->card_image) }}" alt="board-member-image"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="content mt-3">
                                    {!! $content->card_description !!}
                                </div>
                            </div>
                        </div>

                        <!-- Add more board members as needed -->
                    @endforeach
                </div>
            </div>
        </section>
    </body>
</x-layout>
