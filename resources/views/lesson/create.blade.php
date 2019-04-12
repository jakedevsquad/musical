@extends('layouts.app')

@section('content')
    <lesson-create :course="{{ json_encode($course) }}"></lesson-create>
@endsection
