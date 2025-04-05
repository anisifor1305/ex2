@extends ('layouts.default')
@section('content')
@if ($age<18)
    <p>1</p>
@else
    <p>Молод</p>
@endif
@stop