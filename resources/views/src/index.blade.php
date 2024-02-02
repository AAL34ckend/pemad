<html lang="en">
    @include('includes.head')
  <body>
    <div class="container bg-light">
        <div class="mt-5">
            <div class="d-flex justify-content-between my-4">
                <div class="d-flex gap-3">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Daftar pengguna
                        </button>
                        <ul class="dropdown-menu">
                          @foreach($managements as $value)
                            <li><a class="dropdown-item disabled" href="#">{{ $value->users }}</a></li>
                          @endforeach
                        </ul>
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($lang as $ln)
                                <option selected>{{ $ln->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <span>
                    <a href="{{ route('management-system.create') }}" class="btn btn-primary">+Add Data</a>
                </span>
            </div>
            <table class="table">
                <thead class="text-center">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Klien</th>
                    <th scope="col">Tipe Pekerjaan</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Proyek</th>
                    <th scope="col">Penawaran Jasa</th>
                    <th scope="col">Permintaan Jasa</th>
                    <th scope="col">Tagihan</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Pesanan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($managements as $key => $management)
                    <tr class="text-center">
                        <td>{{ $key + 1 }}.</td>
                        <td>{{ $management->clients }}</td>
                        <td>{{ $management->type_jobs }}</td>
                        <td>{{ $management->jobs }}</td>
                        <td>{{ $management->projects }}</td>
                        <td>{{ $management->service_offerings }}</td>
                        <td>{{ $management->service_requests }}</td>
                        <td>{{ $management->payments }}</td>
                        <td>{{ $management->phurcase_orders }}</td>
                        <td>{{ $management->orders }}</td>
                        <td class="d-flex gap-2">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?')" action="{{ route('management-system.destroy',$management->id) }}" method="POST">
                                <a href="{{ route('management-system.show',$management->id) }}" class="btn btn-sm btn-success">Lihat</a>
                                <a href="{{ route('management-system.edit',$management->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger delete-confirmationa">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('includes.js')
  </body>
</html>
