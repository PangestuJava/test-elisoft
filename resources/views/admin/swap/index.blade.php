@extends('layouts.app')

@section('slot')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
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
            <!-- form start -->
            <form action="{{ route('swapping.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="a">Variable A</label>
                        <input type="text" name="a" class="form-control" id="a" value="{{ isset($a) ? $a : '' }}"
                            placeholder="Variable A">
                    </div>
                    <div class="form-group">
                        <label for="b">Variable B</label>
                        <input type="text" name="b" class="form-control" id="b" value="{{ isset($b) ? $b : '' }}"
                            placeholder="Variable A">
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