@section('title', __('Permintaan'))
<x-layouts.app :title="__('Dashboard')">
    <div class="card">
      <div class="row">
        <div class="col-lg-10">
          <h5 class="card-header">Daftar Pengajuan</h5>
        </div>
        <div class="col-lg-1 mt-5">
          <a class="btn btn-primary ml-4" href="{{ route('permintaan.add') }}" wire:navigate>{{ __('Baru') }}</a>
        </div>
      </div>
      <div class="m-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Pengaju</th>
          <th>Perihal</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th>Actions</th>
          
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($data as $perm => $p )
        <tr>
          <td>
            <i class="icon-base fab fa-angular text-danger me-4"></i>
            <span class="fw-medium">{{ $p->nomor }}</span>
          </td>
          <td>{{ $p->pegawai->nama }}</td>
          <td>
            {{ $p->perihal }}
          </td>
          <td>
            {{ $p->tanggal }}
          </td>
          <td><span class="badge @if($p->status == 'Mengajukan') bg-label-warning 
          @elseif($p->status == 'Ditolak') bg-label-danger 
          @elseif($p->status == 'Diterima') bg-label-success 
          @endif me-1">{{ $p->status }}</span></td>
          <td>
            <div class="dropdown">
              <button
                type="button"
                class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="icon-base bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/permintaan/edit/{{$p->id}}"
                  ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                >
                <a class="dropdown-item" wire:click="delete"
                  wire:confirm="Are you sure you want to delete this post?" 
                  href="/permintaan/delete/{{$p->id}}"
                  wire:navigate
                  ><i class="icon-base bx bx-trash me-1"></i>Delete</a
                >
              </div>
            </div>
          </td>
        </tr>
        @endforeach
        <!-- <tr>
          <td>
            <i class="icon-base fab fa-react text-info me-4"></i>
            <span class="fw-medium">React Project</span>
          </td>
          <td>Barry Hunter</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Lilian Fuller">
                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
              </li>
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Sophia Wilkerson">
                <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
              </li>
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Christina Parker">
                <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-success me-1">Completed</span></td>
          <td>
            <div class="dropdown">
              <button
                type="button"
                class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="icon-base bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"
                  ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                >
                <a class="dropdown-item" href="javascript:void(0);"
                  ><i class="icon-base bx bx-trash me-1"></i>Delete</a
                >
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <i class="icon-base fab fa-vuejs text-success me-4"></i>
            <span class="fw-medium">VueJs Project</span>
          </td>
          <td>Trevor Baker</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Lilian Fuller">
                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
              </li>
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Sophia Wilkerson">
                <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
              </li>
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Christina Parker">
                <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-info me-1">Scheduled</span></td>
          <td>
            <div class="dropdown">
              <button
                type="button"
                class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="icon-base bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"
                  ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                >
                <a class="dropdown-item" href="javascript:void(0);"
                  ><i class="icon-base bx bx-trash me-1"></i>Delete</a
                >
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <i class="icon-base fab fa-bootstrap text-primary me-4"></i>
            <span class="fw-medium">Bootstrap Project</span>
          </td>
          <td>Jerry Milton</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Lilian Fuller">
                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
              </li>
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Sophia Wilkerson">
                <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
              </li>
              <li
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="top"
                class="avatar avatar-xs pull-up"
                title="Christina Parker">
                <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-warning me-1">Pending</span></td>
          <td>
            <div class="dropdown">
              <button
                type="button"
                class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="icon-base bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"
                  ><i class="icon-base bx bx-edit-alt me-1"></i>Edit</a
                >
                <a class="dropdown-item" href="javascript:void(0);"
                  ><i class="icon-base bx bx-trash me-1"></i>Delete</a
                >
              </div>
            </div>
          </td>
        </tr> -->
      </tbody>
    </table>
  </div>
</div>
</x-layouts.app>
