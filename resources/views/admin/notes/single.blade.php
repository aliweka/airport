<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ $note->mail}}</h4>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 1%">ID</th>
                    <th style="width: 20%"> mail</th>
                    <th> message</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>
                        {{ $note->mail}}
                    </td>
                    <td> {{ $note->note }} </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
