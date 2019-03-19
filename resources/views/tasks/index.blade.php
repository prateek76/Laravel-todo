@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{url('task') }}" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Task</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">Add task</button>
                    </div>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection