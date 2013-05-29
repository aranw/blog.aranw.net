@extends('base')

@section('body')
    <div class="g two-thirds">
        <h2>About Me</h2>
        <p>
            Back-end PHP Developer from Huddersfield, UK
        </p>
        <p>
            More info coming when I know what to put here.
        </p>
        <p class=proceed><a href="{{ URL::to('about') }}" class="go">Read more...</a></p>
    </div>
    <div class="g one-third">
        <h2>Blog Posts</h2>
        @foreach($posts as $post)
        <article class="post">
            <h1 class="post__header"><a href="{{ route('article', $post->getSlug()) }}" title="{{ $post->getTitle() }}">{{ $post->getTitle() }}</a></h1>
            <small class="post__posted">Posted on the {{ $post->getFormattedDate('jS') }} of {{ $post->getFormattedDate('F Y') }}.</small>
            <section class="post__body">{{ $post->getExcerpt() }}</section>
            <a href="{{ route('article', $post->getSlug()) }}" title="{{ $post->getTitle() }}" class="read-more">Read more &rarr;</a>
        </article>
        @endforeach
        {{ $posts->links() }}
        
    </div>
    <div class="g one-whole">
        <p>There will be other stuff here shortly</p>
    </div>
@stop
