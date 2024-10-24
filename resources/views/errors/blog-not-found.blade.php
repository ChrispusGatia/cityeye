<x-layout>
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Article Not Found</h1>
                    <p>Sorry, the article with the title "{{ $slug }}" does not exist.</p>
                    <a href="{{ url('/newsletter') }}" class="btn btn-main btn-round-full">Back to Articles</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
