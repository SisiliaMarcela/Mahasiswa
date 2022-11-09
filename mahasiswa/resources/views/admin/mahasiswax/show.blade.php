@extends('layouts.app')

@section('title','Laporan Mahasiswa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">mahasiswax {{ $mahasiswax->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/mahasiswax') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/mahasiswax/' . $mahasiswax->id . '/edit') }}" title="Edit mahasiswax"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/mahasiswax' . '/' . $mahasiswax->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete mahasiswax" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mahasiswax->id }}</td>
                                    </tr>
                                    <tr><th> StudentID </th><td> {{ $mahasiswax->studentID }} </td></tr><tr><th> Nama </th><td> {{ $mahasiswax->nama }} </td></tr><tr><th> Jurusan </th><td> {{ $mahasiswax->jurusan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
