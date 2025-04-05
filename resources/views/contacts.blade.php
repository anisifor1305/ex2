@extends ('layouts.default')
@section('content')
@if ($email==='')
    <p>плохо</p>
@else
    <p>хорошо</p>
@endif
@stop