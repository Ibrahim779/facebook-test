<div class="col-lg-6">
    <div class="central-meta">
        <div class="frnds">
            <ul class="nav nav-tabs">

                <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Followers</a> <span>1</span></li>
                <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Following</a><span>1</span></li>

                    <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">All Users</a> <span>1</span></li>
                    <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Random Users</a> <span>1</span></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active fade show" id="frends">
                    <ul class="nearby-contct">
                        @forelse($users as $user)
                        <li>
                            <div class="nearly-pepls">
                                <figure>
                                    <a href="{{route("users.show",$user->id)}}" title="">
                                        <img src="{{asset('assets/index/user.png')}}" alt="">
                                    </a>
                                </figure>
                                <div class="pepl-info">
                                    <h4><a href="{{route("users.show",$user->id)}}" title="">{{$user->name}}</a></h4>
                                    <span>{{$user->email}}</span>
                                    <a href="" title="" class="add-butn">
                                        follow
                                    </a>
                                </div>
                            </div>
                        </li>
                        @empty
                            <li>
                                Not Found users
                            </li>
                        @endforelse
                    </ul>
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div>
                <div class="tab-pane fade" id="frends-req">
                    <ul class="nearby-contct">
                            <li>
                                <div class="nearly-pepls">
                                    <figure>
                                        <a href="" title=""> <img
                                                src="{{asset('assets/profile/cover.jpg')}}"
                                                alt=""
                                            >
                                        </a>
                                    </figure>
                                    <div class="pepl-info">
                                        <h4><a href="" title="">name</a></h4>
                                        <span>email</span>
                                        <a href="" title="" class="add-butn">
                                            follow
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                Not Found Following
                            </li>
                    </ul>
                    <button class="btn-view btn-load-more"></button>
                </div>
            </div>
        </div>
    </div>
</div>
