@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
        @if (Auth::check() && Auth::user() && Auth::user()->usertype == 'admin')
            {{ __('Admin Dashboard') }}
        @elseif (Auth::check() && Auth::user() && Auth::user()->usertype == 'user')
            {{ __('User Dashboard') }}
        @endif
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Admin!") }}
                </div>
            </div>
        </div>
    </div>
@endsection
