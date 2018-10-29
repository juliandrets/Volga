<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>Gallery</h1>
        
        <section id="btns">
            <a href="/admin/gallery/create"><div class="btn1">New Gallery</div></a>
        </section>
    
        <table class="tg">
          <tr>
            <th class="tg-us36">Name</th>
            <th class="tg-us36"></th>
          </tr>
          @foreach($galleries as $gallery)
          <tr onclick="window.location='/admin/gallery/{{$gallery->id}}/view'" style="cursor: pointer;">
            <td class="tg-us36">{{ $gallery->name }}</td>
            <td class="tg-us36" align="center">
                <a href="/admin/gallery/{{ $gallery->id }}/edit"><i class="fa fa-pencil-square-o edit" aria-hidden="true"></i></a>
                <a href="/admin/gallery/{{ $gallery->id }}/delete" onclick="return deleteConfirm()"><i class="fa fa-close delete" aria-hidden="true"></i></a>
            </td>
          </tr>
          @endforeach
        </table>

        
    </section>

    <div class="clear"></div>

    @include('layouts/admin/validaciones')
    

@endsection