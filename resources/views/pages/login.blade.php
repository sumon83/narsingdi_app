@extends('layouts.app_layout')

@section('content')
        @include('layouts.header')
        <section class="nav-banner">
                @include('menus.nav')               
        </section>
        <section class="content">
                <div class="container">
                        <h1>Login to BD Model test</h1>
                        <p>This the BD Model Test Login page</p>
                        
                </div>                
        </section>
@endsection
