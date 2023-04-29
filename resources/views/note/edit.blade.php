@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index')}}">Back</a>
    <form method="POST" action="{{ route('note.update', $note->id)}} " >
        @method('PUT')
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $note->title}}">
        <br>
        <label for="">Description</label>
        <input type="text" name="description" value=" {{ $note->description}}">
        <br>
        <input type="submit" value="Update">
    </form>
@endsection