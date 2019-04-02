@extends('layouts.app')

@section('content')
    <category-index :categories="{{ json_encode($categories) }}" default-filter="{{ $filter }}"></category-index>
@endsection
