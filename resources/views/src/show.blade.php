<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <div class="container bg-light">
        <div class="mt-5 mb-2">
            <div class="d-flex justify-content-between pt-3">
                <h2>Data</h2>
                <span>
                    <a href="{{ route("management-system.index") }}" class="btn btn-primary">Kembali</a>
                </span>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    <label for="users" class="form-label">User</label>
                    <input type="text" class="form-control mb-3" placeholder="Masukkan User" disabled value="{{ $management->users }}">
                    <label for="clients" class="form-label">Klien</label>
                    <input type="text" class="form-control mb-3" placeholder="Masukkan Klien" disabled value="{{ $management->clients }}">
                    <label for="type_job" class="form-label">Tipe Pekerjaan</label>
                    <select class="form-select mb-3" aria-label="Default select example" disabled>
                        <option value="{{ $management->type_jobs }}">{{ $management->type_jobs }}</option>
                    </select>
                    <label for="job" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control mb-3" placeholder="Pekerjaan" value="{{ $management->jobs }}" disabled>
                    <label for="projects" class="form-label">Proyek</label>
                    <input type="text" class="form-control mb-3" placeholder="Proyek" value="{{ $management->projects }}" disabled>
                    <label for="service_offerings" class="form-label">Penawaran Jasa</label>
                    <input type="text" class="form-control mb-3" placeholder="Penawaran Jasa" value="{{ $management->service_offerings }}" disabled>
                </div>
                <div class="col-6">
                    <label for="service_request" class="form-label">Permintaan jasa</label>
                    <input type="text" class="form-control mb-3" value="{{ $management->service_requests }}" disabled>
                    <label for="payment" class="form-label">Tagihan</label>
                    <input type="text" class="form-control mb-3" value="{{ $management->payments }}" disabled>
                    <label for="phurcase_order" class="form-label">Pembayaran</label>
                    <input type="text" class="form-control mb-3" value="{{ $management->phurcase_orders }}" disabled>
                    <label for="order" class="form-label">Pesanan</label>
                    <input type="text" class="form-control mb-3" value="{{ $management->orders }}" disabled>
                    <label for="reference" class="form-label">Referensi Perusahaan</label>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" name="bank_account" placeholder="Akun Bank" value="{{ $management->bank_accounts }}" disabled>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" value="{{ $management->no_rekenings }}" disabled>
                        </div>
                    </div>
                    <input type="text" class="form-control mb-3" value="{{ $management->no_handphones }}" disabled>
                </div>
            </div>
        </div>
    </div>
    @include('includes.js')
</body>
</html>
