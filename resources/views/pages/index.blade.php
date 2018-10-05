@extends('layouts.test')
@section('content')

@foreach($room_types as $room_type)
{{"Room Type :"}} {{$room_type->room_type_name}} {{"has"}} {{$room_type->countRoom()}} {{"number of rooms."}}<br/>
@endforeach

@endsection