{{--<form action="{{url('/login')}}" method="post">--}}
    {{--<ul--}}
            {{--class="register">--}}
        {{--<li>--}}
            {{--<label>手机号：</label>--}}
            {{--<input--}}
                    {{--class="ipt-box tel-bg"--}}
                    {{--value=""--}}
                    {{--name="phone_num"--}}
                    {{--id="regi_mobile"--}}
                    {{--type="text">--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<label>验证码：</label>--}}
            {{--<input--}}
                    {{--class="code"--}}
                    {{--id="validatecode"--}}
                    {{--name="code"--}}
                    {{--type="text">--}}
            {{--<input--}}
                    {{--class="code"--}}
                    {{--onclick='duanxin()'--}}
                    {{--value="获取验证码"--}}
                    {{--type="button">--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<input type="submit" value="登录">--}}
        {{--</li>--}}
        {{--{{csrf_field()}}--}}
    {{--</ul>--}}
{{--</form>--}}
{{--<form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">--}}
    {{--{{csrf_field()}}--}}
    {{--<input type="file" name="avatar">--}}
    {{--<input type="submit" value="上传头像">--}}

{{--</form>--}}
{{--<img src="{{asset('uploads/user7-128x128.jpg')}}" alt="">--}}
{{--<script>_MEIQIA('showPanel')</script>--}}
{{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
{{--<script>--}}
    {{--function--}}
    {{--duanxin(){--}}

{{--//获取手机ID--}}
        {{--var--}}
            {{--phone_num=$("#regi_mobile").val();--}}
        {{--$.ajax({--}}
            {{--url:'sendSms',--}}
            {{--data:{'phoneNum':phone_num},--}}
            {{--type:"GET",--}}
            {{--dataType:"Json",--}}
            {{--success:function(msg){--}}
                {{--if(msg['stat']=='100'){--}}
                    {{--alert('短信发送成功了');--}}
                {{--}else{--}}
                    {{--alert('短信发送失败了');--}}
                {{--}--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}
