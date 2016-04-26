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
                    <th style="width: 1%">ID </th>
                    <th style="width: 20%"> Photo</th>
                    <th>PNR</th>
                    <th>SNR</th>
                    <th> Vendor</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $tool->id }}</td>
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
