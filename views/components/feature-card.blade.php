@props([
    'name',
    'route',
    'photo',
    'isComing' => 0,
    'index'
])

<div class="w-full sm:w-[189px] h-[150px] sm:h-[245px] rounded-[21px] overflow-hidden relative group transition-all ring-transparent ring-4 lg:ring-8 hover:ring-[#505258] bg-white" data-aos="fade-up" data-aos-delay="{{ ($index+1) * 100 }}">
    <a href="{{ $route }}" class="stretched-link">
        <img src="{{ $photo }}" class="w-full h-full transition-all group-hover:scale-105" alt="{{ $name }}">
    </a>
    <div class="absolute bottom-0 left-0 z-10 w-full px-2 sm:px-5 bg-gradient-to-b from-[rgba(0,0,0,0)] to-black">
        @if ($isComing)
            <div class="uppercase text-white font-bold text-[10px] py-[5px] px-[7px] bg-dark bg-opacity-70 rounded-[7px] text-center w-fit">
                coming soon
            </div>
        @endif
        <img src="{{ asset('assets/svgs/green_lantern_horizontal.svg') }}" class="my-5" alt="">
        <div class="flex justify-between items-center gap-5 pb-3 sm:pb-[22px]">
            <p class="text-white font-bold text-sm sm:text-base max-w-[120px]">
                {{ $name }}
            </p>
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.75" y="0.407227" width="25.9935" height="26.5103" rx="8" class="transition-all fill-white group-hover:fill-primary"/>
                <path d="M10.2031 18.1816V10.2804C10.2031 9.28438 11.3026 8.68066 12.143 9.21516L18.059 12.9776C18.8187 13.4608 18.8429 14.5612 18.1052 15.0773L12.1892 19.216C11.3524 19.8014 10.2031 19.2028 10.2031 18.1816Z" class="transition-all fill-primary group-hover:fill-white"/>
            </svg>
        </div>
    </div>
</div>
