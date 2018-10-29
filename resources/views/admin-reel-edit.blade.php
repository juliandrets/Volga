<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>Edit Project</h1>
        

        <form action="/admin/reel/{{$reel->id}}/update" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>
                <span>Photo</span>
                <figure>
                    <img src="/uploads/reel/{{ $reel['picture'] }}" alt="">
                </figure>
                <input type="file" name="picture">
            </label>
            <label>
                <span>Name *</span>
                <input type="text" name="name" value="{{$reel->name}}" placeholder="Name *" required>
            </label>
            <label>
                <span>Category *</span>
                <select name="category" id="">
                    <option value="Commercial" @if($reel->category == 'Commercial') selected @endif>Commercial</option>
                    <option value="Tv Production" @if($reel->category == 'TV Production') selected @endif>Tv Production</option>
                    <option value="Other" @if($reel->category == 'Other') selected @endif>Other</option>
                </select>
            </label>
            <label>
                <span>Link de vimeo (IFRAME) *</span>
                <input type="text" name="iframe" required value="{{$reel->iframe}}">
            </label>
            <label>
                <span>Description *</span>
                <textarea name="description">{{$reel->description}}</textarea>
            </label>

            <button type="submit" class="btn1">Edit Project</button>
        </form>
    
    </section>

    <div class="clear"></div>
    

@endsection