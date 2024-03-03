<x-layout>

    <body id="top">

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Frequently Asked Questions</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            {!! $body_description !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="accordion" id="faqAccordion">
                            <!-- Question sections -->
                            @foreach ($card_section as $key => $content)
                                <div class="card">
                                    <div class="card-header" id="faq{{ $key }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse{{ $key }}" aria-expanded="false"
                                                aria-controls="collapse{{ $key }}">
                                                {{ $content->card_title }}
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse"
                                        aria-labelledby="faq{{ $key }}" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            {!! $content->card_description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </body>
</x-layout>
