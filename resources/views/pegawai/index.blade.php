@section('title', __('Permintaan'))
<x-layouts.app :title="__('Dashboard')">
    <div class="card">
      <div class="row">
        <div class="col-lg-10">
          <h5 class="card-header">Daftar Pegawai</h5>
        </div>
        <div class="col-lg-1 mt-5">
          <a class="btn btn-primary ml-4" href="{{ route('pegawai.add') }}" wire:navigate>{{ __('Baru') }}</a>
        </div>
      </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>NIP</th>
          <th>Pangkat/Gol</th>
          <th>Jabatan</th>
          <th>Unit Kerja</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($data as $perm => $p )
        <tr>
          <td>
            <i class="icon-base fab fa-angular text-danger me-4"></i>
            <span class="fw-medium">{{ $p->nama }}</span>
          </td>
          <td>{{ $p->nip }}</td>
          <td>
            {{ $p->pangkat_gol }}
          </td>
          <td>
            <span class="">{{ $p->jabatan }}</span>
          </td>
          <td><span class="">{{ $p->unit_kerja }}</span></td>
          <td>
            <div class="dropdown">
              <button
                type="button"
                class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="icon-base bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/pegawai/edit/{{$p->id}}"
                  ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                >
                <a class="dropdown-item" href="/pegawai/delete/{{$p->id}}"
                  ><i class="icon-base bx bx-trash me-1"></i>Delete</a
                >
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
  </div>

  <nav aria-label="Page navigation ">

    <ul class="pagination pagination-rounded pagination-outline-primary ml-5 mt-5">

    @foreach(collect($data)->toArray()['links'] as $pages => $page)
      @if(str_contains($page['label'],"Previous"))
    
        <li class="page-item next ">
          <a class="page-link" href="{{ $page['url'] }}"  wire:navigate><i class="icon-base bx bx-chevrons-left icon-sm"></i></a>
        </li>
      @elseif(str_contains($page['label'],"Next"))
        <li class="page-item prev ">
          <a class="page-link" href="{{ $page['url'] }}"  wire:navigate><i class="icon-base bx bx-chevrons-right icon-sm"></i></a>
        </li>
      @else
        <li class="page-item @if($page['active']) active @endif">
          <a class="page-link "  href="{{ $page['url'] }}"  wire:navigate>{{ $page['label'] }}</a>
        </li>
      @endif 
    @endforeach
      
    </ul>
  </nav>
</div>

</x-layouts.app>
