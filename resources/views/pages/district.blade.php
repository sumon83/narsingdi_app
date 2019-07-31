@extends('layouts.app_layout')

@section('content')
    <section class="nav-banner">
        <div class="container">
                <h1 class="heading">Districts of the narsingdi</h1>
            <div class="col-xs-12 col-md-5">
                <p>Insert district of Bangladesh</p>
                    {!! Form::open(['id'=>'district_form', 'action' => 'DistrictController@store', 'method'=>'Post']) !!}
                    <div class="form_group">
                        {{ Form::label('district_name', 'District Name') }}
                        {{ Form::text('district_name', '', ['class' => 'form-control', 'placeholder' => 'District Name', 'id' => 'district_name'])}}                                
                    </div>
                    <div class="form_group">
                        {{ Form::label('district_name_bangla', 'District Name Bangla') }}
                        {{ Form::text('district_name_bangla', '', ['class' => 'form-control', 'placeholder' => 'District Name Bangla', 'id' => 'district_name_bangla'])}}               
                    </div>
                    <div class="form_group">
                        {{ Form::label('district_code', 'District Code') }}
                        {{ Form::text('district_code', '', ['class' => 'form-control', 'placeholder' => 'District Code', 'id' => 'district_code'])}}                                
                    </div>   
                    {{ Form::hidden('_mathod','PUT')}}
                    
                    {{ Form::submit('submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}                       
                    
                    {!! Form::close() !!}
            </div>
            <div class="col-xs-12 col-md-7">
                <div class="data_table">
                    <h4 class="table-header">List of districts of Bangladesh</h4>
                    <table class="table table-striped table-bordered table-hover table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>SL</th>
                                <th>District Name</th>
                                <th>Bangla District Name</th>
                                <th>District Code</th>
                                <th>Edit/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($districts) > 0)
                            <?php $i=1;?>
                            @foreach ($districts as $district)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$district->district_name}}</td>
                                <td>{{$district->district_name_bangla}}</td>
                                <td>{{$district->district_code}}</td>
                                <td><a href="{{url('district')}}/{{$district->id}}/edit")}}
                                                class="eidt ">Edit</a> || 
                                    
                                                <a
                                                href="/update/{{$district->id}}"
                                                class="delet ">Delete</a> </td>
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
