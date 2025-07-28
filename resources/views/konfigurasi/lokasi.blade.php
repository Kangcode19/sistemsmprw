@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Konfigurasi jam kerja on atau off
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Cabang</th>
                                            <th>Absensi Bebas (Tanpa Batas Waktu)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($konfigurasi_lokasi as $item)
                                        {{ $item->kode_cabang }}
                                        <tr>
                                            <td>{{ $item->nama_cabang }}</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input toggle-bebas-absen" type="checkbox" 
                                                           data-kodecabang="{{ $item->kode_cabang }}" 
                                                           {{ $item->bebas_absen ? 'checked' : '' }}>
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
</div>
@endsection

@push('myscript')
<script>
    $(function () {
        $('.toggle-bebas-absen').change(function () {
            var kode_cabang = $(this).data('kodecabang');
            var bebas_absen = $(this).is(':checked');

            $.ajax({
                type: 'POST',
                url: '{{ route("konfigurasi.lokasi.update") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    kode_cabang: kode_cabang,
                    bebas_absen: bebas_absen
                },
                success: function (response) {
                    if(response.success){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        })
                    } else {
                        Swal.fire({
                            title: 'Gagal!',
                            text: response.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })
                    }
                },
                error: function () {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Tidak dapat terhubung ke server.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                }
            });
        });
    });
</script>
@endpush
