@extends('admin.public.main')


@section('cnt')

    <div class="page static-page-tables">
        <!-- row -->
        <a class="btn btn-raised btn-cyan" style="background-color:#49cdd0;color: #fff;"
           href="{{ route('admin.create') }}">添加用户</a>
        <div class="row">
            <div class="col-md-12">
                <section class="boxs">
                    <div class="boxs-header">
                        <h3 class="custom-font hb-cyan">
                            <strong>用户</strong>列表</h3>
                    </div>

                    <div style="width: 30%; margin-left: 10px;">
                        <form>
                            <div class="input-group">
                                <input type="text" value="{{ request()->get('kw') }}" class="form-control"
                                       placeholder="Search..." name="kw">
                                <span class="input-group-btn">
                                <button class="btn btn-raised btn-cyan" type="submit"
                                        style="background-color:#49cdd0;color: #fff;">查找</button>
                            </span>
                            </div>
                        </form>
                    </div>

                    <div class="boxs-body p-0">
                        <div class="table-responsive">
                            <table class="table table-middle">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                            </label>
                                        </div>
                                    </th>
                                    <th>用户名</th>
                                    <th>实名</th>
                                    <th>性别</th>
                                    <th>电话</th>
                                    <th>邮箱</th>
                                    <th>创建时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $val)
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="nowrap">
                                            <strong>{{ $val->username }}</strong>
                                        </td>
                                        <td class="maw-320">
                                            <span class="truncate">{{ $val->truename }}</span>
                                        </td>
                                        <td>{{ $val->sex }}</td>
                                        <td>
                                            <span class="truncate"> {{ $val->phone }}</span>

                                        </td>
                                        <td>{{ $val->email }}</td>
                                        <td>{{ $val->created_at }}</td>
                                        <td>
                                            <div class="togglebutton">
                                                <label>
                                                    @if($val->deleted_at)
                                                        <input onclick="changeUser(1,'{{ route('admin.restore',['id'=>$val]) }}',this)" type="checkbox">
                                                    @else
                                                        <input onclick="changeUser(0,'{{ route('admin.destroy',['id'=>$val]) }}',this)"type="checkbox" checked="true">
                                                    @endif
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-simple dropdown-toggle"
                                                   data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#">查看</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('admin.edit',['id'=>$val]) }}">修改</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                           ids="{{ route('admin.destroy',$val) }}" class="del">删除</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>

            </div>

        </div>
        {{ $data->appends(request()->except('page'))->links() }}

    </div>

@endsection

@section('js')

    <script>
        $(function () {
            $('.del').click(function () {
                var url = $(this).attr('ids');
                var that = this;
                $.ajax({
                    url,
                    data: {'_token': "{{ csrf_token() }}"},
                    type: "delete",
                }).then(res => {
                    $(that).parents('tr').remove();
                })
            })
        })

        
        //改变用户状态
        
        function changeUser(status,url,that) {

            if (status == 0) {
                $.ajax({
                    url,
                    data: {'_token': "{{ csrf_token() }}"},
                    type: "delete",
                }).then(res => {
                   $(that).attr('checked','false')
                })
            }else{
                $.ajax({
                    url,
                }).then(res => {

                    console.log(res);
                    $(that).attr('checked','true')
                })
            }
        }
    </script>

@endsection








