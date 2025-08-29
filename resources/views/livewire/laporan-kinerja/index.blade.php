@section('title', __('Laporan kinerja'))
<div>
    <div class="card">
        <div class="row">
            <div class="col-lg-8">
                <h5 class="card-header">Laporan Kinerja</h5>
            </div>

            <div class="col-lg-3 mt-5">
                <input placeholser="cari..." wire:model="search" class="form-control" wire:keydown="searchData" />
            </div>
            <div class="col-lg-1 mt-5">
                <a class="btn btn-primary ml-4" href="{{ route('laporan-kinerja.add') }}" wire:navigate>{{ __('Baru') }}</a>
            </div>
        </div>
        <div class="m-2">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>


        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                        <th>Uraian Kegiatan</th>
                        <th>Volume</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($data as $perm => $p )
                    <tr>
                        <td>{{ ($p->tanggal)  }}</td>
                        <td>{{ ($p->kegiatan)  }}</td>
                        <td>{{ ($p->uraian_kegiatan)  }}</td>
                        <td>{{ ($p->volume)  }}</td>
                        <td>{{ ($p->bulan)  }}</td>
                        <td>{{ ($p->tahun)  }}</td>
                        <td>
                            <div class="dropdown">
                                <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/laporan-kinerja/edit/{{$p->id}}" wire:navigate><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a>
                                    <buton class="dropdown-item"  wire:click="confirmDelete('{{ $p->kegiatan }}')"><i class="icon-base bx bx-trash me-1"></i>Delete</buton>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <nav aria-label="Page navigation " class="m-2">

            {{ $data->links() }}

        </nav>
    </div>
</div>