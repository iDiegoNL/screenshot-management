@extends('layouts.base')

@section('body')
    <div class="min-h-screen bg-gray-100">
        <div class="bg-indigo-600 pb-32">
            <x-navigation/>
            <header class="py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    @hasSection('custom-title')
                        @yield('custom-title')
                    @else
                        <h1 class="text-3xl font-bold text-white">@yield('title')</h1>
                    @endif
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                @yield('content')

                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
        </main>
    </div>
@endsection
