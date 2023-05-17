@extends('layouts.app')

@section('content')
    <section class="bg-auth flex h-screen w-full items-center justify-end bg-cover bg-no-repeat pr-[40px]">
        <div class="w-[540px] rounded-[40px] bg-white/75 p-[44px] pb-[80px]">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="flex justify-between text-[21px]">
                    <div>Welcome to Tandyr</div>
                    <div class="text-[13px] text-[#8D8D8D]">
                        Have an Account?<br />
                        <a class="text-[#EB5757]" href="{{ route('login') }}">Sign in</a>
                    </div>
                </div>
                <div class="mb-[45px] text-[55px] font-medium">Sign up</div>
                <div class="mb-[35px]">
                    <div class="mb-[15px] text-[16px]">Email address</div>
                    <input name="email" type="text" class="h-[57px] w-full rounded-[10px] border border-[#ADADAD] bg-white px-[25px]" placeholder="Email address" />
                </div>
                <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                    <div>
                        <div class="mb-[15px] text-[16px]">Full name</div>
                        <input name="full_name" type="text" class="h-[57px] w-full rounded-[10px] border border-[#ADADAD] bg-white px-[25px]" placeholder="Full name" />
                    </div>
                    <div>
                        <div class="mb-[15px] text-[16px]">Contact Number</div>
                        <input name="number" type="text" class="h-[57px] w-full rounded-[10px] border border-[#ADADAD] bg-white px-[25px]" placeholder="Contact Number" />
                    </div>
                </div>
                <div class="mb-[65px]">
                    <div class="mb-[15px] text-[16px]">Enter your password</div>
                    <input name="password" type="password" class="h-[57px] w-full rounded-[10px] border border-[#ADADAD] bg-white px-[25px]" placeholder="Password" />
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="h-[55px] w-[240px] rounded-[10px] bg-[#EB5757] font-medium text-white">Sign up</button>
                </div>
            </form>
        </div>
    </section>

    <style>
        .bg-auth {
            background-image: url({{ asset('assets/img/auth.png') }});
        }
    </style>
@endsection
