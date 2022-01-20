<div class="image-morefrom">
  <?php $count = 0; ?>

    @foreach($resources as $resource)     
      <?php $count++; ?>

        <a href="{{ route('resources.show', ['resource' => $resource->id, 'slug' => Illuminate\Support\Str::slug($resource->title)])}}">

          <?php echo "<div class='image-morefrom-$count'>" ?>
            <img src="{{ asset('storage/' . $resource->image) }}" alt="" width="430" height="330">  
          </div>

        </a>

    @endforeach

</div>
                