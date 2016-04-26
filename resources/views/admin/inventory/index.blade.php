@extends('admin.template')
@section('content')
    <style>
        .new {
            margin-left: 15px;
        }

        .panel_toolbox > li > a.new:hover {
            background: #4B5F71;
        }
    </style>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $page_name }}
                    <small> All</small>
                </h2>

                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('panel/inventory/create') }}" class="  btn btn-dark new" style=""> New Item </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if(Session::has('inventory_new'))
                    <div class="alert alert-success"> {{ Session('inventory_new') }} </div>
                @endif

                @if(Session::has('inventory_edit'))
                    <div class="alert alert-success"> {{ Session('inventory_edit') }} </div>
                @endif

                @if(Session::has('delete_tool'))
                    <div class="alert alert-success"> {{ Session('delete_tool') }} </div>
                @endif

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Photo</th>
                        <th>PNR</th>
                        <th>SNR</th>
                        <th> Vendor</th>
                        <th>Status</th>
                        <th style="width: 20%">#Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invents as $invent)
                        <tr>
                            <td>{{ $invent->id }}</td>
                            <td class="col-xs-2"><img style="width: 100%" src="{{ asset($invent->photo) }}" alt=""></td>
                            <td>
                                {{ $invent->pnr }}
                            </td>
                            <td> {{ $invent->snr }} </td>
                            <td> {{ $invent->vendor }} </td>
                            <td>
                                @if($invent->status == 1)
                                    <button type="button" class="btn btn-success btn-xs">available</button>
                                @else
                                    <button type="button" class="btn btn-info btn-xs">unavailable</button>
                                @endif
                            </td>
                            <td>
                                <a id="display_modal" data-link="{{ url('panel/inventory/show/'.$invent->id) }}"
                                   data-toggle="modal"
                                   data-target="#myModal" class="btn btn-primary
                                btn-xs"><i
                                            class="fa fa-folder"></i> View </a>
                                <a href="{{ url('panel/inventory/edit/'.$invent->id) }}" class="btn btn-info btn-xs"><i
                                            class="fa fa-pencil"></i> Edit </a>

                                {!!  Form::open(["method" => "post", "url"=>'panel/inventory/delete/'.$invent->id , "class" => "form-inline"])  !!}
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('scripts')
    <script>
        $('body').on('click', '#display_modal', function () {
            var url = $(this).data('link');
            $.ajax({
                url: url,
                success: function (response) {
                    $('#myModal').empty().append(response);
                }
            })
        })
    </script>
@stop
