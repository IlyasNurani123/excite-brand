<div class="who-we-are-wrapper">
    <div class="banner-image-main-section">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','who we are')
        ->get();
        @endphp
        @foreach ($banner as $ban)
            <img class="banner-image" src="{{ asset('storage/' . $ban->image) }}">
            @break
        @endforeach
        {{-- <div class="banner-description text-align-center">
            <h1 class="banner-title-caption">WHO WE ARE</h1>
        </div> --}}
    </div>
    @include('livewire.user-interface.who-we-are.we-make-you-brand-talk')

    @include('livewire.user-interface.who-we-are.why-excite-brand')
    @livewire('user-interface.lets-talk')

</div>
