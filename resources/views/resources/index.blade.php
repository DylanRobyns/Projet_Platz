@extends('template.index')

@section('title')
  Free Grid Wordpress Theme
@endsection

@section('content')

<section class="work" id="list">

	@include('resources._boucle', ['resources' => $resources])
  
</section>

<p id="noRes" style="
    font-family: 'Pacifico', cursive;
    font-size: 30px;
	  height:30px;
    display:flex;
    justify-content: center;
    color: #999;
    padding: 2em;
    padding-bottom: 0em;
    margin-bottom: 0em;
  ">
  
  Il n'y a plus d'articles !

</p>

@endsection

@section('scripts')

  <script>

    let offset = 20;
    $('#noRes').hide();
    /*
    Ajoute 4 resources supplémentaires en partant chercher les ressources à partir de la 20ème. Puis augmente le compteur de 4 (24).
    Si le compteur surpasse le nombre de ressources disponible, le bouton "More ressource" disparait et un message apparait.
    */
    $('#oldnew-prev').click(function(e) {
      e.preventDefault();
      $.get($(this).data('url'), {offset: offset})
       .done(function(rep) {
         $('#list').append(rep)
         if(rep == 0) {
          $('#oldnew-prev').hide();
          $('#noRes').show();
         }
          offset = offset + 4;
       });
    });

    /*
    // Vide la liste des resources, puis rajoute uniquement les resources par catégorie. Cache également le bouton "More Resource".
    $('#bouton-ai').click(function(e) {
      e.preventDefault();
      $.get($(this).data('url'))
       .done(function(rep) {
         $('#oldnew-prev').hide();
         $('#list').empty().append(rep);
         $('#noRes').hide();
       });
    });
    */

  </script>

@endsection