@extends('layouts.app')

@section('content')


    <form action="{{url('annonce')}}" method="post">

        <input type="text">
        <input type="text">
        <input type="submit">

    </form>

    @endsection