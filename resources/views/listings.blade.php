<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title>
    </title>
  </head>
  <body>

{{-- @php
    $test=1;
@endphp

<h1>
  {{$test}}
</h1>

<h1>{{$heading}}</h1>

@if (count($listings)==0)
<p>no listings found</p> 
@else
@foreach($listings as $listings)

<h2>
  {{$listings['title']}}
</h2>
<p>
  {{$listings['description']}}
</p>

@endforeach
@endif --}}

@unless (count($listings)==0)

@foreach($listings as $listing)
  <h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
  </h2>
  <p>{{$listing['description']}}</p>
@endforeach
@else
<p>No listings found</p>
    
@endunless

  </body>
</html>