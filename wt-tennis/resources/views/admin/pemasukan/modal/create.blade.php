<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Create Data Entry</h4>
            </div>
            <div class="modal-body">
              {!! Form::model(new App\Model\Pemasukan, ['action' => 'PemasukanController@store', 'files' => true,  'class'=>'form-horizontal']) !!}
                  @include('admin.pemasukan.form.form', ['submit_text' => 'Add Event'])
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div><!-- /.modal -->