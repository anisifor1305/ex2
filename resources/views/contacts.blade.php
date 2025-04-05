@extends ('layouts.default')
@section('content')
@if ($email==='')
    <p>Не указан</p>
@else
    <p>хорошо</p>
@endif
@stop