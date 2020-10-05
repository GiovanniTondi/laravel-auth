@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>TASKS</h1>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{!! route('task-show', $task -> id) !!}">

                        {{ $task -> name }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="link-menu">
            <a href="{!! route('index') !!}">
                HOMEPAGE
            </a>
        </div>

    </div>

@endsection
