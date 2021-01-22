<div>
    <div class="banner-image">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','we promote')
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
    @livewire('user-interface.services.we-promote.we-promote-features')
    @livewire('user-interface.services.we-promote.promote-detail-description')
    @livewire('user-interface.lets-talk')
    @livewire('user-interface.newsletters')
</div>
