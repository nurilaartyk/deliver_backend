@extends('layouts.app')

@section('content')
    <section class="mx-auto flex flex-col items-center bg-[#FBFBFB] mb-[180px] pt-[100px]">
        <div class="mb-[10px] text-[40px] font-bold text-[#EB5757]">Contact Us</div>
        <div class="mb-[50px] text-[18px] font-medium text-[#333333]">Any question or remarks? Just write us a message!</div>
        <div class="grid w-[1200px] grid-cols-12 rounded-[10px] bg-white p-[10px]">
            <div class="col-span-5 rounded-[10px] bg-[#EB5757] p-[40px]">
                <div class="mb-[15px] text-[28px] font-semibold text-white">Contact Information</div>
                <div class="mb-[100px] text-[18px] text-[#C9C9C9]">Say something to start a live chat!</div>
                <div class="mb-[160px] flex flex-col gap-[50px]">
                    <div class="flex items-center gap-[30px] text-white">
                        <img src="{{ asset('assets/img/contact.svg') }}" alt="img"/>
                        <div>+1012 3456 789</div>
                    </div>
                    <div class="flex items-center gap-[30px] text-white">
                        <img src="{{ asset('assets/img/contact.svg') }}" alt="img"/>
                        <div>demo@gmail.com</div>
                    </div>
                    <div class="flex items-center gap-[30px] text-white">
                        <img src="{{ asset('assets/img/contact.svg') }}" alt="img"/>
                        <div>132 Dartmouth Street Boston,<br/>Massachusetts 02156 United States</div>
                    </div>
                </div>
                <div class="flex items-center gap-[24px]">
                    <img src="{{ asset('assets/img/twitter.svg') }}" alt="img"/>
                    <img src="{{ asset('assets/img/instagram.svg') }}" alt="img"/>
                    <img src="{{ asset('assets/img/discord.svg') }}" alt="img"/>
                </div>
            </div>
            <div class="col-span-7 p-[50px]">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-[40px]">
                        <div>
                            <div class="text-[12px] font-medium">First Name</div>
                            <input name="first_name" class="w-full border-b border-[#8D8D8D]" type="text"/>
                        </div>
                        <div>
                            <div class="text-[12px] font-medium">Last Name</div>
                            <input name="last_name" class="w-full border-b border-[#8D8D8D]" type="text"/>
                        </div>
                        <div>
                            <div class="text-[12px] font-medium">Email</div>
                            <input name="email" class="w-full border-b border-[#8D8D8D]" type="text"/>
                        </div>
                        <div>
                            <div class="text-[12px] font-medium">Phone Number</div>
                            <input name="number" class="w-full border-b border-[#8D8D8D]" type="text"/>
                        </div>
                        <div class="col-span-2">
                            <div class="mb-[15px] font-semibold">Rating by Star</div>
                            <div class="flex gap-[10px]">
                                <input type="radio" name="raiting" value="5"/>
                                <div>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                </div>
                            </div>
                            <div class="flex gap-[10px]">
                                <input type="radio" name="raiting" value="4"/>
                                <div>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                </div>
                            </div>
                            <div class="flex gap-[10px]">
                                <input type="radio" name="raiting" value="3"/>
                                <div>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                </div>
                            </div>
                            <div class="flex gap-[10px]">
                                <input type="radio" name="raiting" value="2"/>
                                <div>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                </div>
                            </div>
                            <div class="flex gap-[10px]">
                                <input type="radio" name="raiting" value="1"/>
                                <div>
                                    <i class="fas fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                    <i class="fal fa-star text-yellow-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="text-[12px] font-medium">Phone Number</div>
                            <input name="body" class="w-full border-b border-[#8D8D8D]" type="text" placeholder="Write your message..."/>
                        </div>
                        <div class="col-span-2 flex justify-end">
                            <button class="flex h-[55px] w-[215px] items-center justify-center rounded-[5px] bg-[#EB5757] font-medium text-white">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
