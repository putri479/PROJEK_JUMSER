<div>
    <h1>Kela Table</h1>


    <!-- Modal Add Form -->
    <div class="modal fade" id="modal-add" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kela</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input wire:model="form.nama_kelas" type="text" class="form-control" id="nama_kelas">
                        @error('form.nama_kelas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" wire:click="save" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Form -->
    <div class="modal fade" id="modal-detail" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <fieldset disabled>
                        <div class="form-group mb-3">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input wire:model="form.nama_kelas" type="text" class="form-control" id="nama_kelas">
                            @error('form.nama_kelas')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </fieldset>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Detail Form -->
    <div class="modal fade" id="modal-edit" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Perbarui Kela</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input wire:model="form.nama_kelas" type="text" class="form-control" id="nama_kelas">
                        @error('form.nama_kelas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" wire:click="update" class="btn btn-warning">
                        Perbarui
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-detail" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <fieldset disabled>
                            <div class="form-group mb-3">
                                <label for="nama_kelas">Nama Kelas</label>
                                <input wire:model="form.nama_kelas" type="text" class="form-control" id="nama_kelas">
                                @error('form.nama_kelas')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="card">

        <div class="card-header">

            <div class="row">
                <div class="col-6">
                    <button class="btn btn-sm btn-primary" wire:click="add">Tambah Kela</button>
                </div>
                <div class="col-6">

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="text" wire:model.live="search" class="form-control" placeholder="Cari Kela...">
                    </div>
                </div>
            </div>

        </div>


        <div class="card-body">

            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kelas</th>
                        <th class="float-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($this->kelasList as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + $this->kelasList->firstItem() }}</th>
                            <td>{{ $item->nama_kelas }}</td>
                            <td class="float-end">
                                <button type="button" class="btn btn-sm btn-info"
                                    wire:click="detail({{ $item->id }})">
                                    <i class="bi bi-eye"></i> Detail
                                </button>
                                <button type="button" class="btn btn-sm btn-warning"
                                    wire:click="edit({{ $item->id }})">
                                    <i class="bi bi-pencil"></i> Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger"
                                    wire:click="delete({{ $item->id }})">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">
                                <em>Tidak ada data tersedia.</em>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

            {{ $this->kelasList->links() }}
        </div>


    </div>
</div>
