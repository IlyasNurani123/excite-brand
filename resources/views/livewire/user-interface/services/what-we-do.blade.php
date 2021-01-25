<div class="what-we-do-page">
    <div class="banner-image-main-section">
        @php
        $banner = App\Models\Banner::where('status',1)
        ->Where('banner_name','what we do')
        ->get();
        @endphp
        @foreach ($banner as $ban)
            <img class="banner-image" src="{{ asset('storage/' . $ban->image) }}">
            @break
        @endforeach
        <div class="banner-description text-align-center">
            <h1 class="banner-title-caption">WE DO </h1>

        </div>
    </div>
    @include('livewire.user-interface.services.let-your-brand-recognized')
    @livewire('user-interface.lets-talk')
</div>
