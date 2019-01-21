<div class="row banner-bottom">
    @foreach($banner_bottom as $banner_bottoms)
        <div class="col-sm-6">
            <div class="banner-boder-zoom">
                <a href="#"><img alt="ads" title="{{ $banner_bottoms->title }}" class="img-responsive" src="{{url('/')}}/public/images/banner/{{ $banner_bottoms->name }}" /></a>
            </div>
        </div>
    @endforeach
</div>