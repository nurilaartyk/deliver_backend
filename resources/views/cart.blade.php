@extends('layouts.app')

@section('content')
    @foreach($carts as $cart)
        <div class="mb-6 w-[980px] justify-between rounded-lg bg-white p-6 sm:flex sm:justify-start shadow-lg">
            <img src="https://sayavegan.com/wp-content/uploads/2022/05/DSC05908-removebg-preview.png" alt="product-image" class="w-full rounded-lg sm:w-40"/>
            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                <div class="flex flex-col justify-center">
                    <h2 class="text-lg font-bold text-gray-900">{{ $cart->name }}</h2>
                    <p class="mt-1 text-xs text-gray-700 w-[200px] truncate">{{ $cart->body }}</p>
                </div>
                <div class="flex items-center">
                    <p class="text-sm">{{ $cart->category->name }}</p>
                </div>
                <div class="flex items-center">
                    <p class="text-sm">{{ $cart->cost }}KZT</p>
                </div>
                <form class="flex items-center" action="{{ route('profile.favorite.delete', $cart) }}" method="post">
                    @csrf
                    <button type="submit">
                        <img src="{{ asset('assets/img/delete.png') }}" alt="img"/>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
