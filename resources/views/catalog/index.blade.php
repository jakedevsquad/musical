@extends('layouts.app')

@section('content')
    <catalog-index
            :courses="{{ json_encode($courses) }}"
            name-filter="{{ $name_filter }}"
            category-filter="{{ $category_filter }}"></catalog-index>
@endsection
