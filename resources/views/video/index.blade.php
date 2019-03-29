@extends('layouts.app')

@section('content')
    <video-index :videos="{{ json_encode($videos) }}" default-filter="{{ $filter }}"></video-index>
@endsection
