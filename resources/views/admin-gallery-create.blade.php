<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>New Gallery</h1>
        

        <form action="/admin/gallery" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <label>
                <span>Name *</span>
                <input type="text" name="name" placeholder="Name *" required>
            </label>

            <button type="submit" class="btn1">Create Gallery</button>
        </form>
    
    </section>

    <div class="clear"></div>
    

@endsection