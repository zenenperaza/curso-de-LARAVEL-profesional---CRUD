@extends('layouts.app')

@section('content')
<a href="{{ route('note.index')}}">Home</a>
    <form method="POST" action="{{ route('note.store')}}">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">
        <br>

        <label for="">Description</label>
        <input type="text" name="description">
        <br>

        <input type="submit" value="Create">
    </form>
@endsection