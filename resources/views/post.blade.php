@extends('layouts.main')
@section('home')

<style type="text/css">
    .kotak{
	width: 600px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

</style>
@foreach ($post as $item)
<div class="kotak">
<h1>{{ $item->nama }}</h1>
<br/>
<h1{{ $item->nim }} </h1>
@endforeach
</div>

@endsection




