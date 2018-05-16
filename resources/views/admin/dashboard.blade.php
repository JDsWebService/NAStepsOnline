@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                
                {{-- Authentication Flash Messages --}}
                <div class="card-body">
                    Adminitrator stuff here
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
