@section('title', __('Permintaan Baru'))
<x-layouts.app :title="__('Permintaan Baru')">
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Pegawai</h5>
    </div>
    <div class="card p-4">  
      <form method="POST" action="{{ route('pegawai.store') }}" wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
          <div class="col-md-10">
            <input name="nama" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">NIP</label>
          <div class="col-md-10">
            <input name="nip" class="form-control" type="search" value="" id="html5-search-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Pangkat</label>
          <div class="col-md-10">
            <input name="pangkat_gol" class="form-control" type="text" value="" id="html5-email-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Jabatan</label>
          <div class="col-md-10">
            <input name="jabatan" class="form-control" type="text" value="" id="html5-url-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-tel-input" class="col-md-2 col-form-label">Unit Kerja</label>
          <div class="col-md-10">
            <input name="unit_kerja" class="form-control" type="text" value="" id="html5-tel-input" />
          </div>
        </div>
        
        <button type="submit" class="btn rounded-pill me-2 btn-success">Success</button>
      </form>
    </div>
</x-layouts.app>
