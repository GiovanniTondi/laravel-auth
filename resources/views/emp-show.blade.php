@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>
            EMPLOYEE:
            {{ $emp -> name }} {{ $emp -> lastname }}
        </h1>

        <div class="show">
            <form action="{!! route('emp-save', $emp -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Name:</label>
                    @auth
                        <input type="text" name="name" value="{{ $emp -> name }}">
                    @else
                        {{ $emp -> name }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    @auth
                        <input type="text" name="lastname" value="{{ $emp -> lastname }}">
                    @else
                        {{ $emp -> lastname }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday:</label>

                    @auth
                        <input type="date" name="birthday" value="{{ $emp -> birthday }}">
                    @else
                        {{ $emp -> birthday }}
                    @endauth
                </div>


                <div class="form-group">
                    @auth
                        <label for="personal_code">Personal Code:</label>
                        <input type="text" name="personal_code" value="{{ $emp -> personal_code }}">

                    @endauth
                </div>


                <div class="form-group">
                    <label for="location_id">Location:</label>
                    @auth
                        <select name="location_id">
                            @foreach ($locs as $loc)
                                <option value="{{ $loc -> id }}"

                                    @if ($emp -> location_id == $loc -> id)
                                        selected
                                    @endif

                                    >
                                    {{ $loc -> name }} ({{ $loc -> state}})
                                </option>
                            @endforeach
                        </select>
                    @else
                        {{ $emp -> location -> name }} ({{ $emp -> location -> state}})
                    @endauth
                </div>

                <div class="button">
                    @auth

                        <button class="btn btn-primary" type="submit">SAVE</button>
                        <a class="btn btn-danger" href="{!! route('emp-destroy', $emp -> id) !!}">DELETE</a>
                    @else
                        PLEASE <a href="{!! route('login') !!}">LOGIN</a> TO EDIT
                    @endauth
                </div>

            </form>
        </div>

        <div class="link-menu">
            <ul>
                <li>
                    <a href="{!! route('emp-index') !!}">
                        RETURN TO EMPLOYEES
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
