     <!-- Our Mission, Vision, and Core Values Section -->
        <section class="section mission-vision-core-values">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $mission_vision_body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            {!! $mission_and_vision_body_description !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($mission_card_section as $content)
                        <div class="col-lg-4">
                            <!-- Mission Item -->
                            <div class="mission-vision-core-values-item feature-item mb-4">
                                {!! $content->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


