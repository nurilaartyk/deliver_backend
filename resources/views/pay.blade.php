@extends('layouts.app')

@section('content')
    <div class="mx-auto w-[1300px] py-[50px]">
        <div class="grid grid-cols-10 gap-[32px]">
            <div class="col-span-6 rounded-[28px] bg-[#FFB7B7] p-[40px]">
                <div class="mb-[50px] flex justify-around text-[20px] font-medium">
                    <div class="text-white">Shipping</div>
                    <div class="text-black">Payment</div>
                </div>
                <div class="grid grid-cols-2 gap-[20px] font-medium">
                    <div class="col-span-2 text-[20px]">Shipping details</div>
                    <div class="flex items-center">Use saved address</div>
                    <div class="w-full">
                        <select class="block h-[60px] w-full rounded-[5px] bg-white p-2.5 text-sm text-[#2D3748]">
                            <option selected>123 , Electric avenue</option>
                            <option value="US">United States</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-[20px]">First line of address</div>
                        <input type="text" class="h-[60px] w-full rounded-[5px] px-[20px]"/>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-[20px]">Street name</div>
                        <input type="text" class="h-[60px] w-full rounded-[5px] px-[20px]"/>
                    </div>
                    <div>
                        <div class="mb-[20px]">Postcode</div>
                        <input type="text" class="h-[60px] w-full rounded-[5px] px-[20px]"/>
                    </div>
                    <div>
                        <div class="mb-[20px]">Select shipping</div>
                        <select class="block h-[60px] w-full rounded-[5px] bg-white p-2.5 text-sm text-[#2D3748]">
                            <option selected>123 , Electric avenue</option>
                            <option value="US">United States</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-4 rounded-[28px] bg-[#FFB7B7] p-[30px]">
                <div class="mb-[10px] text-[20px] font-medium">Order Summary</div>
                <div class="mb-[20px] flex justify-center">
                    <img class="h-[185px] w-[280px] object-cover" src="https://caspiannews.com/media/caspian_news/all_original_photos/1503299057_2399406_1503298772_853446besbarmak.jpg" alt="img"/>
                </div>
                <div class="mb-[50px]">
                    <div class="mb-[20px] text-[18px] font-medium">Gift Card / Discount code</div>
                    <div class="grid grid-cols-3 gap-[20px]">
                        <input type="text" class="col-span-2 h-[60px] w-full rounded-[5px] px-[20px]"/>
                        <button class="rounded-[5px] border-[2px] border-[#3182CE] font-medium text-[#3182CE]">Apply</button>
                    </div>
                </div>
                <div class="mb-[20px] flex justify-between text-[18px] font-medium">
                    <div>Sub total</div>
                    <div>15000 KZT</div>
                </div>
                <div class="mb-[20px] flex justify-between text-[18px] font-medium">
                    <div>Shipping</div>
                    <div>1000 KZT</div>
                </div>
                <div class="mb-[20px] flex justify-between text-[18px] font-medium">
                    <div>Total</div>
                    <div>15000 KZT</div>
                </div>
            </div>
        </div>
    </div>
@endsection
