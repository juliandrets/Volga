<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>New Project</h1>
        

        <form action="/admin/reel" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>
                <span>Photo</span>
                <input type="file" name="picture">
            </label>
            <label>
                <span>Name *</span>
                <input type="text" name="name" placeholder="Name *" required>
            </label>
            <label>
                <span>Category *</span>
                <select name="category" id="">
                    <option value="Commercial">Commercial</option>
                    <option value="Tv Production">Tv Production</option>
                    <option value="Other">Other</option>
                </select>
            </label>
            <label>
                <span>Link de vimeo (IFRAME) *</span>
                <input type="text" name="iframe" required>
            </label>
            <label>
                <span>Description *</span>
                <textarea name="description"></textarea>
            </label>

            <button type="submit" class="btn1">Create Project</button>
        </form>
    
    </section>

    <div class="clear"></div>
    

@endsection