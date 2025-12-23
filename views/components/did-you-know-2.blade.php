<section class="base-container">
    <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
        <img src="{{ asset('assets/images/repair_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        <div class="mt-10">
            @include('components.section-summary', [
                'header' => 'Did you know?',
                'caption' =>
                    'Autofusion is a leading Glasgow area garage offering the highest-quality insurance-approved trackers in Glasgow and exceptional service to drivers across the region so that you can reduce the impact of car theft on your business or personal life.',
            ])
            <a href="{{ route('about') }}" data-aos="fade-right" data-aos-delay="200" class="mt-7 btn btn-primary">Learn more about us</a>
        </div>
    </div>
</section>
