@extends('layouts.app')
@section('content')
    <a href="{{ route('note.create') }}">Create new note</a>
    <ul>
        @forelse ($notes as $note)
            <li>
                <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> |
                <a href="{{ route('note.edit', $note->id) }}">EDIT </a> |
                <form method="POST" action="{{ route('note.destroy',$note->id) }}" >
                    @csrf
                    @method('DELETE')
                    <button type="submit"value="DELETE" >DELETE</button>
                </form>
            </li>
        @empty
            <p>No data. </p>
        @endforelse
    </ul>
@endsection
