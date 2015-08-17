                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="title"> 新闻标题 </label>
                    <div class="col-sm-10">
                        <div class="clearfix">
                            <input type="text" name="title" id="title" placeholder="标题" class="col-xs-10 col-sm-5" value="{{ $title }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="category_id"> 所属分类 </label>
                    <div class="col-sm-10">
                        <div class="clearfix">
                        <select name="category_id" id="category_id">
                            <option value="">请选择</option>
                            @foreach ($selectCategory as $item)
                            <option value="{{ $item['id'] }}">{{ $item['html'] }}{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="meta_keyword"> 页面关键词 </label>
                    <div class="col-sm-10">
                        <div class="clearfix">
                            <input type="text" name="meta_keyword" id="meta_keyword" placeholder="蜘蛛侠、煎饼侠" class="col-xs-10 col-sm-5" value="{{ $meta_keyword }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 页面描述 </label>
                    <div class="col-sm-10">
                        <input type="text" name="meta_description" id="form-field-1" placeholder="蜘蛛侠大超人" class="col-xs-10 col-sm-5" value="{{ $meta_description }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> 封面图 </label>
                    <div class="col-sm-10">
                        <div class="clearfix">
                            <input type="file" name="file" id="file"  class="col-xs-10 col-sm-5" />
                            <input type="hidden" name="page_image" id="page_image"  class="col-xs-10 col-sm-5" />
                            <img id="upload_image_preview" src="{{ $page_image }}" width="200px" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> 摘要 </label>
                    <div class="col-sm-10">
                        <textarea name="summary" id="form-field-1-1" placeholder="简单描述" class="col-xs-10 col-sm-5">{{ $summary }}</textarea>
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="content">正文</label>
                    <div class="col-sm-10">
                        <div class="clearfix">
                        {!! UEditor::content($content) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 浏览量 </label>
                    <div class="col-sm-10">
                        <input type="text" name="views" id="form-field-1" placeholder="100" class="col-xs-10 col-sm-5" value="{{ $views }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 标签 </label>
                    <div class="col-sm-10">
                        <div class="inline">
                            <input type="text" name="tags" id="form-field-tags" value="" placeholder="请输入标签名，回车即可" style="display: none;">
                    	</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 发布状态 </label>
                    <div class="col-sm-10">
                        <select name="status">
                            @foreach ($allStatus as $key => $item)
                            <option value="{{ $key }}" @if ($key == $status) selected @endif>{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>