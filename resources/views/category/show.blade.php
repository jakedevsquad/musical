@extends('layouts.app')

@section('content')
    <category-show :category="{{ json_encode($category) }}"></category-show>
@endsection
