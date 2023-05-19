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
    <section class="mx-auto w-[1300px] mb-[200px] flex flex-col items-center">
        <div class="mb-[50px] w-[768px] rounded-[40px] bg-white shadow-lg">
            <div class="rounded-t-[40px] bg-[#EB5757] p-5 text-center font-bold text-white">Account Information</div>
            <div class="py-[44px] pb-[80px]">
                @foreach($cards as $card)
                    <div class="flex px-[30px] py-[15px] shadow-lg">
                        <img class="mr-[40px] object-contain" src="{{ asset('assets/img/card_pay.png') }}" alt="img"/>
                        <div>Visa *{{ substr($card->number, -4) }}</div>
                    </div>
                @endforeach
                <a href="javascript:show()">
                    <div class="flex px-[30px] py-[15px] shadow-lg">
                        <img class="mr-[40px]" src="{{ asset('assets/img/plus.svg') }}" alt="img"/>
                        <div>Add card</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <div id="addCard" class="fixed overflow-x-hidden overflow-y-auto top-0 left-0 flex items-center justify-center bg-black/50 w-full h-full hidden">
        <div class="mb-[50px] w-[768px] rounded-[40px] bg-white mt-[20px] shadow-lg">
            <div class="rounded-t-[40px] bg-[#EB5757] p-5 text-center font-bold text-white">Account Information</div>
            <div class="p-[44px] pb-[80px]">
                <form action="{{ route('profile.cards.add') }}" method="post">
                    @csrf
                    <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                        <div>
                            <input name="number" type="text" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Card Number"/>
                        </div>
                        <div>
                            <input name="name" type="text" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Name"/>
                        </div>
                    </div>
                    <div class="mb-[35px] grid grid-cols-2 gap-[20px]">
                        <div>
                            <input name="date" type="text" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="Date"/>
                        </div>
                        <div>
                            <input name="cvv" type="password" class="h-[57px] w-full rounded-[10px] border bg-[#EAEAEA] px-[25px]" placeholder="CVV"/>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="h-[45px] w-[240px] rounded-[10px] bg-[#EB5757] font-medium text-white">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function show() {
            const addUserWindow = document.querySelector("#addCard")
            addUserWindow.classList.toggle("hidden")
        }
    </script>
@endsection
