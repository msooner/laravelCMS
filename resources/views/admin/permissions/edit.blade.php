@extends('layouts.backend')
@section('content')

    <div class="content">
        <form class="form-horizontal" method="post" action="{{url('admin/edited.permission')}}">
            {{csrf_field()}}
            @foreach($permission as $v)
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-6">
                        <input class="form-control" name="name" value="{{$v->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Title</label>

                    <div class="col-sm-6">
                        <input class="form-control" name="title" value="{{$v->title}}">
                    </div>

                </div>
                <div class="form-group">

                    <div class="col-sm-6">
                        <input class="form-control" type="hidden" name="id" value="{{$v->id}}">
                    </div>

                </div>
            @endforeach
            <div class="form-group">
                <div class="col-sm-offset-3 col-m-10" style="width:80%">
                    <button type="submit" class="btn btn-success">修改</button>
                    <a href="{{url('admin/superUsers')}}">
                        <button class="btn btn-danger">返回</button>
                    </a>
                </div>

            </div>
        </form>
    </div>

@endsection