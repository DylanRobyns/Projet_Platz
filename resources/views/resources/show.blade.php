@extends('template.index_resources')

@section('title')
     {{ $resource->title }}
@endsection

@section('content')

<div id="main-container-image">

        <div class="title-item">
            <div class="title-icon"><img src="{{ asset('storage/' . $resource->categories->icone) }}" alt="" width="80" height="80"/></div>
            <div class="title-text">{{ $resource->title }}</div>
            <div class="title-text-2">{{ $resource->created_at->format('M d, Y') }} by Onuur</div>
        </div>

        <div class="work">
            <figure class="white">
                     <img src="{{ asset('storage/' . $resource->image) }}" alt="" />

                                </figure>

        <div class="wrapper-text-description">

            <div class="wrapper-file">
                <div class="icon-file ghost"><img src="{{ asset('storage/' . $resource->categories->icone_ghost) }}" alt="" width="21" height="21"/></div>
                <div class="text-file">{{ $resource->categories->name }}</div>
            </div>

            <div class="wrapper-weight">
                <div class="icon-weight"><img src="{{ asset('assets/img/icon-weight.svg') }}" alt="" width="20" height="23"/></div>
                <div class="text-weight">{{ $resource->size }} Mo</div>
            </div>

            <div class="wrapper-desc">
                <div class="icon-desc"><img src="{{ asset('assets/img/icon-desc.svg') }}" alt="" width="24" height="24"/></div>
                <div class="text-desc">{!! $resource->description !!}</div>
            </div>

            <div class="wrapper-download">
                <div class="icon-download"><img src="{{ asset('assets/img/icon-download.svg') }}" alt="" width="19" height="26"/></div>
                <div class="text-download"><a href="#"><b>Download</b></a></div>
            </div>

            <div class="wrapper-morefrom">
                <div class="text-morefrom">More from {{ $resource->categories->name }}</div>

                    <?php $catNub = $resource->category_id; ?>
                    @include('resources._recent', ['resources' => \App\Models\Resource::where(function ($query) use ($catNub) {
                          $query->where('category_id', '=', $catNub);
                    })->orderBy(DB::raw('RANDOM()'))->take(4)->get()
                    ])
                    
            </div>
        </div>

                <div class="post-reply">
                    <div id="title-post-send">
                        <hr/><h2>Your comments</h2>
                    </div>

            </div>

            @include('comments._show', ['comments' => $resource->comments])

            @include('comments._add-form')
            
        </div>
    </div>

@endsection

@section('scripts_resources')

<script>

    $('#contact').submit(function(e) {
        e.preventDefault();

        $.get($(this).attr('action'), {
            name: $(this).find('#name').val(),
            message: $(this).find('#message').val(),
            resourceID: $(this).find('#resourceID').val()
        })
        .always(function(rep) {
            $('#comments_list').empty()
                               .append(rep)
                               .find('li:last-of-type')
                               .hide()
                               .slideDown();
        });
    });

</script>

@endsection