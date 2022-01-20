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

    $('.category').click(function(e) {
      e.preventDefault();
      $.get($(this).data('url'))
       .done(function(rep) {
         $('#oldnew-prev').hide();
         $('#list').empty().append(rep);
         $('#noRes').hide();
       });
    });

  </script>
@endsection