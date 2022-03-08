@extends('layouts.main')
@section('content')
@foreach ($posts as $post)

<style type="text/css">
    .kotak{
	width: 600px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;

}

</style>
<article class="mb-5">
<div class="kotak">
    <h1>
        <a href="/blog/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h1>

    <h5>{{ $post ["Penulis"] }}</h5>
    <p>{{ $post["Isi"] }}</p>

</div>
</article>

@endforeach
@endsection
