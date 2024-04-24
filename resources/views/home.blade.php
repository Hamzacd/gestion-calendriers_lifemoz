@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Number of Users
                </div>

                <div class="card-body">
                    <h1>{{ $userCount }}</h1>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Number of Events
                </div>

                <div class="card-body">
                    <h1>{{ $eventCount }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
