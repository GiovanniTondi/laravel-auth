@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>LOCATIONS</h1>

        <ul>
            @foreach ($locs as $loc)
                <li>
                    <a href="{!! route('loc-show', $loc -> id) !!}">

                        {{ $loc -> name }}
                        ({{ $loc -> state }})
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
