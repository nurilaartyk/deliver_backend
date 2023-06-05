<footer class="pt-[50px] pb-[100px]">
    <div class="mx-auto w-[1300px]">
        <div class="grid grid-cols-6">
            <div class="col-span-2 flex flex-col gap-[35px]">
                <img src="{{ asset('assets/img/logo.svg') }}" class="w-[185px]" alt="img" />
                <div>
                    Our job is to filling your tummy with<br />delicious food and with fast and<br />free delivery.
                </div>
            </div>
            <div class="flex flex-col gap-[20px]">
                <div class="text-[20px] font-bold">About</div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">About Us</a>
                </div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('recipe.index') }}">Recipe</a>
                </div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">Menu</a>
                </div>
            </div>
            <div class="flex flex-col gap-[20px]">
                <div class="text-[20px] font-bold">Company</div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">Tandyr</a>
                </div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">Partner With Us</a>
                </div>
            </div>
            <div class="flex flex-col gap-[20px]">
                <div class="text-[20px] font-bold">Support</div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">Feedback</a>
                </div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">Contact Us</a>
                </div>
            </div>
            <div class="flex flex-col gap-[20px]">
                <div class="text-[20px] font-bold">Get in Touch</div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">Question or feedback?</a>
                </div>
                <div class="text-[16px] font-normal">
                    <a href="{{ route('about.index') }}">We’d love to hear from you</a>
                </div>
            </div>
        </div>
    </div>
</footer>