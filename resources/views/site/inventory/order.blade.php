<style>
    .btn-primary {
        margin-top: 0;
    }
</style>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ $tool->pnr }}</h4>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 20%"> Photo</th>
                    <th>PNR</th>
                    <th>SNR</th>
                    <th> Vendor</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col-xs-2"><img style="width: 100%" src="{{ asset($tool->photo) }}" alt=""></td>
                    <td>
                        {{ $tool->pnr }}
                    </td>
                    <td> {{ $tool->snr }} </td>
                    <td> {{ $tool->vendor }} </td>
                    <td>
                        @if($tool->status == 1)
                            <button type="button" class="btn btn-success btn-xs">available</button>
                        @else
                            <button type="button" class="btn btn-info btn-xs">unavailable</button>
                        @endif
                    </td>

                </tr>
                </tbody>
            </table>
            <hr>
            <div class="error">

            </div>
            {!! Form::open(['url'=>'/enventory','id'=>'order_form']) !!}
            <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    {!! Form::label('count','Items :') !!}
                    {!! Form::number('count',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-xs-12 col-md-6">
                    {!! Form::label('email','Email:') !!}
                    {!! form::email('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-xs-12 col-md-6">
                    {!! Form::label('name','Name:') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-xs-12 col-md-6">
                    {!! Form::label('phone','Telephone :') !!}
                    {!! Form::tel('phone',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                {!! Form::label('company','company:') !!}
                {!! Form::text('company',null,['class'=>'form-control']) !!}
            </div>
            <input type="hidden" name="product_id" value="{{ $tool->id }}">

            {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="modal-footer">
            {!! Form::submit('close',['class'=>'btn btn-default','data-dismiss'=>'modal']) !!}
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
