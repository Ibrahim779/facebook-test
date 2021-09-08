<div class="loadMore">
    <div class="central-meta item" style="display: inline-block;">
        @foreach($posts as $post)
        <div class="user-post">

            <div class="friend-info">
                    <figure>
                    <img  src="{{asset('assets/index/user.png')}}" alt="">
                </figure>
                <div class="friend-name">
                    <ins><a href="" title="">{{$post->user->name}}</a>
                        <a href="" title="" class="underline ml-3">
                            follow
                        </a>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash"></i>
                    </ins>
                    <span>published: {{$post->created_at->diffForHumans()}}</span>
                </div>

                <div class="post-meta">
                    <div class="description">

                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                        <a href="/">
                    <img src="{{asset('assets/profile/cover.jpg')}}" alt="">
                        </a>
                    <div class="we-video-info">
                        <ul>
                            <li>
                                <span class="comment" data-toggle="tooltip" title="" data-original-title="Comments">
                                    <i class="fa fa-comments-o"></i>
                                    <ins>{{$post->comments->count()}}</ins>
                                </span>
                            </li>
                            <li>
                                <a href="">
                                <span class="like" data-toggle="tooltip" title="" data-original-title="like">
                                   <i class="fas fa-heart"></i>
                                    <ins>2</ins>
                                </span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                     <span class="dislike" data-toggle="tooltip" title="" data-original-title="dislike">
                                        <i class="fas fa-heart-broken"></i>
                                       <ins>1</ins>
                                     </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="coment-area">
                <ul class="we-comet">
                    @foreach ($post->comments()->get() as $comment)
                       @if($comment)
                    <li>
                        <div class="comet-avatar">
                            <img src="{{asset('assets/index/user.png')}}" alt="">
                        </div>
                        <div class="we-comment">
                            <div class="coment-head">
                                <h5><a href="" title="">
                                        {{$comment->user->name}}
                                    </a>
                                </h5>
                                <span>{{$comment->created_at->diffForHumans()}}</span>
                            </div>
                            <p>
                                {{$comment->body}}
                            </p>
                        </div>
                    </li>
                        @endif
                    @endforeach
                    <li class="post-comment">
                        <div class="comet-avatar">
                            <img src={{asset('assets/index/user.png')}}" alt="">
                        </div>
                        <div class="post-comt-box">
                            <form action="{{route("posts.comments.store",$post->id)}}" method="post">
                                @csrf

                                <textarea name="body" placeholder="Write your comment" required ></textarea>
                                <div class="add-smiles">
                                    <span class="em em-expressionless" title="add icon"></span>
                                </div>
                                <button class="pb-3" type="submit"><span style="color: #2fa7cd">send</span></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
