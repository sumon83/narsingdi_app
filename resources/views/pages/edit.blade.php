@extends('layouts.app_layout')

@section('content')

        <section class="content">
                <div class="container">
                        <h1 class="center-text">Division</h1>
                        <div class="col-xs-6">
                                <p>Edit Division </p>
                                <?php //var_dump($division);die;?>
                                {{ Form::open(['id'=>'division_form', 'action' => ['DivisionsController@update', $division->id], 'method'=>'Post']) }}
                                <div class="form_group">
                                        {{ Form::label('division_name_eng', 'Division Name') }}
                                        {{ Form::text('division_name_eng', $division->division_name_eng, ['class' => 'form-control', 'placeholder' => 'Division Name', 'id' => 'division_name'])}}                                
                                </div>
                                <div class="form_group">
                                        {{ Form::label('division_name_bangla', 'Division Name Bangla') }}
                                        {{ Form::text('division_name_bangla', $division->division_name_bangla, ['class' => 'form-control', 'placeholder' => 'Division Name Bangla', 'id' => 'division_name_bangla'])}}                                
                                </div>
                                <div class="form_group">
                                        {{ Form::label('division_code', 'Division Code') }}
                                        {{ Form::text('division_code', $division->division_code, ['class' => 'form-control', 'placeholder' => 'Division Code', 'id' => 'division_code'])}}                                
                                </div>
                                {{Form::hidden('_method', 'PUT')}}
                                {{ Form::submit('submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}                                
                                
                                {!! Form::close() !!}
                        </div>                
                        
                </div>
        </section>        
@endsection
