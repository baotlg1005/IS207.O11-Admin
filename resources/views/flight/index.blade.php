@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($flights as $flight)
        {{ $flight->Name }}
    @endforeach
</div>
 
{{ $flights->links() }}
</div>
@endsection
