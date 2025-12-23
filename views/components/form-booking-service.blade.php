@props([
    'action',
    'method'
])
<form action="{{ $action }}" method="{{ $method ?? "POST" }}" class="mt-[30px] mb-16 flex flex-col sm:flex-row gap-[9px]">
    @csrf
    <x-input-field type="text" name="vehicleReg" class-name="w-full sm:w-[295px] uppercase" placeholder="Enter Vehicle Reg" />
    <button type="submit" class="btn btn-primary sm:ml-0">
        Start Booking
    </button>
</form>
