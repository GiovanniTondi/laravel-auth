@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>
            TASK:
            {{ $task -> name }}
        </h1>

        <div class="show">
            <form action="{!! route('task-save', $task -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Name:</label>
                    @auth
                        <input type="text" name="name" value="{{ $task -> name }}">
                    @else
                        {{ $task -> name }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    @auth
                        <input type="text" name="description" value="{{ $task -> description }}">
                    @else
                        <div class="description">
                            {{ $task -> description }}
                        </div>
                    @endauth
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    @auth
                        <input type="number" name="price" value="{{ $task -> price }}">
                    @else
                        {{ $task -> price }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    @auth
                        <input type="text" name="start_date" value="{{ $task -> start_date }}">
                    @else
                        {{ $task -> start_date }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    @auth
                        <input type="text" name="end_date" value="{{ $task -> end_date }}">
                    @else
                        {{ $task -> end_date }}
                    @endauth
                </div>
                <div class="button">

                    @auth
                        <button type="submit">SAVE</button>
                    @else
                        PLEASE <a href="{!! route('login') !!}">LOGIN</a> TO EDIT
                    @endauth
                </div>

            </form>
        </div>
        <div class="link-menu">
            <ul>
                <li>
                    <a href="{!! route('task-index') !!}">
                        RETURN TO TASKS
                    </a>
                </li>
                <li>
                    <a href="{!! route('index') !!}">
                        HOMEPAGE
                    </a>
                </li>
            </ul>
        </div>


    </div>

@endsection
