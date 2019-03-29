@extends('layouts.app')

@section('content')
    <video-show :video="{{ json_encode($video) }}"></video-show>
@endsection
