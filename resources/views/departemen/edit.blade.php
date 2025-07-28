<form action="/departemen/{{ $departemen->kode_dept }}/update" method="POST" id="frmDepartemen">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                        <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                        <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M5 11h1v2h-1z"></path>
                        <path d="M10 11l0 2"></path>
                        <path d="M14 11h1v2h-1z"></path>
                        <path d="M19 11l0 2"></path>
                    </svg>
                </span>
                <input type="text" value="{{ $departemen->kode_dept }}" id="nik" class="form-control" placeholder="Kode Dept" name="kode_dept" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                </span>
                <input type="text" id="nama_dept" value="{{ $departemen->nama_dept }}" class="form-control" name="nama_dept" placeholder="Nama pendidik">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 14l11 -11"></path>
                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</form>
<script>
    $("#frmEditkaryawan").submit(function() {
        var nik = $("#frmEditkaryawan").find("#nik").val();
        var nama_lengkap = $("#frmEditkaryawan").find("#nama_lengkap").val();
        var jabatan = $("#frmEditkaryawan").find("#jabatan").val();
        var no_hp = $("#frmEditkaryawan").find("#no_hp").val();
        var kode_dept = $("#frmEditkaryawan").find("#kode_dept").val();
        var kode_cabang = $("#frmEditkaryawan").find("#kode_cabang").val();


        if (nik == "") {
            // alert('Nik Harus Diisi');
            Swal.fire({
                title: 'Peringatan!',
                text: 'Username Harus Diisi !',
                icon: 'warning',
                confirmButtonText: 'Ok'
            }).then((result) => {
                $("#nik").focus();
            });

            return false;
        } else if (nama_lengkap == "") {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Nama Harus Diisi !',
                icon: 'warning',
                confirmButtonText: 'Ok'
            }).then((result) => {
                $("#nama_lengkap").focus();
            });

            return false;
        } else if (jabatan == "") {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Jabatan Harus Diisi !',
                icon: 'warning',
                confirmButtonText: 'Ok'
            }).then((result) => {
                $("#jabatan").focus();
            });

            return false;
        } else if (no_hp == "") {
            Swal.fire({
                title: 'Peringatan!',
                text: 'No. HP Harus Diisi !',
                icon: 'warning',
                confirmButtonText: 'Ok'
            }).then((result) => {
                $("#no_hp").focus();
            });

            return false;
        } else if (kode_dept == "") {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Kategori pendidik harus di pilih !',
                icon: 'warning',
                confirmButtonText: 'Ok'
            }).then((result) => {
                $("#kode_dept").focus();
            });

            return false;
        } else if (kode_cabang == "") {
            Swal.fire({
                title: 'Peringatan!',
                text: 'Cabang Harus Diisi !',
                icon: 'warning',
                confirmButtonText: 'Ok'
            }).then((result) => {
                $("#kode_cabang").focus();
            });

            return false;
        }
    });
</script>
