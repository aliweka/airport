@extends('admin.template')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $page_name }}
                    <small> {{ $sub }} </small>
                </h2>

                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @include('errors.list')
                <br/>
                {!! Form::model($tool,['class'=>'form-horizontal form-label-left', 'files'=>true]) !!}
                {{--<form class="form-horizontal form-label-left">--}}
                <img height="150px" width="200px" src="{{ asset($tool->photo) }}" alt="">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> photo </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! Form::file('photo',null,['class'=>'form-control']) !!}
                        {{--<input type="file" class="form-control" placeholder="Photo" name="photo">--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">SNR</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! Form::number('snr',null,['class'=>'form-control']) !!}
                        {{--<input type="number" class="form-control" placeholder="snr" name="snr">--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">PNR</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! Form::number('pnr',null,['class'=>'form-control']) !!}
                        {{--<input type="number" class="form-control" placeholder="PNR" name="pnr">--}}
                    </div>
                </div>

                <div class="form-group">
                    <div class="control-label col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="radio">
                        <label>
                            {!! Form::radio('status','1',['id'=>'optionsRadios1']) !!}
                            {{--                            {!! Form::radio('status',null,['id'=>'optionsRadios1','value'=>'1','checked'=>'checked']) !!}--}}
                            {{--<input type="radio" name="status" id="optionsRadios1" value="1">--}}
                            available
                        </label>
                    </div>
                    <div class="control-label col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="radio">
                        <label>
                            {!! Form::radio('status','0',['id'=>'optionsRadios2']) !!}
                            {{--<input type="radio" name="status" id="optionsRadios2" value="0">--}}
                            unavailable
                        </label>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">vendor</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! Form::text('vendor',null,['class'=>'form-control'])!!}
                        {{--<input type="text" class="form-control" placeholder="vendor" name="vendor">--}}
                    </div>
                </div>


                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        {!! Form::submit('submit',['class'=>'btn btn-success']) !!}
                        {!! Form::reset('close',['class'=>'btn btn-primary']) !!}
                    </div>
                </div>


                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop