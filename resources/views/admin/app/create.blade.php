@extends('admin.base')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">新增应用
        <div class="pull-right">
            <a href="/admin/app"><i class="fa fa-th"></i> 应 用</a> /
            新增应用
        </div>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/app') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-3 control-label">代号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">名称</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">描述</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">首页地址</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="home_url" value="{{ old('home_url') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">登录地址</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="login_url" value="{{ old('login_url') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">密钥</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="secret" value="{{ old('secret') }}">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-default" onclick="generateSecret();">生成</button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3 control-label">
                    <input type="checkbox" name="role" checked="checked"></input>
                </div>
                <label class="col-md-5" style="padding-top:7px; font-weight:100">创建访客(guest)角色</label>
            </div>

            <div class="form-group">
                <div class="col-md-2 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">
                        新增
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
generateSecret();
</script>
@endsection
