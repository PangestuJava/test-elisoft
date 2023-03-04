@extends('layouts.app')

@section('slot')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            @isset($a, $b)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <ul>
                    <li>
                        <strong>Variable A= {{ $a }}</strong>
                    </li>
                    <li>
                        <strong>Variable B= {{ $b }}</strong>
                    </li>
                </ul>
            </div>
            @endisset
            <!-- form start -->
            <form action="{{ route('swapping.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="a">Variable A</label>
                        <input type="text" name="a" class="form-control" id="a" placeholder="Variable A" required>
                    </div>
                    <div class="form-group">
                        <label for="b">Variable B</label>
                        <input type="text" name="b" class="form-control" id="b" placeholder="Variable A" required>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (left) -->
</div>
<!-- /.row -->
@endsection
