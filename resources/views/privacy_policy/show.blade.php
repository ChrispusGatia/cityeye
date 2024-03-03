<x-layout>

    <body id="top">

        <!-- header Start -->
        <!-- header End -->

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Privacy Policy</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section privacy-policy">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-title">
                            <h2>{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <!-- Your detailed and well-formatted privacy policy content here -->
                            <div class="feature-item mb-4">
                                {!! $body_description !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature-like card structure for Privacy Policy content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="faqAccordion">
                            <div class="feature-item mb-4">

                                <!-- Section 1 -->
                                @foreach ($card_section as $content)
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    {{ $content->card_title }}
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#faqAccordion">
                                            <div class="card-body">
                                                {!! $content->card_description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <!-- Read More hyperlink -->
                            <div class="text-center">
                                <p>Effective October 25, 2023 </p>
                            </div>

                            <!-- End of Privacy Policy content -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</x-layout>
