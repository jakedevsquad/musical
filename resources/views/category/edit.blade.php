@extends('layouts.app')

@section('content')
    <category-edit :category="{{ json_encode($category) }}"></category-edit>
@endsection
