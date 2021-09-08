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
                            <div class="loadMore">
                                <div class="central-meta item" style="display: inline-block;">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img
                                                        src="{{asset('assets/index/user.png')}}"
                                                        alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="" title=""></a>
                                                            <a href="" title="" class="underline ml-3">
                                                                    follow
                                                            </a>
                                                    </ins>
                                                    <span>published: 2-2-2000 </span>
                                                </div>

                                                <div class="post-meta">
                                                    <div class="description">

                                                        <p>
                                                            Hello world
                                                        </p>
                                                    </div>
                                                        <img src="{{asset('assets/profile/cover.jpg')}}" alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title="" data-original-title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>0</ins>
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
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{asset('assets/index/user.png')}}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="" title="">
                                                                            test
                                                                        </a></h5>
                                                                    <span>3</span>

                                                                </div>
                                                                <p>
                                                                    test
                                                                </p>
                                                            </div>
                                                        </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <textarea name="description" placeholder="Post your comment">{{old('description')}}</textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless" title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button class="pb-3" type="submit"><span style="color: #2fa7cd">send</span></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </div>
                            {{--                            @include('site.parts.sidebar.right.index')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
