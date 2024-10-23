<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Statamic\Facades\Entry;
use Illuminate\Http\Request;

class NewsBlogController extends Controller
{
    /**
     * Show the blog post by slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Attempt to find the blog entry by the slug
        $blog = Entry::query()
            ->where('collection', 'news_blog')
            ->where('slug', Str::slug($slug))
            ->first();

        // If the blog entry does not exist, return the error view
        if (!$blog) {
            return view('errors.blog-not-found', ['slug' => $slug]);
        }

        // If the blog exists, return the blog view with the content
        return view('newsblog', ['blog' => $blog]);
    }
}
