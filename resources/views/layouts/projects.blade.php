@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header">{{ __('Projects') }}</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-0">
                                <a href="{{ url('/tasks') }}" class="btn btn-link">Default Project</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection