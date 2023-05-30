<section class="mx-auto w-[1300px]">
    <div class="grid grid-cols-2 items-center">
        <div>
            <div class="relative inline-flex">
                <img class="h-[696px] w-[577px] rounded-[100px] object-cover shadow-xl"
                     src="{{ asset('assets/img/contact_us_bg.png') }}" alt="img"/>
                <div class="absolute bottom-[-38px] right-[32px] rounded-[20px] bg-white p-[30px] shadow-lg">
                    <div class="mb-[15px] text-[20px] font-semibold">Our Reviewers</div>
                    <div class="flex -space-x-4">
                        @foreach($contact_us as $item)
                            <img class="h-[64px] w-[64px] rounded-full"
                                 src="https://api.dicebear.com/6.x/initials/svg?seed={{ $item->first_name }}"
                                 alt="img"/>
                        @endforeach
                        <a class="flex h-[64px] w-[64px] items-center justify-center rounded-full bg-[#EB5757] text-[15px] font-semibold text-white hover:bg-gray-600"
                           href="#">1k+</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <swiper-container class="mySwiper my-[80px]">
                @foreach($contact_us as $item)
                    <swiper-slide>
                        <div class="text-[18px] font-semibold text-[#EB5757] mb-[20px]">WHAT THEY SAY</div>
                        <div class="text-[45px] font-bold mb-[20px]">What Our Customers Say About Us</div>
                        <div class="mb-[70px]">
                            {{ $item->body }}
                        </div>
                        <div class="flex items-center gap-[12px] mb-[40px]">
                            <img class="h-[64px] w-[64px] rounded-full" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $item->first_name }}" alt=""/>
                            <div class="text-[20px] font-medium">{{ $item->first_name }} {{ $item->last_name }}</div>
                        </div>
                        <div class="flex items-center gap-[16px]">
                            <ul class="flex justify-center">
                                @for($i = 0; $i < $item->raiting; $i++)
                                    <i class="fas fa-star text-yellow-300"></i>
                                @endfor
                                @for($i = $item->raiting; $i < 5; $i++)
                                    <i class="fal fa-star text-yellow-300"></i>
                                @endfor
                            </ul>
                            {{ $item->raiting }}.0
                        </div>
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>
    </div>
</section>
