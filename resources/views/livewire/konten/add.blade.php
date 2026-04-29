@section('title', __('Konten Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Konten</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Judul Konten</label>
          <div class="col-md-10">
            <input name="nama" wire:model="judul" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Tanggal</label>
          <div class="col-md-10">
            <input name="nip" wire:model="tanggal"  class="form-control" type="date"  />
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Deskripsi</label>
          <div class="col-md-10">
            <textarea name="deskripsi" wire:model="deskripsi" class="form-control" id="html5-email-input"></textarea>
          </div>
        </div>
        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Link File Konten</label>
          <div class="col-md-10">
            <input name="file" wire:model="foto" class="form-control" type="text"  />
          </div>
        </div>
        
        
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>

