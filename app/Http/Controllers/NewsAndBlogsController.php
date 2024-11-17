<?php

namespace App\Http\Controllers;

use Statamic\Facades\Entry;
use Illuminate\Support\Facades\Log;

class NewsAndBlogsController extends Controller
{
    public function index()
    {
        $entries = Entry::query()
            ->where('collection', 'news_and_blogs')
            ->limit(10)
            ->get();
 
        return view('news_and_blogs.index', ['entries' => $entries]);
    }

    public function show($slug)
{
    // Attempt to fetch the entry using query
    $entry = Entry::query()
        ->where('collection', 'news_and_blogs')
        ->where('slug', $slug)
        ->first();

    // Log the retrieved entry for debugging
    if ($entry) {
        Log::info("Fetched blog entry", ['entry' => $entry->toArray()]);
        Log::info('Fetching entry with slug', ['slug' => $slug]);
    } else {
        Log::warning("No entry found for slug", ['slug' => $slug]);
        abort(404, 'Blog not found');
    }

    // Return the view with the entry data
    return view('news_and_blogs.show', ['entry' => $entry]);
}

}