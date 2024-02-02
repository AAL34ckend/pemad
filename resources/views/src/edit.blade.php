<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <div class="container bg-light">
        <div class="mt-5 mb-2">
            <div class="d-flex justify-content-between pt-3">
                <h2>Edit Data</h2>
                <span>
                    <a href="{{ route('management-system.index') }}" class="btn btn-primary">Kembali</a>
                </span>
            </div>
            <form action="{{ route('management-system.update',$management->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row my-4">
                    <div class="col-6">
                        <label for="user" class="form-label">User</label>
                        <input type="text" class="form-control mb-3 @error('user') is-invalid @enderror" name="user" placeholder="Masukkan User" value="{{ $management->users }}">
                        <label for="clients" class="form-label">Klien</label>
                        <input type="text" class="form-control mb-3 @error('clients') is-invalid @enderror" name="clients" placeholder="Masukkan Klien" value="{{ $management->clients }}">
                        <label for="type_job" class="form-label">Tipe Pekerjaan</label>
                        <select class="form-select mb-3 @error('type_job') is-invalid @enderror" aria-label="Default select example" name="type_job">
                            <option selected disabled>{{ $management->type_jobs }}</option>
                            <option value="Magang">Magang</option>
                            <option value="kerja Lepas">Kerja Lepas</option>
                            <option value="Kerja Sukarela">Kerja Sukarela</option>
                            <option value="Paruh Waktu">Paruh Waktu</option>
                            <option value="Penuh waktu">Penuh waktu</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                        <label for="job" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control mb-3 @error('job') is-invalid @enderror" name="job" placeholder="Pekerjaan" value="{{ $management->jobs }}">
                        <label for="projects" class="form-label">Proyek</label>
                        <input type="text" class="form-control mb-3 @error('project') is-invalid @enderror" name="project" placeholder="Proyek" value="{{ $management->projects }}">
                        <label for="service_offerings" class="form-label">Penawaran Jasa</label>
                        <input type="text" class="form-control mb-3 @error('service_offering') is-invalid @enderror" name="service_offering" placeholder="Penawaran Jasa" value="{{ $management->service_offerings }}">
                    </div>
                    <div class="col-6">
                        <label for="service_request" class="form-label">Permintaan jasa</label>
                        <input type="text" class="form-control mb-3 @error('service_request') is-invalid @enderror" name="service_request" placeholder="Permintaan jasa" value="{{ $management->service_requests }}">
                        <label for="payment" class="form-label">Tagihan</label>
                        <input type="text" class="form-control mb-3 @error('payment') is-invalid @enderror" name="payment" placeholder="Tagihan" value="{{ $management->payments }}">
                        <label for="phurcase_order" class="form-label">Pembayaran</label>
                        <input type="text" class="form-control mb-3 @error('phurcase_order') is-invalid @enderror" name="phurcase_order" placeholder="Pembayaran" value="{{ $management->phurcase_orders }}">
                        <label for="order" class="form-label">Pesanan</label>
                        <input type="text" class="form-control mb-3 @error('order') is-invalid @enderror" name="order" placeholder="pesanan" value="{{ $management->orders }}">
                        <label for="reference" class="form-label">Referensi Perusahaan</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control mb-3 @error('bank_account') is-invalid @enderror" name="bank_account" placeholder="Akun Bank" value="{{ $management->bank_accounts }}">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control mb-3 @error('no_rekening') is-invalid @enderror" name="no_rekening" placeholder="No Rekening" value="{{ $management->no_rekenings }}">
                            </div>
                        </div>
                        <input type="text" class="form-control mb-3 @error('no_handphone') is-invalid @enderror" name="no_handphone" placeholder="No Telepon" value="{{ $management->no_handphones }}">
                    </div>
                </div>
                <div class="pb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
    @include('includes.js')
</body>
</html>
