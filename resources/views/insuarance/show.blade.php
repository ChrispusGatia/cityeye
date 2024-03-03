<x-layout>

    <body id="top">



        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Insurance & Billing</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section insurance-page">
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

                    @foreach ($card_section as $content)
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <img src="{{ asset($content->card_image) }}" class="card-img-top"
                                    alt="Main Branch Image">
                                <div class="card-body">
                                    {!! $content->card_description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

        </section>

    </body>
</x-layout>
