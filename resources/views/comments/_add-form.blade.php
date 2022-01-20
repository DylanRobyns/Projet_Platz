<div class="post-send">
  <div id="main-post-send">
    <div id="title-post-send">Add your comment</div>
      <form id="contact" name="contact" method="get" action="{{ route('comments.add') }}">
        <fieldset>
          <input type="text" id="name" name="name" placeholder="Votre Nom">
          <p><textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
        </fieldset>
        <div><input type="hidden" id="resourceID" name="resourceID" value="{{$resource->id}}" /></div>
        <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
      </form>
  </div>
</div>

        