@extends('admin.template')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $page_name }}
                    <small> All</small>
                </h2>

                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%"> email</th>
                        <th>message</th>
                        <th style="width: 20%">#Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notes as $note)
                        <tr>
                            <td> {{ $note->id }} </td>
                            <td> {{ $note->mail }} </td>
                            <td> {{ mb_substr($note->note,0,100)  }} </td>
                            <td>
                                <a id="display_modal" data-link="{{ url('panel/notes/show/'.$note->id) }}"
                                   data-toggle="modal"
                                   data-target="#myModal" class="btn btn-primary
                                btn-xs"><i
                                            class="fa fa-folder"></i> View </a>

                                {!!  Form::open(["method" => "post", "url"=>'panel/notes/delete/'.$note->id , "class" => "form-inline"])  !!}
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