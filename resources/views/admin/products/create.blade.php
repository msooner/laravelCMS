@extends('layouts.backend')
@section('content')

    <div class="content" >
        <form class="form-horizontal" action="{{'products.created'}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">产品名称</label>

                <div class="col-sm-6">
                    <input type="text" class="form-control"  placeholder="产品名称" name="product_name">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-3 col-m-10" style="width:80%">
                    <button type="submit" class="btn btn-success" id="add">添加</button>
                    <button  class="btn btn-danger" onclick=alert("确定要返回吗",function(){window.location.herf;})>返回</button>

                </div>
            </div>
        </form>

    </div>

@endsection