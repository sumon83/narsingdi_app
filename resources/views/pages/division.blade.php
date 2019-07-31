@extends('layouts.app_layout')


@section('content')
<section class="content nav-banner">
        <div class="container">
                <h1>Division</h1>
                <div class="col-xs-5">
                        <p>Insert Division of Bangladesh</p>
                        {{ Form::open(['id'=>'division_form', 'action' => 'DivisionsController@store',
                        'method'=>'Post']) }}
                        <div class="form_group">
                                {{ Form::label('division_name', 'Division Name') }}
                                {{ Form::text('division_name', '', ['class' => 'form-control', 'placeholder' => 'Division Name', 'id' => 'division_name'])}}
                        </div>
                        <div class="form_group">
                                {{ Form::label('division_name_bangla', 'Division Name Bangla') }}
                                {{ Form::text('division_name_bangla', '', ['class' => 'form-control', 'placeholder' => 'Division Name Bangla', 'id' => 'division_name_bangla'])}}
                        </div>
                        <div class="form_group">
                                {{ Form::label('division_code', 'Division Code') }}
                                {{ Form::text('division_code', '', ['class' => 'form-control', 'placeholder' => 'Division Code', 'id' => 'division_code'])}}
                        </div>

                        {{ Form::submit('submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}

                        {{ Form::close() }}
                </div>
                <div class="col-xs-7">
                        <div class="data_table">
                                <h4 class="table-header">List of Divisions of Bangladesh</h4>
                                <table class="table table-striped table-bordered table-hover table-dark">
                                        <thead class="thead-dark">
                                                <tr>
                                                        <th>SL</th>
                                                        <th>Division Name</th>
                                                        <th>Bangla Division Name</th>
                                                        <th>Division Code</th>
                                                        <th>Edit/Delete</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                @if (count($divisions) > 0)
                                                <?php $i=1;?>
                                                @foreach ($divisions as $division)
                                                <tr>
                                                        <td>{{$i}}</td>
                                                        <td>{{$division->division_name_eng}}</td>
                                                        <td>{{$division->division_name_bangla}}</td>
                                                        <td>{{$division->division_code}}</td>
                                                        <td><a href="{{url('division')}}/{{$division->id}}/edit")}}
                                                                        class="edit_table_data btn btn-primary ">Edit</a>
                                                        {{ Form::open(['action'=>['DivisionsController@destroy',$division->id], 'method'=>'POST', 'class'=> 'pull-right'])}} 
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class'=>'delete_table_data btn btn-danger'])}}

                                                {!! Form::close()!!}</td>
                                                </tr>
                                                <?php $i++;?>
                                                @endforeach
                                                @endif
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
</section>
@endsection