@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Category</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $c)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$c['name']}}</td>
                            <td>
                                <a type="button" class="btn btn-warning" href="#">Edit</a>
                                <a type="button" class="btn btn-danger" onclick="#">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
