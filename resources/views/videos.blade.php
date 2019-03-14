@extends('layouts.app')

@section('content')

    <videos :videos="{{ json_encode($videos) }}" ></videos>
    {{--<div class="container">--}}
    {{--@foreach($videos as $video)--}}
    {{--{{ $video->name }}--}}
    {{--@endforeach--}}
    {{--{{ $videos->links() }}--}}
    {{--</div>--}}
@endsection
