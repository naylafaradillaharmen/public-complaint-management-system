<div class="modal fade" id="edit{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" value="{{ $row->name }}" class="form-control" name="name" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{ $row->email }}" class="form-control" name="email" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="number" value="{{ $row->phone }}" class="form-control" name="phone" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK</label>
                        <input type="number" value="{{ $row->nik }}" class="form-control" name="nik" required placeholder="...">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Foto Profile</label>
                        <input type="file" class="form-control" name="image" placeholder="...">
                        @if($row->image)
                        <small class="form-text text-muted">Current:</small>
                        <img src="{{ asset('storage/public/usersImages/'. $row->image) }}"
                         style="max-width:120px; height:auto; margin-top:6px;" alt="Current profile">
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Lengkap</label>
                        <input type="text" value="{{ $row->address }}" class="form-control" name="address" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gender</label> <br>
                        <input type="radio" name="gender" value="male" {{ $row->gender == 'male' ? 'checked' : '' }} required> Pria
                        <input type="radio" name="gender" value="female" {{ $row->gender == 'female' ? 'checked' : '' }}> Wanita
                    </div>

                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-control" required>
                            <option value="admin" {{ $row->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $row->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label> <br>
                        <input type="text" name="password" class="form-control" placeholder="Kosongkan Jika tidak mengganti Password">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>