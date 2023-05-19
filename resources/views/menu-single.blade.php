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
                    <div class="mb-[70px]">“Tandyr is the best. Besides the many and delicious meals, the service is
                        also very good . I
                        highly recommend Tandyr to you”.
                    </div>
                    <div class="flex items-center gap-[12px] mb-[40px]">
                        <img class="h-[64px] w-[64px] rounded-full"
                             src="https://i.pinimg.com/originals/cd/bc/f0/cdbcf077b62246123f74fcc919587b0b.jpg" alt=""/>
                        <div class="text-[20px] font-medium">Serikbay Assem</div>
                    </div>
                    <div class="flex items-center gap-[16px]">
                        <ul class="flex justify-center">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F2C94C"
                                     class="text-warning mr-1 h-5 w-5">
                                    <path fill-rule="evenodd"
                                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F2C94C"
                                     class="text-warning mr-1 h-5 w-5">
                                    <path fill-rule="evenodd"
                                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F2C94C"
                                     class="text-warning mr-1 h-5 w-5">
                                    <path fill-rule="evenodd"
                                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="#F2C94C" class="text-warning mr-1 h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="#F2C94C" class="text-warning mr-1 h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                                </svg>
                            </li>
                        </ul>
                        4.8
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <div class="flex gap-[45px] pb-[200px]">
                    <button class="flex items-center gap-[33px] border border-black p-[26px] text-[23px]">
                        <div>&minus;</div>
                        <div>Add</div>
                    </button>
                    <div class="flex items-center rounded text-[23px]">
                        <button type="button" class="h-10 w-10 leading-10 text-gray-600 transition hover:opacity-75">&minus;</button>
                        <input name="count" type="number" value="1" class="h-10 w-16 border-transparent text-center text-[23px] [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                        <button type="button" class="h-10 w-10 leading-10 text-gray-600 transition hover:opacity-75">&plus;</button>
                    </div>
                </div>
            </div>
            <img class="absolute right-0 top-1/2 w-[1000px] -translate-y-1/2 translate-x-1/4" src="https://www.pngfind.com/pngs/m/54-546688_healthy-food-png-transparent-png.png" alt="img" />
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
    </script>
@endsection
