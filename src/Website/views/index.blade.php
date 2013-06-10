@extends('base')

@section('body')
    <div class="g one-whole">
        @foreach($posts as $post)
        <article class="post">
            <h2 class="post__header"><a href="{{ route('article', $post->getSlug()) }}" title="{{ $post->getTitle() }}">{{ $post->getTitle() }}</a></h2>
            <small class="post__posted">Posted on the {{ $post->getFormattedDate('jS') }} of {{ $post->getFormattedDate('F Y') }}.</small>
            <section class="post__body">{{ $post->getExcerpt() }}</section>
            <a href="{{ route('article', $post->getSlug()) }}" title="{{ $post->getTitle() }}" class="read-more">Read more &rarr;</a>
        </article>
        @endforeach
        {{ $posts->links() }}
        
    </div>
@stop
