@extends('admin.public.main')

@section('css')

    <link rel="stylesheet" href="/datatables/media/css/jquery.dataTables.css">

@endsection
@section('cnt')

    <div class="page static-page-tables">
        <div class="row">
            <div class="col-md-12">
                <section class="boxs">
                    <div class="boxs-header">
                        <h3 class="custom-font hb-cyan">
                            <strong>文章</strong>列表</h3>
                    </div>

                    <div style="width: 30%; margin-left: 10px;">
                            <div class="input-group">
                                <input type="text" value="{{ request()->get('kw') }}" class="form-control"
                                       placeholder="Search..." name="kw">
                                <span class="input-group-btn">
                                <button class="btn btn-raised btn-cyan" type="button"
                                        style="background-color:#49cdd0;color: #fff;" onclick="searchBtn()">查找</button>
                            </span>
                            </div>
                    </div>

                    <div class="boxs-body p-0">
                        <div class="table-responsive">
                            <table class="table table-middle" id="table-sort">
                                <thead class="delbtn">
                                <tr class="text-c">
                                    <th>ID</th>
                                    <th>标题</th>
                                    <th>描述</th>
                                    <th>分类</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
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
    <script src="/datatables/media/js/jquery.dataTables.js"></script>
    {{--    <script src="/datatables/media/js/jquery.js"></script>--}}

    <script>

        const datatable = $('#table-sort').dataTable({
            columnDefs: [
                {targets: [4], orderable: false}
            ],
            searching:false,

            order:[['{{request()->get('filed')??0}}','{{ request()->get('order')??'desc' }}']],
            //开启服务端分页

            displayStart:'{{request()->get('start')??0}}',

            serverSide:true,

            ajax:{
                url: '{{route('admin.article.index')}}',
                type:'GET',
                data:function (ret) {
                    ret.kw=$.trim($('input[name=kw]').val());
                }
            },
            columns: [
                {data:'id',className:'text-c'},
                {data:'title'},
                {data:'desn'},
                {data:'cates.cname'},
                {data:'actionBtn',className: 'text-c'}
            ],

        })



        function searchBtn(){
            datatable.api().ajax.reload();
        }


        $('#table-sort').on('click','.deluser', function(){

            var url = $(this).attr('href');
            console.log(url);

            fetch(url,{
                method:'delete',

                headers:{
                    'x-csrf-token':'{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).then(ret=>{
                return ret.json();
            }).then(res=>{
                if (res.status == 200){

                $(this).parents('tr').remove();
                }
            })
            return false;
        })

    </script>

@endsection








