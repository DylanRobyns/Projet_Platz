<!-- NAVBAR -->
@foreach($categories as $category)

<div id="wrapper-navbar">
		<div class="navbar object">

            <div id="wrapper-bouton-icon">
            	<div id="bouton-ai" class="cat" data-url="{{ route('filter.ai.resources') }}"><img src="{{ asset('storage/' . $category->icone) }}" alt="illustrator" title="Illustrator" height="28" width="28"></div>
			</div>
    	</div>
    </div>

@endforeach