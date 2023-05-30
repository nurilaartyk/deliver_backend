@extends('layouts.app')

@section('content')
    <section class="mx-auto w-[1300px] mb-[200px]">
        <div class="grid grid-cols-2 pt-[100px]">
            <div class="flex flex-col gap-[60px]">
                <h1 class="text-[72px] font-bold text-[#333333]">Enjoy the taste<br/>of <span class="text-[#EB5757]">Kazakh<br/>national dishes</span>
                </h1>
                <p class="text-[18px] font-medium text-[#333333]">Our job is to filling your tummy with delicious
                    food<br/>and with fast and free delivery</p>
                <a class="flex h-[70px] w-[190px] items-center justify-center rounded-full bg-[#EB5757]"
                   href="{{ route('menu.index') }}">
                    <div class="text-[18px] font-medium text-white">Order Now!</div>
                </a>
            </div>
            <div class="flex flex-col justify-center">
                <img src="{{ asset('assets/img/hero_1.png') }}" alt="img">
            </div>
        </div>
    </section>

    <section class="mx-auto w-[1300px] mb-[360px]">
        <div>
            <div class="text-center mb-[45px]">
                <h2 class="text-[16px] font-medium text-[#EB5757] mb-[10px]">Features</h2>
                <p class="text-[32px] font-bold text-[#333333] font-['Philosopher']">Food with a New Passion</p>
            </div>
            <div>
                <div class="flex justify-between">
                    <div class="w-[300px] flex flex-col items-center text-center">
                        <img class="w-[88px] h-[88px] mb-[30px]" src="{{ asset('assets/img/features_1.svg') }}"
                             alt="img">
                        <div class="text-[25px] font-bold text-[#EB5757] mb-[15px] font-['Philosopher']">National food
                        </div>
                        <div class="text-[16px] font-normal text-[#333333]">It can be a very secure path to earn good
                            money and make you very successful creative entrepreneur.
                        </div>
                    </div>
                    <div class="w-[300px] flex flex-col items-center text-center">
                        <img class="w-[88px] h-[88px] mb-[30px]" src="{{ asset('assets/img/features_2.svg') }}"
                             alt="img">
                        <div class="text-[25px] font-bold text-[#EB5757] mb-[15px] font-['Philosopher']">National food
                        </div>
                        <div class="text-[16px] font-normal text-[#333333]">It can be a very secure path to earn good
                            money and make you very successful creative entrepreneur.
                        </div>
                    </div>
                    <div class="w-[300px] flex flex-col items-center text-center">
                        <img class="w-[88px] h-[88px] mb-[30px]" src="{{ asset('assets/img/features_3.svg') }}"
                             alt="img">
                        <div class="text-[25px] font-bold text-[#EB5757] mb-[15px] font-['Philosopher']">National food
                        </div>
                        <div class="text-[16px] font-normal text-[#333333]">It can be a very secure path to earn good
                            money and make you very successful creative entrepreneur.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:show-category/>

    <x-contact-us/>

    <x-get-start/>

    <style>
        .selected {
            background-color: #EB5757;
            color: #FFFFFF;
        }

        .not-selected {
            color: #333333;
        }

        .scrollbar-custom::-webkit-scrollbar {
            width: 6px;
        }

        .scrollbar-custom::-webkit-scrollbar-track {
            background-color: #F2F2F2;
            border-radius: 9999px;
        }

        .scrollbar-custom::-webkit-scrollbar-thumb {
            background-color: #EB5757;
            border-radius: 100px;
        }

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hidden {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection
