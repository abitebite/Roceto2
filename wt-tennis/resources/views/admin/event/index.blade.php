@extends('admin.layouts.app')
@section('title', 'Data Event')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Events</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Events</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Events</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.event.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.event.modal.create')
                                <!-- <a href="{{ action('EventController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> -->
                              </div>
                              <div class="col-md-6">
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <table id="datatable" class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Nama Event</th>
                                              <th>Detail Event</th>
                                              <th>Waktu</th>
                                              <th colspan="2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($events as $event)
                                          <tr>
                                              <td>{{ $event->id }}</td>
                                              <td><a href="{{ action('EventController@show', $event->id) }}">{{ $event->nama }}</a></td>
                                              <td>{{ $event->detail }}</td>
                                              <td>{{ $event->created_at }}</td>
                                              <td>
                                                <a href="{{ action('EventController@edit', $event->id) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $event->id }}">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                              </td>
                                          </tr>
                                          @include('admin.event.modal.delete', ['id' => $event->id])
                                        @endforeach
                                      </tbody>
                                  </table>
                                  {!! $events->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
