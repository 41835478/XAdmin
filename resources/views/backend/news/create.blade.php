@extends('backend.layouts.master')

@section('title', '添加新闻')
@section('styles')
{!! UEditor::css() !!}
@endsection

@section('breadcrumb')
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="/admin/dashboard">主页</a>
        </li>
        <li>
            <a>新闻管理</a>
        </li>
        <li>
            创建新闻
        </li>
@endsection

@section('content')
   <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" id="news_form" role="form" method="POST" action="{{ URL::to('admin/news') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                @include('backend.news._form')

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-10">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            保存
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            重置
                        </button>
                    </div>
                </div>
            </form>
    </div>
@endsection

@section('scripts')
{!! UEditor::js() !!}
<script src="{{ asset('js/jquery-file-upload/vendor/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('js/jquery-file-upload/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('js/jquery-file-upload/jquery.fileupload.js') }}"></script>
<script src="{{ asset('js/bootstrap-tag.min.js') }}"></script>
<script src="{{ asset('js/jquery-validate/jquery.validate.js') }}"></script>
<script src="{{ asset('js/jquery-validate/additional-methods.js') }}"></script>
<script src="{{ asset('js/jquery-validate/messages_zh.js') }}"></script>

<script type="text/javascript">
    $(function () {
        //文件上传
        $('#file').fileupload({
            url: '/admin/upload/image',
            dataType: 'json',
            done: function (e, data) {
                $('#upload_image_preview').attr('src', data.result.image);
                $('#page_image').val(data.result.image);
            }
        });

        //表单验证
        $('#news_form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                title: {
                    required: true
                },
                category_id: {
                    required: true
                }
            },

            messages: {
            },

            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },

            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },

            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                form.submit();
            },
            invalidHandler: function (form) {
            }
        });

    });
    var ue = UE.getEditor('ueditor'); //用辅助方法生成的话默认id是ueditor

    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
     var tag_input = $('#form-field-tags');
             try{
                 tag_input.tag(
                   {
                     placeholder:tag_input.attr('placeholder'),
                     //enable typeahead by specifying the source array
                     source: {}//defined in ace.js >> ace.enable_search_ahead
                   }
                 )
                 //programmatically add a new
                 var $tag_obj = $('#form-field-tags').data('tag');
             }
             catch(e) {
                 //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                 tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
                 //$('#form-field-tags').autosize({append: "\n"});
             }
</script>
@endsection

