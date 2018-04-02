@extends('layouts.backend')
@section('content')

    <div class="content" >
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">产品名称</label>

                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                <div class="col-sm-6">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-m-10" style="width:80%">
                    <button type="submit" class="btn btn-success">添加</button>
                    <button  class="btn btn-danger">返回</button>
                </div>

            </div>
        </form>
    </div>
@endsection