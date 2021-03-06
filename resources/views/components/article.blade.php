@if(isset($articles))
    @foreach($articles as $article)
        <div class="article" style="padding: 10px 0;margin-bottom: 10px;border-bottom: 1px solid #f2f2f2;display: flex;">
            <div class="article_avatar">
                <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">
                    <img src="{{ asset(pare_url_file($article->a_avatar)) }}" style="width: 200px;height: 120px;" alt="">
                </a>
            </div>
            <div class="article_info" style="width: 80%;margin-left: 20px;">
                <h2 style="font-size: 14px;"><a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">{{ $article->a_name }}</a></h2>
                <p style="text-align: justify;">{{ $article->a_description }}</p>
                <p>Lê Quang Nhật <span>{{ $article->created_at }}</span></p>
            </div>
        </div>
    @endforeach

@endif
