@extends('layouts.backend')
@section('content')

    <div class="content" >
        <form class="form-horizontal" method="post" action="{{url('admin/created.admin')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label type="checkbox" class="col-sm-2 control-label">角色</label>

                <div class="col-sm-6">

                    <select class="form-control" name="role">
                        @foreach($role as $v)
                        <option>{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>

                <div class="col-sm-6">
                    <input type="email"name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">用户名</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control"  placeholder="name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">密码</label>

                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">描述</label>

                <div class="col-sm-6">
                    <textarea class="form-control" name="description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-m-10" style="width:80%">
                    <button type="submit" class="btn btn-success">添加</button>
                    <a href="{{url('admin/superUsers')}}"><button class="btn btn-danger">返回</button></a>
                </div>

            </div>
        </form>
    </div>
@endsection