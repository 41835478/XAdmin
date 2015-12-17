@extends('backend.layouts.master')

@section('title', '新建用户')

@section('breadcrumb')
    <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="/admin/dashboard">主页</a>
    </li>
    <li>
        <a>用户管理</a>
    </li>
    <li>
        新建权限
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            {!! Form::open(['route' => 'admin.auth.permission.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}

            @include('backend.permission._form')

            <div class="well">
                <div class="text-center">
                    <a href="{{route('admin.permission.index')}}" class="btn btn-info btn-xs">{{ trans('strings.return_button') }}</a>
                    <input type="submit" class="btn btn-success btn-xs" value="{{ trans('strings.save_button') }}" />
                </div>
                <div class="clearfix"></div>
            </div><!--well-->
        </div>
    </div>
@endsection

@section('scripts')

@endsection

