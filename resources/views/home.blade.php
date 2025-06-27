@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-card-info title="Custom Content">
                <p>This content goes in the slot area.</p>
                <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Click me</button>
            </x-card-info>
        </div>
    </div>
@endsection