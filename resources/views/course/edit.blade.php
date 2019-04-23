@extends('layouts.app')

@section('content')
    <course-edit :course="{{ json_encode($course) }}"></course-edit>
@endsection
