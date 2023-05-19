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

    <section class="mx-auto w-[1300px] mb-[85px]">
        <div class="flex justify-between items-end">
            <div>
                <div class="text-[18px] font-semibold text-[#EB5757] mb-[20px]">OUR MENU</div>
                <div class="text-[45px] font-bold text-[#333333]">Restaurants with<br/>Kazakh national<br/>cuisine</div>
            </div>
            <div class="flex gap-[36px]">
                <img src="{{ asset('assets/img/left.svg') }}" alt="img">
                <img src="{{ asset('assets/img/right.svg') }}" alt="img">
            </div>
        </div>
        <div class="flex justify-between items-center">
            <div
                class="scrollbar-custom overflow-y-auto overflow-x-hidden h-[570px] inline-block space-y-[30px] pr-[90px] pl-[10px]">
                @foreach([1, 2, 3, 4, 5, 6, 7, 8, 9] as $item)
                    <div
                        class="{{ $item == 1 ? 'selected' : 'not-selected' }} rounded-full w-[255px] h-[85px] text-[24px] font-medium flex items-center justify-center">
                        Sandyq
                    </div>
                @endforeach
            </div>
            <div></div>
            <div
                class="scrollbar-hidden flex flex-row overflow-x-auto h-[500px] w-[760px] space-x-[30px] rounded-[32px]">
                @foreach([1, 2, 3, 4, 5, 6, 7, 8, 9] as $item)
                    <img class="rounded-[32px] inline-block w-[440px] h-[500px]"
                         src="https://i.pinimg.com/736x/be/f1/b5/bef1b53bd373754094aba64102f06f87.jpg" alt="img">
                @endforeach
            </div>
            <div></div>
        </div>
    </section>

    <section class="mx-auto w-[1300px]">
        <div class="grid grid-cols-2 items-center">
            <div>
                <div class="relative inline-flex">
                    <img class="h-[696px] w-[577px] rounded-[100px] object-cover shadow-xl"
                         src="https://i.pinimg.com/originals/cd/bc/f0/cdbcf077b62246123f74fcc919587b0b.jpg" alt="img"/>
                    <div class="absolute bottom-[-38px] right-[32px] rounded-[20px] bg-white p-[30px] shadow-lg">
                        <div class="mb-[15px] text-[20px] font-semibold">Our Reviewers</div>
                        <div class="flex -space-x-4">
                            <img class="h-[64px] w-[64px] rounded-full"
                                 src="https://i.pinimg.com/originals/cd/bc/f0/cdbcf077b62246123f74fcc919587b0b.jpg"
                                 alt=""/>
                            <img class="h-[64px] w-[64px] rounded-full"
                                 src="https://i.pinimg.com/originals/cd/bc/f0/cdbcf077b62246123f74fcc919587b0b.jpg"
                                 alt=""/>
                            <img class="h-[64px] w-[64px] rounded-full"
                                 src="https://i.pinimg.com/originals/cd/bc/f0/cdbcf077b62246123f74fcc919587b0b.jpg"
                                 alt=""/>
                            <a class="flex h-[64px] w-[64px] items-center justify-center rounded-full bg-[#EB5757] text-[15px] font-semibold text-white hover:bg-gray-600"
                               href="#">12k+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="text-[18px] font-semibold text-[#EB5757] mb-[20px]">WHAT THEY SAY</div>
                    <div class="text-[45px] font-bold mb-[20px]">What Our Customers Say About Us</div>
                    <div class="mb-[70px]">“Tandyr is the best. Besides the many and delicious meals, the service is also very good . I
                        highly recommend Tandyr to you”.
                    </div>
                    <div class="flex items-center gap-[12px] mb-[40px]">
                        <img class="h-[64px] w-[64px] rounded-full"
                             src="https://i.pinimg.com/originals/cd/bc/f0/cdbcf077b62246123f74fcc919587b0b.jpg" alt=""/>
                        <div class="text-[20px] font-medium">Serikbay Assem</div>
                    </div>
                    <div class="flex items-center gap-[16px]">
                        <ul class="flex justify-center">
                            <i class="fas fa-star text-yellow-300"></i>
                            <i class="fal fa-star text-yellow-300"></i>
                        </ul>
                        4.8
                    </div>
                </div>
            </div>
        </div>
    </section>

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
