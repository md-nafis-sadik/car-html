@props([
    'name',
    'route',
    'photo',
    'index',
    'title'
])

<div class="w-full sm:w-[189px] h-[150px] sm:h-[245px] rounded-[21px] overflow-hidden relative group transition-all bg-white" data-aos="fade-up">
    <a href="{{ $route }}" title="{{ $title }}" class="stretched-link">
        <img src="{{ $photo }}" class="object-contain w-20 sm:w-[108px] h-full transition-all group-hover:scale-105 relative -translate-y-[60%] top-1/2 left-1/2 -translate-x-1/2" alt="{{ $name }}">
    </a>
    <div class="absolute bottom-0 left-0 z-10 w-full px-2 sm:px-5">
        <div class="flex justify-between items-center gap-5 pb-3 sm:pb-[22px]">
            <p class="text-dark font-bold text-sm sm:text-base max-w-[120px]">
                {{ $name }}
            </p>
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.75" y="0.407227" width="25.9935" height="26.5103" rx="8" class="transition-all fill-[#2c2f36]"/>
                <path d="M10.2031 18.1816V10.2804C10.2031 9.28438 11.3026 8.68066 12.143 9.21516L18.059 12.9776C18.8187 13.4608 18.8429 14.5612 18.1052 15.0773L12.1892 19.216C11.3524 19.8014 10.2031 19.2028 10.2031 18.1816Z" class="transition-all fill-white"/>
            </svg>
        </div>
    </div>
</div>
