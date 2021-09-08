<section>
    <div class="feature-photo">
        <figure><img style="width: 100%; height: 450px" src="{{asset('assets/profile/cover.jpg')}}" alt=""></figure>
        <div class="add-btn">
            <span>1 Followers</span>
                <a href="" title="" class="underline ml-3">
                    Follow
                </a>

        </div>
        <form method="post" action="" enctype="multipart/form-data" class="edit-phto">
            @method('PATCH')
            @csrf
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input name="cover" type="file">
            </label>
            <button type="submit">change</button>
        </form>

        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="{{asset('assets/index/user.png')}}"
                                 alt=""
                            >

                            <form method="post" action="" enctype="multipart/form-data" class="edit-phto">
                                @method('PATCH')
                                @csrf
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input name="avatar" type="file">
                                </label>
                                <button type="submit">change</button>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>Ali</h5>
                                <span>Ali@Ali.com</span>
                            </li>
                            <li>
                                <a class="" href="" title="" data-ripple="">time line</a>
                                <a class="" href="" title="" data-ripple="">Followers</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area -->
