@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @role('admin')
                    <p>Halaman Data Pondok yatim</p>
                    @endrole

                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
