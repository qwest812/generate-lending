<!-- Feedback section end -->

<a name="feedback"></a>

<section class="feedback-container" style="background-image: url({{url('storage/images/feedback-bg.jpg')}})">

    <h2 class="feed-title">ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h2>
    <div class="feed-group">
        @if(!empty($comments))
            @foreach($comments as $comment)
                <div class="feed-item">
                    <div style="background-image: url({{$comment['url-img']}})" class="feed-img"></div>
                    <div class="feed-content">
                        <div class="feed-name">{{$comment['name']}}</div>
                        <div class="feed-text">{{$comment['content']}}</div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>

<!-- Feedback section end -->
