@extends('layouts.app')

@section('title')
    {{ $patient->name }}
@endsection

@section('content')
    <div class="container">

        <div class="mbot20">
            <a href="{{ url('patients') }}" class="btn btn-primary"><i class="fa fa-arrow-left fa-icon"></i>
                Back to Patient List
            </a>
        </div>

        <div class="box">
            <div class="box-header">
                @yield('title')
            </div>
            <div class="box-body">
                <div class="form form-horizontal">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="{{ $patient->avatar ?: '/img/default-avatar-female.png' }}" class="img img-responsive"/>

                            <div>
                                <a href="{{ url("patients/$patient->id/edit") }}" class="btn btn-default btn-block">
                                    <i class="fa fa-pencil fa-icon"></i>
                                    Edit Patient
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="id" class="control-label col-md-4" style="text-align: left">No. RM</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->id }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nik" class="control-label col-md-4" style="text-align: left">No. KTP/NIK</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->nik }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-md-4" style="text-align: left">Nama Pasien</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->name }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birth_date" class="control-label col-md-4" style="text-align: left">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ d($patient->birth_date) }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="control-label col-md-4" style="text-align: left">Jenis Kelamin</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->gender }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="religion" class="control-label col-md-4" style="text-align: left">Agama</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->religion }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="occupation" class="control-label col-md-4" style="text-align: left">Pekerjaan</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->occupation }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="marriage_status" class="control-label col-md-4" style="text-align: left">Status Pernikahan</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->marriage_status }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="control-label col-md-4" style="text-align: left">Nomor Telepon</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->phone }}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="control-label col-md-4" style="text-align: left">Alamat</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{ $patient->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
