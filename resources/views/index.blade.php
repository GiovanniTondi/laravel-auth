@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>GESTIONE</h1>

        <ul>
            <li>
                <a href="{!! route('emp-index') !!}">EMPLOYEES</a>
                <a href="{!! route('loc-index') !!}">LOCATIONS</a>
                <a href="{!! route('task-index') !!}">TASK</a>
            </li>
        </ul>
    </div>


@endsection
