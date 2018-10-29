<!-- Planilla default header y css -->
@extends('layouts.admin.admin')

<!-- Nombre del titulo de la pagina -->
<?php $title = 'Administration Panel'; ?>

@section('content')

    <!-- Header -->
    @include('layouts.admin.header-admin')
    @include('layouts.admin.aside')

    <section id="admin-panel-body">
        <h1>Reel</h1>
        
        <section id="btns">
            <a href="/admin/reel/create"><div class="btn1">New project</div></a>
        </section>
    
        <table class="tg">
          <tr>
            <th class="tg-us36" style="width: 100px;">Picture</th>
            <th class="tg-us36">Name</th>
            <th class="tg-us36">Category</th>
            <th class="tg-us36"></th>
          </tr>
          @foreach($reel as $reel_item)
          <tr>
            <td class="tg-us36" style="width: 50px;"><figure><img src="/uploads/reel/{{ $reel_item->picture }}" alt=""></figure></td>
            <td class="tg-us36">{{ $reel_item->name }}</td>
            <td class="tg-us36">{{ $reel_item->category }}</td>
            <td class="tg-us36" align="center">
                <a href="/admin/reel/{{ $reel_item->id }}/edit"><i class="fa fa-pencil-square-o edit" aria-hidden="true"></i></a>
                <a href="/admin/reel/{{ $reel_item->id }}/delete" onclick="return deleteConfirm()"><i class="fa fa-close delete" aria-hidden="true"></i></a>
            </td>
          </tr>
          @endforeach
        </table>

        
    </section>

    <div class="clear"></div>

    @include('layouts/admin/validaciones')
    

@endsection