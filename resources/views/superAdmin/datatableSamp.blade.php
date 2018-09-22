@extends('layouts.superadmin')

@section('content')
            <div class="search">
              {!! Form::open(['url' => 'user', 'method' => 'GET']) !!}
              {!! Form::text('search') !!}
              {!! Form::submit('Search') !!}
              {!! Form::close() !!}
            </div>
            <div>
              {!! $searchResult !!}
            </div>
            <div class="x_panel">
                {!! $table->render() !!}
                
            </div>

            <div class="x_panel">
                <table id="userssample-table" class="table table-striped table-bordered dataTable no-footer">
                  <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                  </thead>
                </table>
                
            </div>
@endsection
