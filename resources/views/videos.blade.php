@extends('layouts.app')

@section('content')
    <videos :videos="{{ json_encode($videos) }}" default-filter="{{ $filter }}"></videos>
@endsection
