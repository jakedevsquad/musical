@extends('layouts.app')

@section('content')
    <video-edit :video="{{ json_encode($video) }}"></video-edit>
@endsection
