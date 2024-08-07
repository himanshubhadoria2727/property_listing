<div class="mt-3">
    <h5 class="headifhouse">{{ $title }}</h5>
    <div class="d-print-none row justify-content-center">
        <div class="px-3 position-relative overlay-icon w-100">
            <a href="{{ Botble\Theme\Supports\Youtube::getYoutubeVideoEmbedURL($object->video_url) }}" class="popup-youtube">
                <img src="{{ get_image_from_video_property($object) }}" alt="{{ $object->name }}" class="img-fluid rounded w-100">
                <div class="video-popup-btn">
                    <div class="video-popup-icon">
                        <i class="fal fa-play-circle fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="d-none d-print-block">
        <a href="{{ $object->video_url }}" class="text-decoration-none">
            {{ $object->video_url }}
        </a>
    </div>
</div>
