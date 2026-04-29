@section('title', __('Berita Baru'))
<div>
    <div class="card mb-1">
        <h5 class="card-header">Tambah Data Berita</h5>
    </div>
    <div class="card p-4">  
      <form wire:submit.prevent="submit">
        @csrf
        <div class="mb-4 row">
          <label for="html5-text-input" class="col-md-2 col-form-label">Judul Berita</label>
          <div class="col-md-10">
            <input name="nama" wire:model="judul" class="form-control" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-4 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Jenis</label>
          <div class="col-md-10">
              <select name="status" wire:model="tipe" require class="form-select " id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilihan Jenis</option>
                <option value="Pusat">Pusat</option>
                <option value="Wilayah">Wilayah</option>
                <option value="Daerah">Daerah</option>
              </select>
          </div>
        </div>
        <!-- <div class="mb-4 row">
          <label for="html5-search-input" class="col-md-2 col-form-label">Tanggal</label>
          <div class="col-md-10">
            <input name="nip" wire:model="tanggal"  class="form-control" type="date"  />
          </div>
        </div> -->
        
        <div class="mb-4 row">
          <label for="html5-email-input" class="col-md-2 col-form-label">Isi</label>
          <div class="col-md-10">
              <livewire:jodit-text-editor wire:model.live="content" />
           
          </div>
        </div>

        

        <div class="mb-4 row">
          <label for="html5-url-input" class="col-md-2 col-form-label">Link Gambar Berita</label>
          <div class="col-md-10">
            <input name="file" wire:model="foto" class="form-control" type="text"  />
          </div>
        </div>
        
        
        <button type="submit" class="btn me-2 btn-success">Simpan</button>
      </form>
    </div>
</div>




