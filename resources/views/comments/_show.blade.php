<ul id="comments_list">

   @foreach($comments as $comment)
     <li class="post-reply">
        <div class="image-reply-post"></div>
        <div class="name-reply-post">{{ $comment->user_name}}</div>
        <div class="text-reply-post">{!! $comment->content !!}</div>
      </li>
   @endforeach

</ul>