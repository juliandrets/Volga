<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>New Photo</h1>
        

        <form action="/admin/photos" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>
                <span>Photo</span>
                <input type="file" name="picture">
                <input type="hidden" name="gallery_id" value="{{$gallery->id}}">
                
            </label>

            <button type="submit" class="btn1">Upload Photo</button>
        </form>
    
    </section>

    <div class="clear"></div>
    

@endsection