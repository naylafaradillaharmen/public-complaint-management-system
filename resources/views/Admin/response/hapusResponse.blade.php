<!-- Modal Delete -->
<div class="modal fade" id="delete{{ $row->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg border-0 rounded-4xl">
            <form action="{{ route('delete.response', $row->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $row->id }}">

                <div class="modal-header bg-primary text-white rounded-top-4">
                    <h5 class="modal-title fw-bold">Detail response</h5>
                  
                </div>

                <div class="modal-body bg-light">
                    <p>Apakah kamu yakin ingin menghapus tanggapan: <strong>{{ $row->dataKomplen->judul }}</strong>?</p>
                </div>

                <div class="modal-footer bg-white border-0 rounded-bottom-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>