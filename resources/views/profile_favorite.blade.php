@extends('layouts.app')

@section('content')
    <section class="bg-[#EB5757] w-full flex h-[60px] items-center mt-[80px] mb-[20px]">
        <div class="mx-auto w-[800px] flex justify-between">
            <a href="{{ route('profile.info') }}">
                <div class="text-[15px] text-white font-medium">Profile Information</div>
            </a>
            <a href="{{ route('profile.cards') }}">
                <div class="text-[15px] text-white font-medium">My Cards</div>
            </a>
            <a href="{{ route('profile.orders') }}">
                <div class="text-[15px] text-white font-medium">My Orders</div>
            </a>
            <a href="{{ route('profile.favorite') }}">
                <div class="text-[15px] text-white font-medium">My Favorites</div>
            </a>
        </div>
    </section>
    <section class="mx-auto w-[1300px] mb-[200px] flex flex-col items-center gap-[20px] mt-[20px]">
        @foreach($favorites as $favorite)
            <div class="mb-6 w-[980px] justify-between rounded-lg bg-white p-6 sm:flex sm:justify-start shadow-lg">
                <img src="https://sayavegan.com/wp-content/uploads/2022/05/DSC05908-removebg-preview.png" alt="product-image" class="w-full rounded-lg sm:w-40"/>
                <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-lg font-bold text-gray-900">{{ $favorite->name }}</h2>
                        <p class="mt-1 text-xs text-gray-700 w-[200px] truncate">{{ $favorite->body }}</p>
                    </div>
                    <div class="flex items-center">
                        <p class="text-sm">{{ $favorite->category->name }}</p>
                    </div>
                    <div class="flex items-center">
                        <p class="text-sm">{{ $favorite->cost }}KZT</p>
                    </div>
                    <form class="flex items-center" action="{{ route('profile.favorite.delete', $favorite) }}"
                          method="post">
                        @csrf
                        <button type="submit">
                            <img src="{{ asset('assets/img/delete.png') }}" alt="img"/>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
@endsection
