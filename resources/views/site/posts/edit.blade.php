@extends('layout.site')
@section('content')
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('site.parts.sidebar.left.index')
                            <div class="col-lg-6">
                                <div class="central-meta new-pst">
                                    <div class="new-postbox">
                                        <figure>
                                            <a href="#">
                                                <img  src="{{asset('assets/index/user.png')}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="newpst-input">
                                            <form action="{{route("posts.update",$post->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method("PATCH")
                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                <textarea name="body" rows="2" placeholder="what do you think?">{{$post->body}}</textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input name="img" type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <button type="submit">edit</button>
                                                        </li>
                                                    </ul>
                                                </div>
{{--                                                <img src="{{asset('assets/profile/cover.jpg')}}" style="width:150px; height:150px" >--}}
                                            </form>
                                            <img src="{{asset('assets/profile/cover.jpg')}}" style="width:120px; height:100px; margin-top:15px;">
                                        </div>
                                    </div>
                                </div><!-- add post new box -->
                                <div class="central-meta item" style="display: inline-block;">
                                        <div class="user-post">
                                            <div class="friend-info" style="position: relative;">
                                                <figure>
                                                    <img  src="{{asset('assets/index/user.png')}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins >
                                                        <a href="" title="">{{$post->user->name}}</a>
                                                        <a href="" title="" class="underline ml-3">
                                                            follow
                                                        </a>
                                                        <div style="position: absolute; top:0 ;right:0" >
{{--                                                            <a href="{{route("posts.edit",$post->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>--}}
                                                            <form action="{{route("posts.destroy",$post->id)}}" method="post" style="display: inline-block;">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                            </form>

                                                        </div>
                                                    </ins>
                                                    <span>published: {{$post->created_at->diffForHumans()}}</span>
                                                </div>

                                                <a href="{{route("posts.show",$post->id)}}">
                                                    <div class="post-meta">
                                                        <div class="description">

                                                            <p>
                                                                {{$post->body}}
                                                            </p>
                                                        </div>
                                                        <img src="{{asset('assets/profile/cover.jpg')}}" alt="">
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
                                                </a>

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
                                </div>
                            </div><!-- centerl meta -->
                            @include('site.parts.sidebar.right.index')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
