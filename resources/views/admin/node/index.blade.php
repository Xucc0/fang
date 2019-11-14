@extends('admin.public.main')


@section('cnt')

    <div class="page static-page-tables">
        <!-- row -->
        <a class="btn btn-raised btn-cyan" style="background-color:#49cdd0;color: #fff;"
           href="{{ route('admin.node.create') }}">添加权限</a>
        <div class="row">
            <div class="col-md-12">
                <section class="boxs">
                    <div class="boxs-header">
                        <h3 class="custom-font hb-cyan">
                            <strong>权限</strong>列表</h3>
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
                                    <th>ID</th>
                                    <th>节点名称</th>
                                    <th>路由别名</th>
                                    <th>是否菜单</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $val)
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="nowrap">
                                            <strong>{{ $val['id'] }}</strong>
                                        </td>
                                        <td class="maw-320">
                                            <span class="truncate" style="padding-left: {{$val['level']*30}}px;">{{ $val['name'] }}</span>
                                        </td>
                                        <td class="maw-320">
                                            <span class="truncate">{{ $val['route_name'] }}</span>
                                        </td>
                                        <td class="maw-320">
                                            @if($val['is_menu'] == '1')
                                            <span class="label label-info label-pill">是</span>
                                            @else
                                                <span class="label label-primary label-pill">否</span>
                                            @endif
                                        </td>
                                        <td class="td-actions text-left" width="300">
                                            <button type="button" rel="tooltip"  class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-user" style="font-size: 20px;"></i>
                                            </button>
                                            <button type="button" rel="tooltip"  class="btn btn-success btn-simple btn-xs">
                                                <a href="{{ route('admin.role.edit',['id'=>$val['id']]) }}"><i class="fa fa-edit" style="font-size: 20px;"></i></a>
                                            </button>
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

    </div>

@endsection

@section('js')

    <script>
        $(function () {
            $('.edit-role').click(function () {
                alert('ok');
            })
        })

    </script>

@endsection








