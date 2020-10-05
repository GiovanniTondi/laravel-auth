@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>
            LOCATION:
            {{ $loc -> name }} ({{ $loc -> state }})
        </h1>

        <div class="show">
            <form action="{!! route('loc-save', $loc -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Name:</label>
                    @auth
                        <input type="text" name="name" value="{{ $loc -> name }}">
                    @else
                        {{ $loc -> name }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="state">State:</label>
                    @auth
                        <input type="text" name="state" value="{{ $loc -> state }}">
                    @else
                        {{ $loc -> state }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    @auth
                        <input type="text" name="city" value="{{ $loc -> city }}">
                    @else
                        {{ $loc -> city }}
                    @endauth
                </div>


                <div class="form-group">
                    <label for="street_name">Street:</label>
                    @auth
                        <input type="text" name="street_name" value="{{ $loc -> street_name }}">
                    @else
                        {{ $loc -> street_name }}
                    @endauth
                </div>

                <div class="form-group">
                    <label for="street_address">Address:</label>
                    @auth
                        <input type="text" name="street_address" value="{{ $loc -> street_address }}">
                    @else
                        {{ $loc -> street_address }}
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
                    <a href="{!! route('loc-index') !!}">
                        RETURN TO LOCATIONS
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
