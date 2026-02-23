@extends('layout.app')

@section('title', $project->title)

@section('content')

<div class="container mt--100 mb--100">
    <div class="row">
        <div class="col-lg-12">
            <h2>{{ $project->title }}</h2>
            <p><strong>Category:</strong> {{ $project->category }}</p>

            <img src="{{ asset('storage/'.$project->featured_image) }}"
                 class="img-fluid mb--30">

            <p>{{ $project->description }}</p>
            @if($project->images->count())

<div class="row mt-5">
    <h3>Photo Gallery</h3>

    @foreach($project->images as $image)

        <div class="col-lg-4 col-md-6 mb-4">
            <img src="{{ asset('storage/'.$image->image) }}"
                 class="img-fluid rounded shadow"
                 style="height:250px; object-fit:cover;">
        </div>

    @endforeach

</div>

@endif
        </div>
    </div>
</div>

@endsection