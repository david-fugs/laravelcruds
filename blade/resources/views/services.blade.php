@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>
    <div class="cards" >

    </div>
    @component('_components.card')
        @slot('title', 'Service1')
        @slot('content', 'loremimpsum si señor claro que si')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service2')
        @slot('content', 'loremimpsum si señor claro que si')
    @endcomponent
</div>

@endsection
