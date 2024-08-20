@if ( $mesagge=Session::get('success'))
<div style="padding: 15px; background-color:green; color:white;">
    <p>{{ $mesagge }}</p>
</div>

@endif
@if ( $mesagge=Session::get('danger'))
<div style="padding: 15px; background-color:green; color:red;"><p>{{ $mesagge }}</p></div>

@endif

