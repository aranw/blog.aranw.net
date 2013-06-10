<?php

namespace Website\Controller;

use App;
use View;
use Input;
use Response;
use Paginator;
use Controller;

class BlogController extends Controller
{
    /**
     * Stores the Article Repository for collecting blog posts
     */
    public $blog;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blog = App::make('blog');
    }

    /**
     * Show the index page for the blog.
     */
    public function showIndex()
    {
        $data['posts'] = $this->blog->paginate(3);
        return View::make('index', $data);
    }

    /**
     * Show a single article.
     *
     * @param  string $slug
     */
    public function showArticle($slug)
    {
        $post = $this->blog->findBySlug($slug);
        $data['post'] = $post;
        $data['title'] = $post->getTitle();
        $data['description'] = strip_tags($post->getExcerpt());
        return View::make('single', $data);
    }

    /**
     * Build a sitemap.xml for SEO purposes.
     */
    public function showSitemap()
    {
        $data['posts'] = $this->blog->findAll();
        return View::make('sitemap', $data);
    }

    /**
     * Build an RSS feed from the post collection.
     */
    public function showRss()
    {
        $data['posts'] = $this->blog->findAll();
        $rss = View::make('rss', $data)->render();
        $response = Response::make($rss, 200);
        $response->headers->set('Content-Type', 'application/rss+xml');
        return $response;
    }
}
