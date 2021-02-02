<div class="ppc-agency-section">
    <div class="banner-image ppc-agency">
        {{-- @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','ppc Agency')
        ->get();
        @endphp
        @foreach ($banner as $ban) --}}
            <img class="banner-image mt-5" src="{{ asset('images/slider/PPC AGENCY.png') }}">
            {{-- @break
        @endforeach
        <div class="banner-description text-align-center">
            {{-- <h1>Our Blog And News</h1> --}}
            {{-- <h6></h6> --}}
        {{-- </div> --}} --}}
        </div>
        @include('livewire.user-interface.services.seo-service.ppc-detail-description')
        @livewire('user-interface.lets-talk')
    </div>
