@extends('layouts.app')

@section('content')
    <lesson-edit :course="{{ json_encode($course) }}" :lesson="{{ json_encode($lesson) }}"></lesson-edit>
@endsection
