@extends('admin.layouts.app')
@section('title', 'Bukti Pembayaran')
@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Bukti Pembayaran</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="{{ action('ParticipantController@show_event', $user->id)  }} ">Participant</a></li>
                <li class="active">{{$user->name}}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                @include('admin.participant.notification.flash')
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Atas Nama</th>
                                        <th>Nomer Rekening</th>
                                        <th>Bank</th>
                                        <th>Thumbnail</th>
                                        <th>Participant</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($bukti_pembayaran as $bukti_pembayaran)
                                    <tr>
                                        <td>{{ $bukti_pembayaran->atas_nama }}</td>
                                        <td>{{ $bukti_pembayaran->no_rek }}</td>
                                        <td>{{ $bukti_pembayaran->bank }}</td>
                                        <td>{{ $bukti_pembayaran->thumbnail }}</td>
                                        <td>{{ $bukti_pembayaran->nama}}</td>
                                        <td>{{ $bukti_pembayaran->created_at }}</td>
                                        <td>{{ $bukti_pembayaran->updated_at }}</td>
                                        <td>
                                        @if( $bukti_pembayaran->status_participant == 'validated')
                                            <a href="#" class="btn btn-info"  disabled>Approve</a>
                                        @include('admin.participant.modal.validation', ['id_user' => $user->id])
                                        @else
                                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal-{{ $user->id }}" >Approve</a>
                                        @include('admin.participant.modal.validation', ['id_user' => $user->id])
                                        @endif
                                @endforeach
                                        <td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Row -->
</div> <!-- container -->
@endsection
