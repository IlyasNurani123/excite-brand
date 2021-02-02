<div>
    <div class="banner-image">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','we support')
        ->get();
        @endphp
        @foreach ($banner as $ban)
            <img class="banner-image" src="{{ asset('storage/' . $ban->image) }}">
            @break
        @endforeach
        {{-- <div class="banner-description text-align-center">
            <h1>Our Support</h1>
        </div> --}}
    </div>
    @livewire('user-interface.services.support.support-feature')
    @livewire('user-interface.services.support.support-detail-description')
    @livewire('user-interface.lets-talk')
</div>
