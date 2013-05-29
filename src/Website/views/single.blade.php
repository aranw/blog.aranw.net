@extends('base')

@section('body')
    <section class="g one-whole posts">
        <article class="post">
            <h2 class="post__header"><a href="{{ route('article', $post->getSlug()) }}" title="{{ $post->getTitle() }}">{{ $post->getTitle() }}</a></h2>
            <small class="post__posted">Posted on the {{ $post->getFormattedDate('jS') }} of {{ $post->getFormattedDate('F Y') }}.</small>
            <section class="post__body">{{ $post->getHtml() }}</section>
            <a href="{{ route('index') }}" title="Back to the home page.">&larr; Back to index.</a>
        </article>
    </section>
    <section class="g one-whole comments">
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_shortname = 'aranw'; 
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </section>
@stop
