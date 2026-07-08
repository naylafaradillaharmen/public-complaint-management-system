<div class="modal fade" id="editstatus{{ $row->id  }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg border-0 rounded-4xl">
            <div class="modal-header bg-primary text-white rounded-top-4">
                <h4 class="modal-title fw-bold">Update Status Pengaduan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('update.status', $row->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <select name="status" id="status" class="form-control">
                                    <option value="{{ $row->status }}">{{ $row->status }}</option>
                                    <option value="pending" {{ $row->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="in_progress" {{ $row->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="resolve" {{ $row->status == 'resolve' ? 'selected' : '' }}>Resolved</option>
                                    <option value="rejected" {{ $row->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>
                            <div class="modal-footer bg-white border-0 rounded-bottom-4 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</div>