@extends('layouts.app')

@section('slot')
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </strong>
                </div>
                @endif
                @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <ul>
                        <li>
                            <strong>{{ Session::get('message') }}</strong>
                        </li>
                        @if (Session::has('email') && Session::has('password'))
                        <li>
                            <strong>{{ Session::get('email') }}</strong>
                        </li>
                        <li>
                            <strong>{{ Session::get('password') }}</strong>
                        </li>
                        @endif
                    </ul>
                </div>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                    <a href="{{ route('users.create') }}" class="btn btn-app bg-primary">
                        <i class="fas fa-plus"></i> Add
                    </a>
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ date_format($item->created_at,"d-m-Y") }}</td>
                            <td class="text-center">
                                <a href="{{ route('users.edit', $item->id) }}" class="btn btn-app bg-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('users.destroy', $item) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @if(auth()->user()->id != $item->id)
                                    <button type="submit" class="btn btn-app bg-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="fas fa-trash"></i> Delete</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection