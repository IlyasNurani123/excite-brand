<div>
    <div class="banner-image">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','seo service')
        ->get();
        @endphp
        @foreach ($banner as $ban)
            <img class="banner-image" src="{{ asset('storage/' . $ban->image) }}">
            @break
        @endforeach
        <div class="banner-description text-align-center">
            {{-- <h1>Our Blog And News</h1> --}}
            {{-- <h6></h6> --}}
        </div>
    </div>
    @livewire('user-interface.services.seo-service.seo-features')
    @include('livewire.user-interface.services.seo-service.our-expertise')
    @include('livewire.user-interface.services.seo-service.why-customer-love-us')
    @include('livewire.user-interface.services.seo-service.our-happy-customer-says')
    @livewire('user-interface.lets-talk')

</div>
