<div class="modal fade" id="edit{{ $row->id  }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg border-0 rounded-4xl">
            <div class="modal-header bg-primary text-white rounded-top-4">
                <h4 class="modal-title fw-bold">Update Response {{ $row->dataKomplen->judul }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="image-container border rounded-3 overflow-hidden shadow-sm"
                            style="width: 100%; max-width: 300px;">
                            @if($row->dataKomplen->image)
                            <img src="{{ asset('storage/public/complainsImages/'. $row->dataKomplen->image) }}" alt="" class="img-fluid">
                            @else
                            <img src="https://via.placeholder.com/300x300?text=No+Image" class="img-fluid" alt="">
                            @endif
                        </div>
                    </div>
                    <form action="{{ route('update.response') }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $row->id }}">
                        <div class="col-md-8 mt-3 mt-md-0  position-relative">
                            <div class="p-2" style="width: 120%;">
                                <h5 class="fw-semibold text-primary mb-3">{{ $row->dataKomplen->judul }}</h5>
                                <p class="text-primary"><strong>Keterangan Aduan :</strong></p>
                                <p class="text-dark lh-base mb-6">{{ $row->dataKomplen->keterangan }}</p>
                                <p class="text-secondary mb-2"><strong>Response Aduan :</strong></p>
                                <textarea name="response" class="form-control w-100"
                                 style="min-width: 400px; width: 100; max-width: 100%;" rows="4" value="{{ $row->response }}">{{ $row->response }}</textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer bg-white border-0 rounded-bottom-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Update Response</button>
                </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</div>