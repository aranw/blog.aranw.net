@extends('base')

@section('body')
    <div class="g two-thirds">
        <h2>About Me</h2>
        <p>Back-end PHP Developer from Huddersfield, UK.</p>
        <p>More info coming when I know what to put here.</p>
        <p class=proceed><a href="{{ URL::to('about') }}" class="go">Read more...</a></p>
    </div>
    <div class="g one-third">
    
    </div>
    <div class="g one-whole">
        <p>There will be other stuff here shortly</p>
    </div>
@stop
