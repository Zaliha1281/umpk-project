@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('message'))
                <div class="alert {{ session()->get('type') }}">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Permohonan Baru') }}

                    <div class="float-right">

                    <!-- nak buat button* -->
                    <a class="btn btn-link" href="/lp/cipta-permohonan">+ Cipta</a>

                        <form action="" method="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" value="{{ request()->get('keyword') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Creator</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($senarai_permohonan as $permohonan)
                                <tr>
                                    <td> {{ $permohonan->id }}</td>
        
                                    <td> {{ $permohonan->user->name }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/permohonan/{{ $permohonan->id}}">Show</a>
                                        <a class="btn btn-success" href="/permohonan/{{ $permohonan->id}}/edit">Edit</a>
                                        <a onclick="return confirm('Are you sure')" class="btn btn-danger" href="/permohonan/{{ $permohonan->id}}/delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $senarai_permohonan->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
