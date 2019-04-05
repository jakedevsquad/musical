@extends('layouts.app')

@section('content')
    <course-index :courses="{{ json_encode($courses) }}" default-filter="{{ $filter }}"></course-index>
@endsection
