@extends('app')

@section('title','Services')

@section('content')
<h1>Services</h1>

<p>Services Page via Blade template</p>

<form action="/service" method="post">
    <input type="text" name="name" autocomplete="off">
    @csrf
    <button>Add service</button>
</form>

<p style="color:red;">@error('name') {{ $message }} @enderror</p>

<ul>
    @forelse ($services as $service)
        <li>{{ $service->name }}</li>
    @empty
        <li>No services..</li>
    @endforelse
</ul>

@endsection