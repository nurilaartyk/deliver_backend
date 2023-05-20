@extends('layouts.app')

@section('content')
    <section class="mx-auto w-[1180px] mt-[100px] mb-[150px]">
        <div class="font-medium text-[18px] mb-[10px]"> Sandyq Menu</div>
        <select class="border border-gray-500 w-[255px] h-[40px] rounded-[10px] px-[20px] mb-[170px]">
            <option selected>Category</option>
            <option value="1">Hello</option>
            <option value="1">Hello</option>
        </select>
        <div class="grid grid-cols-4 gap-[24px]">
            @foreach($menus as $menu)
                <div class="relative rounded-[50px] border border-gray-200 shadow-lg">
                    <form class="absolute top-[25px] left-[25px]" method="post" action="{{ route('profile.favorite.add', $menu) }}">
                        @csrf
                        <button type="submit">
                            @auth
                                @if($menu->isFavoritedBy(auth()->user()))
                                    <img src="{{ asset('assets/img/favorite_full.svg') }}" alt=""/>
                                @else
                                    <img src="{{ asset('assets/img/favorite.svg') }}" alt=""/>
                                @endif
                            @else
                                <img src="{{ asset('assets/img/favorite.svg') }}" alt=""/>
                            @endauth
                        </button>
                    </form>
                    <a href="javascript:show()">
                        <img class="h-[250px] object-cover object-center" src="{{ $menu->image }}" alt="img"/>
                    </a>
                    <div class="px-[40px] py-5">
                        <h5 class="mb-2 text-[16px] tracking-tight text-gray-900">{{ $menu->name }}</h5>
                        <div>{{ $menu->cost }}KZT</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-contact-us/>

    <section class="mx-auto w-[1250px] mt-[190px]">
        <img src="{{ asset('assets/img/last_section.svg') }}" alt="img">
    </section>

    <div id="addCart" class="fixed left-0 top-0 flex h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-black/50 hidden">
        <div class="relative w-[1400px] overflow-hidden bg-white">
            <a href="javascript:hidden()">
                <div class="absolute top-[50px] text-[40px] right-[50px] text-white">&#x2715</div>
            </a>
            <div class="h-[160px] w-full bg-[#EB5757]"></div>
            <div class="ml-[92px] w-[520px] pt-[63px]">
                <div class="mb-[200px] text-[42px] font-bold">Beshbarmak</div>
                <div class="mb-[60px] flex flex-col gap-[18px]">
                    <div class="flex items-center gap-[30px]">
                        <div class="flex gap-[12px]">
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                        </div>
                        <div class="text-[18px] font-bold">sweetness</div>
                    </div>
                    <div class="flex items-center gap-[30px]">
                        <div class="flex gap-[12px]">
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                        </div>
                        <div class="text-[18px] font-bold">sweetness</div>
                    </div>
                    <div class="flex items-center gap-[30px]">
                        <div class="flex gap-[12px]">
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                        </div>
                        <div class="text-[18px] font-bold">sweetness</div>
                    </div>
                    <div class="flex items-center gap-[30px]">
                        <div class="flex gap-[12px]">
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full bg-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                            <div class="h-[16px] w-[16px] rounded-full border-[2px] border-black"></div>
                        </div>
                        <div class="text-[18px] font-bold">sweetness</div>
                    </div>
                </div>
                <div class="mb-[100px] text-[32px] font-bold">5800KZT</div>
                <div class="mb-[82px] text-[20px]">
                    <div class="mb-[20px] font-bold">Details</div>
                    <div class="line-clamp-5">Beshbarmak is prepared by first boiling a piece of meat, such as the rump of a horse, or a rack of lamb, or kazy or chuchuk horsemeat sausage. In warm seasons, beshbarmak is usually made with mutton. The noodle dough is made from flour, water, eggs, and salt, and rested for 40 minutes.</div>
                </div>
                <div class="flex gap-[45px] pb-[200px] items-center">
                    <button class="flex items-center gap-[33px] border border-black p-[26px] text-[23px]">
                        <div>&plus;</div>
                        <div>Add</div>
                    </button>
                    <div class="custom-number-input h-10 w-32">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                            <button data-action="decrement" class="text-gray-600 hover:text-gray-700 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input name="count" type="number" class="outline-none focus:outline-none text-center w-full font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700 outline-none" value="0"/>
                            <button data-action="increment" class="text-gray-600 hover:text-gray-700 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </div>
                </div>
                <img class="absolute right-0 top-1/2 w-[1000px] -translate-y-1/2 translate-x-1/4" src="https://www.pngfind.com/pngs/m/54-546688_healthy-food-png-transparent-png.png" alt="img"/>
            </div>
        </div>
    </div>

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

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input input:focus {
            outline: none !important;
        }

        .custom-number-input button:focus {
            outline: none !important;
        }
    </style>

    <script>
        function show() {
            const addCart = document.querySelector("#addCart")
            addCart.classList.remove("hidden")
        }

        function hidden() {
            const addCart = document.querySelector("#addCart")
            addCart.classList.add("hidden")
        }

        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value--;
            target.value = value;
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>
@endsection
