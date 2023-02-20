<div class="modal animation-modal fade" id="validasiSurat{{$s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">Validasi Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span ></button>
            </div>
            <form action="{{ route('validasisurat.post', $s->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-12 col-form-label">Email</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="email" id="example-text-input" value="{{ $s->email }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-12 col-form-label">Upload File</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="example-text-input" name="surat" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-12 col-form-label">Keterangan</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="example-text-input" name="keterangan"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close</button>
                    <button type="submit" class="btn btn-primary">Kirimkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
