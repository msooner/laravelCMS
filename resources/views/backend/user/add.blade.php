
@extends('backend/layout')
@section('content')

<div class="main">

<div class="main-inner">

<div class="container">

<div class="row">

<div class="span12">

<div class="widget ">



<div class="widget-content">



<div class="tabbable">


<br>


<!-- content start -->
<div class="admin-content">
<div class="admin-content-body">
<div class="am-cf am-padding am-padding-bottom-0">
<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">编辑用户</strong> / <small>User</small></div>
</div>

<hr>
{{--表单开始--}}

<div >
    @foreach($data as $v=>$val)
<form action="{{URL::asset('user/change')}}" method="post">

    <label class="control-label" for="Username">Username</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control" name="name" value="{{$val['name']}}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>


    <label class="control-label" for="Useremail">Useremail</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{$val['email']}}" required autofocus>
        <input type="hidden"name="id"value="{{$val['id']}}">
       {{csrf_field()}}

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>



<div class="form-actions">
    <input type="submit" value="修改" class="btn btn-success">
</div> <!-- /form-actions -->

</form>
    @endforeach
    {{--表单结束--}}
</div>

</div>

</div>
<hr/>


</div>


</div>


</div>

</div>





</div> <!-- /widget-content -->

</div> <!-- /widget -->

</div> <!-- /span8 -->




</div> <!-- /row -->

</div> <!-- /container -->

</div> <!-- /main-inner -->

</div> <!-- /main -->


@endsection