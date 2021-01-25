<div>
    <div class="banner-image">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','ppc Agency')
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
    @include('livewire.user-interface.services.seo-service.ppc-detail-description')
    @livewire('user-interface.lets-talk')
</div>
