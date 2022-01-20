@foreach($resources as $resource)

<figure class="white">
	<a href="{{ route('resources.show', ['resource' => $resource->id, 'slug' => \Illuminate\Support\Str::slug($resource->title)]) }}">
		<img src="{{ asset('storage/' . $resource->image) }}" alt=""/>
		<dl>
			<dt>{{ $resource->title }}</dt>
			<dd>{!! $resource->description !!}</dd>
		</dl>
		</a>
        <div id="wrapper-part-info">
            <div class="part-info-image"><img src="{{ asset('storage/' . $resource->categories->icone) }}" alt="" width="28" height="28"/></div>
            <div id="part-info">{{ $resource->categories->name }}</div>
		</div>
</figure>

@endforeach