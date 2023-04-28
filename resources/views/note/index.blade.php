@extends('layouts.app')
@section('content')
<a href="{{ route('note.create')}}">Create new Note</a>
    <ul>
        @forelse ($notes as $note)
            <li><a href="">{{ $note->title  }} </a> <a href="{{ route('note.edit', $note->id) }}">EDIT</a> | <a href="">DELETE</a></li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
@endsection