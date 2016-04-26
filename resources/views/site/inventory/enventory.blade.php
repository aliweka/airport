@extends('site.template')
@section('content')
    <style>
        .btn-primary {
            margin-top: 0;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    @if(Session::has('order_new'))
                        <div class="alert alert-success"> {{ Session('order_new') }} </div>
                    @endif
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span
                                    class="glyphicon glyphicon-filter"></span>Filter
                        </button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Photo" disabled="disabled"></th>
                        <th><input type="text" class="form-control" placeholder="PNR" disabled></th>
                        <th><input type="text" class="form-control" placeholder="SNR" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Vendor" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Leave Note" disabled></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invents as $invent)
                        <tr>
                            <td class="col-xs-2"><img style="width: 100%" src="{{ asset($invent->photo) }}"/></td>
                            <td>{{ $invent->pnr }}</td>
                            <td>{{ $invent->snr }}</td>
                            <td>
                                @if($invent->status == 1)
                                    Available <br>
                                    <a data-link="{{ url('enventory/rfq/'.$invent->id) }}" id="display_modal"
                                       data-toggle="modal"
                                       data-target="#order" class="btn btn-success
                                    btn-xs">RFQ</a>
                                @else
                                    Unavailable
                                @endif
                            </td>
                            <td>{{ $invent->vendor }}</td>
                            <td>

                                <button class="btn btn-info" data-toggle="modal" data-target="#note">Note</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="order" tabindex="-1" role="dialog">
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
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="note" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="errors">

                    </div>
                    {!! Form::open(['url'=>'panel/notes','id'=>'note_form']) !!}
                    {!! Form::label('mail','Your email here :') !!}
                    {!! Form::email('mail',null,['class'=>'form-control']) !!}
                    {!! Form::label('note','Your Note :') !!}
                    {!! Form::textarea('note',null,['class'=>'form-control']) !!}
                    {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
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
                    $('#order').empty().append(response);
                }
            });
        });
    </script>

    <script>
        $('body').on('submit', '#order_form', function (e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                url: url,
                dataType: 'json',
                data: data,
                type: "post",
                error: function (response) {
                    var error = '<ul>';
                    $.each(response.responseJSON, function (key, value) {
                        error += '<li class="alert alert-danger">' + value + '</li>'
                    });
                    error += '</ul>';
                    $('.error').empty().append(error);
                },
                success: function (response) {
                    $('#order').modal('hide');
                }
            })
        });

        $('body').on('submit', '#note_form', function (e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                url: url,
                data: data,
                dataType: 'json',
                type: 'post',
                errors: function (response) {
                    var errors = '<ul>';
                    $.each(response.responseJson, function (key, value) {
                        errors = '<li class="alert alert-danger">' + value + '</li>'
                    });
                    errors += '</ul>';
                    $('.errors').append(errors);
                }, success: function (response) {
                    $('#note').modal('hide');
                }
            })
        })
    </script>
@stop