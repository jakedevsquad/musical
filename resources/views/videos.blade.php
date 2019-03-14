@extends('layouts.app')

@section('content')
    <videos :videos="{{ json_encode($videos) }}" ></videos>
@endsection
