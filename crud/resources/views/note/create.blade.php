@extends('layouts.app')
@section('content')
{{-- @if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

@endif --}}
<a href="{{ route('note.index') }}">Back</a>
<form action="{{ route('note.store') }}" method="POST">
    @csrf
    <label for="">title</label>
    <input type="text" name="title" placeholder="title" > <br>
    @error('title')
    <p style="color: red" > {{ $message }}</p>
    @enderror

    <label for="">description</label>
    <input type="text" name="description">
    @error('description')
    <p style="color: red" > {{ $message }}</p>
    @enderror

    <input type="submit" value="create">
</form>

@endsection
