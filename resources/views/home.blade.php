@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-dark text-white">HOME</h1>
@stop

@section('content')
<div class="container-fluid ">
    <div class="row card bg-primary">
        <hr>
        <div class="col-12 card-block ">
            <div class="row ">
                <div class="col-8 d-flex mb-auto mt-auto ">
                    <h5 class="mb-0">Usuarios</h5>
                    @php
                    use App\Models\User;
                    $cantUs=User::count();
                    @endphp
                </div>
                <div class="col-2 d-flex mb-auto mt-auto">
                    <h2 class="text-right mb-0"><i class="fa fa-users f-left"></i>{{$cantUs}}</h2>
                </div>
                <div class="col-2 d-flex mb-auto mt-auto">
                    <p class="text-right mb-0 "><a href="/usuarios" class="text-white">Ver más</a></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-12 card-block">
            <div class="row">
                <div class="col-8 d-flex mb-auto mt-auto">
                    <h5 class="mb-0">Roles</h5>
                    @php
                    use Spatie\Permission\Models\Role;
                    $cantRoles=Role::count();
                    @endphp
                </div>
                <div class="col-2 d-flex mb-auto mt-auto">
                    <h2 class="text-right mb-0"><i class="fa fa-users f-left"></i>{{$cantRoles}}</h2>
                </div>
                <div class="col-2 d-flex mb-auto mt-auto">
                    <p class="text-right mb-0 "><a href="/roles" class="text-white">Ver más</a></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-12 card-block ">
            <div class="row">
                <div class="col-8 d-flex mb-auto mt-auto">
                    <h5 class="mb-0">Blogs</h5>
                    @php
                    use App\Models\Blog;
                    $cantBlogs=Blog::count();
                    @endphp
                </div>
                <div class="col-2 d-flex mb-auto mt-auto">
                    <h2 class="text-right mb-0"><i class="fa fa-users f-left"></i>{{$cantBlogs}}</h2>
                </div>
                <div class="col-2 d-flex mb-auto mt-auto">
                    <p class="text-right mb-0 "><a href="/blogs" class="text-white">Ver más</a></p>
                </div>
            </div>
        </div>
        <hr>
    </div>

</div>

@stop

@section('css')

@stop

@section('js')


@stop