<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>{{$gallery->name}}</h1>
        
        <section id="btns">
            <a href="/admin/photos/create/{{$gallery->id}}"><div class="btn1">New Photo</div></a>
        </section>
        
        <ul class="photos">
          @foreach($photos as $photo)
          <li>
            <figure>
                <img src="/uploads/gallery/{{$photo->picture}}" alt="">
            </figure>
            <section>
                <a href="/admin/photos/{{ $photo->id }}/delete" onclick="return deleteConfirm()"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </section>
          </li>
          @endforeach
        </ul>

        {{$photos->links()}}

        
    </section>

    <div class="clear"></div>

    @include('layouts/admin/validaciones')
    

@endsection