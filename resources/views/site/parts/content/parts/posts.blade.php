<div class="loadMore">
    <div class="central-meta item" style="display: inline-block;">
        @foreach($posts as $post)
        @include('site.posts.parts.post-card', ['edit' => true])
            <hr style="color: #fff ; height: 3px;font-size: 100px;background-color: #505050;">
        @endforeach
    </div>
</div>
