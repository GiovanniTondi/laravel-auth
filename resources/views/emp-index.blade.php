@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>EMPLOYEES</h1>

        <ul>
            @foreach ($emps as $emp)
                <li>
                    <a href="{!! route('emp-show', $emp -> id) !!}">

                        {{ $emp -> name }}
                        {{ $emp -> lastname }}
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
