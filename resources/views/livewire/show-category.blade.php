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
        <div class="scrollbar-custom overflow-y-auto overflow-x-hidden h-[570px] inline-block space-y-[30px] pr-[90px] pl-[10px]">
            @foreach($categories as $category)
                <button wire:click="category('{{$category->id}}')" class="{{ $category_id == $category->id ? 'selected' : 'not-selected' }} rounded-full w-[255px] h-[85px] text-[24px] font-medium flex items-center justify-center">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>
        <div></div>
        <div class="scrollbar-hidden flex flex-row overflow-x-auto h-[500px] w-[760px] space-x-[30px] rounded-[32px]">
            @foreach($menus as $menu)
                <img src="{{ $menu->restauran->image }}" class="rounded-[32px] inline-block w-[440px] h-[500px] object-cover" alt="img">
            @endforeach
        </div>
        <div></div>
    </div>
</section>
