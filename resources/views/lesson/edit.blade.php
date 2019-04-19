@extends('layouts.app')

@section('content')
    <lesson-edit :lesson="{{ json_encode($lesson) }}"></lesson-edit>
@endsection
