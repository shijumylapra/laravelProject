@extends("layouts.app")
@section("title","About Page")
  
@section("page-container") 
<h1>My Laravel About Page</h1>

<div class="myDiv">
  <h2> Laravel </h2>
  <p> Laravel Web Project</p>
</div>

{{$message}}
{{$totalprice}}

@foreach($items as $items)
$items
@endforeach

@endsection
