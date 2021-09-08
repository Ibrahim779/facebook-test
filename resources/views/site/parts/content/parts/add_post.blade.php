<div class="central-meta new-pst">
    <div class="new-postbox">
        <figure>
            <a href="#">
            <img  src="{{asset('assets/index/user.png')}}" alt="">
            </a>
        </figure>
        <div class="newpst-input">
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <textarea name="description" rows="2" placeholder="write something"></textarea>
                <div class="attachments">
                    <ul>
                        <li>
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input name="image" type="file">
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
