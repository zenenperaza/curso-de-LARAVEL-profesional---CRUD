@extends('layouts.app')
@section('content')
    <ul>
        @forelse ($notes as $note)
            <li><a href="#">{{ $note->title }}</a> </li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
@endsection