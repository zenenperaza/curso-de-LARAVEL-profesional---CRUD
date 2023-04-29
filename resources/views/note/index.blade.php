@extends('layouts.app')
@section('content')
<a href="{{ route('note.create')}}">Create new Note</a>
    <ul>
        @forelse ($notes as $note)
            <li>
                <a href="{{ route('note.show', $note->id)}}">{{ $note->title  }} </a> 
                <a href="{{ route('note.edit', $note->id) }}">EDIT</a> | 
                <form  action="">
                    @csrf
                    @method('DELETE')
                     
                </form></li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
@endsection