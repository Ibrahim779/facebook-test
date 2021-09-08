<div class="central-meta new-pst">
    <div class="new-postbox">
        <figure>
            <a href="#">
            <img  src="{{asset('assets/index/user.png')}}" alt="">
            </a>
        </figure>
        <div class="newpst-input">
            <form action="{{route("posts.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <textarea name="body" rows="2" placeholder="what do you think?"></textarea>
                <div class="attachments">
                    <ul>
                        <li>
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input name="img" type="file">
                            </label>
                        </li>
                        <li>
                            <button type="submit">Post</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div><!-- add post new box -->
