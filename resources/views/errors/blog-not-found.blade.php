<x-layout>
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Blog Not Found</h1>
                    <p>Sorry, the blog with the title "{{ $slug }}" does not exist.</p>
                    <a href="{{ url('/newsletter') }}" class="btn btn-main btn-round-full">Back to Blogs</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
