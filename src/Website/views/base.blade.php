<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <title>{{ $title }} | Aran Wilkinson</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="aran,wilkinson,aranw,php,php5,laravel,framework" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ URL::to('assets/css/blog.min.css') }}">
    <link rel="alternate" type="application/rss+xml" title="Dayle Rees RSS Feed" href="{{ route('rss') }}" />
    <script type="text/javascript" src="//use.typekit.net/fpq2mmx.js" onload="try{Typekit.load();}catch(e){}" async></script>
    <script src="{{ URL::to('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '{{ Config::get('app.ga.code') }}']);
        _gaq.push(['_setDomainName', '{{ Config::get('app.ga.domain') }}']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); 
                ga.type = 'text/javascript'; 
                ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; 
                s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">
      var GoSquared = {};
      GoSquared.acct = "{{ Config::get('app.go.code') }}";
      (function(w){
        function gs(){
          w._gstc_lt = +new Date;
          var d = document, g = d.createElement("script");
          g.type = "text/javascript";
          g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
          var s = d.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(g, s);
        }
        w.addEventListener ?
          w.addEventListener("load", gs, false) :
          w.attachEvent("onload", gs);
      })(window);
    </script>
</head>
<body class="blog">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <header class="blog__header">
        <div class="gw">
            <div class="g one-half">
                <h1><a href="<?php echo URL::to('/'); ?>">Aran Wilkinson</a></h1>
            </div>
            <div class="g one-half">
                <ul class="nav nav--block fr">
                    <li><a href="<?php echo URL::to('about/'); ?>">About</a></li>
                    <li><a href="<?php echo URL::to('contact/'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="blog__main">
        <div class="gw">
            <div class="g one-whole" id="content">
                @yield('body')
            </div>
        </div>
    </section>
    <footer class="blog__footer">
        <div class="gw">
            <div class="g one-whole">
                <p class="text-centre">
                    Copyright &copy; {{ date('Y') }} Aran Wilkinson
                </p>
            </div>
        </div>
    </footer>
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>

</body>
</html>