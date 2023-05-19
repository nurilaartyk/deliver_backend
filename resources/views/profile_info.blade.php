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
    <section class="mx-auto w-[1300px] mb-[120px] flex flex-col items-center">
        <div class="mb-[50px] w-[768px] rounded-[40px] bg-white mt-[20px] shadow-lg">
            <div class="rounded-t-[40px] bg-[#EB5757] p-5 text-center font-bold text-white">Account Information</div>
            <div class="p-[44px] pb-[80px]">
                <form action="{{ route('profile.info.data') }}" method="post">
                    @csrf
                    <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                        <div>
                            <input name="name" value="{{ $user->name }}" type="text" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Full name"/>
                        </div>
                        <div></div>
                    </div>
                    <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                        <div>
                            <input name="email" value="{{ $user->email }}" type="text" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Email"/>
                        </div>
                        <div>
                            <input name="number" value="{{ $user->number }}" type="text" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Contact Number"/>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="h-[45px] w-[240px] rounded-[10px] bg-[#EB5757] font-medium text-white">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-[768px] rounded-[40px] bg-white shadow-lg ">
            <div class="rounded-t-[40px] bg-[#EB5757] p-5 text-center font-bold text-white">Change password</div>
            <div class="p-[44px] pb-[80px]">
                <form action="{{ route('profile.info.password') }}" method="post">
                    @csrf
                    <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                        <div>
                            <input name="old_password" type="password" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Old Password"/>
                        </div>
                        <div></div>
                    </div>
                    <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                        <div>
                            <input name="new_password" type="password" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="New Password"/>
                        </div>
                        <div>
                            <input name="new_password_confirmation" type="password" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Confirm the password"/>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="h-[45px] w-[240px] rounded-[10px] bg-[#EB5757] font-medium text-white">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
