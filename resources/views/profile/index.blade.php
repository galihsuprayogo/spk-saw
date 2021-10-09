@extends('layouts.app', ['activePage' => 'pengguna', 'titlePage' => __('Profil Pengguna')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabel Daftar Pengguna</h4>
            <p class="card-category"> * Hanya admin yang dapat mengelola </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Tanggal dibuat
                  </th>
                  <th>
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                              <td>
                              {{ $user->id }}
                              </td>
                              <td>
                              {{ $user->name }}
                              </td>
                              <td>
                              {{ $user->email }}
                              </td>
                              <td>
                              {{ $user->created_at }}
                              </td>
                              <td>
                                        <div class="card-footer ml-0 mr-0">
                                                  <form action="{{ route('profile.maintenance', $user->id) }}" method="POST">
                                                            <button type="submit" class="btn btn-warning">{{ __('Edit') }}</button>
                                                            {{ csrf_field() }}
                                                  </form>
                                        </div>
                              </td>
                              <td>
                                        <div class="card-footer ml-0 mr-0">
                                                  <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                                        </div>
                              </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
