@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
      <div class="container">
        <h1 class="text-center text-warning">
            <b>Formulir Pendaftaran</b>
          </h1>
      </div>
    </section>
@endsection

@section('content')
    <section class="bg-transparent" style="padding: 10px 10px 10px 10px ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/pesdik/daftar" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="card">
                    <div class="card-header p-2">
                        <h5><i class="nav-icon fas fa-user-graduate my-1 btn-sm-1"></i> Peserta Didik</h5>
                    </div>
                    <div class="card-body bg-transparent">
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <label for="jenjang_daftar">Jenjang Pendaftaran <b>*</b></label>
                                    <select name="jenjang_daftar" class="form-control my-1 mr-sm-1 bg-light" id="jenjang_daftar"required>
                                        <option value="">-- Pilih Jenjang Pendaftaran --</option>
                                        <option value="Paket A">Paket A (setara SD/MI sederajat)</option>
                                        <option value="Paket B">Paket B (setara SMP/MTs sederajat)</option>
                                        <option value="Paket C">Paket C (setara SMA/SMK sederajat)</option>
                                        <option value="Keaksaraan Fungsional / KF">Keaksaraan Fungsional / KF (bagi Buta Aksara)</option>
                                        <option value="Khursus Komputer">Khursus Komputer</option>
                                    </select>
                                <label for="nama_sekolah_asal">Nama Sekolah Asal <b>*</b></label>
                                    <input value="{{old('nama_sekolah_asal')}}" name="nama_sekolah_asal" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_sekolah_asal"
                                    placeholder="Nama Sekolah Asal" required>
                                <label for="alamat_sekolah_asal">Alamat Sekolah Asal <b>*</b></label>
                                    <input value="{{old('alamat_sekolah_asal')}}" name="alamat_sekolah_asal" type="text" class="form-control my-1 mr-sm-1 bg-light" id="alamat_sekolah_asal"
                                    placeholder="Alamat Sekolah Asal" required>
                                <label for="tahun_lulus">Tahun Lulus <b>*</b></label>
                                    <select name="tahun_lulus" class="form-control my-1 mr-sm-1 bg-light" id="tahun_lulus"required>
                                        <option value="">-- Pilih Tahun Lulus --</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                    </select>
                                <label for="nama_lengkap_pesdik">Nama Lengkap Peserta Didik <i>(sesuai ijazah)</i> <b>*</b></label>
                                    <input value="{{old('nama_lengkap_pesdik')}}" name="nama_lengkap_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nama_lengkap_pesdik"
                                    placeholder="Nama Lengkap Peserta Didik" required>
                                <label for="jenis_kelamin_pesdik">Jenis Kelamin <b>*</b></label>
                                    <select name="jenis_kelamin_pesdik" class="form-control my-1 mr-sm-1 bg-light" id="jenis_kelamin_pesdik"required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                <label for="nik_pesdik">Nomor Induk Kependudukan / NIK <i>(sesuai di KTP)</i> <b>*</b></label>
                                    <input value="{{old('nik_pesdik')}}" name="nik_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="nik_pesdik"
                                    placeholder="Nomor Induk Kependudukan / NIK" required>
                                <label for="tempat_lahir_pesdik">Tempat Lahir <i>(sesuai di Ijazah/Akta Kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('tempat_lahir_pesdik')}}" name="tempat_lahir_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="tempat_lahir_pesdik"
                                    placeholder="Tempat Lahir" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="tanggal_lahir_pesdik">Tanggal Lahir <i>(sesuai di Ijazah/Akta Kelahiran)</i> <b>*</b></label>
                                    <input value="{{old('tanggal_lahir_pesdik')}}" name="tanggal_lahir_pesdik" type="date" class="form-control my-1 mr-sm-1 bg-light"
                                        id="tanggal_lahir_pesdik" required>
                                <label for="agama_pesdik">Agama <b>*</b></label>
                                    <select name="agama_pesdik" class="form-control my-1 mr-sm-1 bg-light" id="agama_pesdik" required>
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen ">Kristen </option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                <label for="kewarganegaraan_pesdik">Kewarganegaraan <b>*</b></label>
                                    <select name="kewarganegaraan_pesdik" class="form-control my-1 mr-sm-1 bg-light" id="kewarganegaraan_pesdik" required>
                                        <option value="">-- Pilih Kewarganegaraan --</option>
                                        <option value="WNI (Warga Negara Indonesia)">WNI (Warga Negara Indonesia)</option>
                                        <option value="WNA (Warga Negara Asing)">WNA (Warga Negara Asing)</option>
                                    </select>
                                <label for="alamat_pesdik">Alamat <i>(jalan, RT/RW, dusun)</i> <b>*</b></label>
                                    <input value="{{old('alamat_pesdik')}}" name="alamat_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="alamat_pesdik"
                                    placeholder="jalan, RT/RW, dusun" required>
                                <label for="kabupaten_pesdik">Kabupaten/Kota <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('kabupaten_pesdik')}}" name="kabupaten_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="kabupaten_pesdik"
                                    placeholder="Kabupaten/Kota" required>
                                <label for="kecamatan_pesdik">Kecamatan <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('kecamatan_pesdik')}}" name="kecamatan_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="kecamatan_pesdik"
                                    placeholder="Kecamatan" required>
                                <label for="desa_pesdik">Desa/Kelurahan <i>(sesuai alamat di Kartu Keluarga)</i> <b>*</b></label>
                                    <input value="{{old('desa_pesdik')}}" name="desa_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="desa_pesdik"
                                    placeholder="Desa/Kelurahan" required>
                                <label for="no_hp_pesdik">Nomor HP Yang Aktif <b>*</b></label>
                                    <input value="{{old('no_hp_pesdik')}}" name="no_hp_pesdik" type="text" class="form-control my-1 mr-sm-1 bg-light" id="no_hp_pesdik"
                                    placeholder="Nomor HP Yang Aktif" required>
                            </div>
                       </div>
                    </div>

                </div>   
                <br>php
                    </div>
                    <div class="card-footer p-2">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> DAFTAR</button>
                        <a class="btn btn-danger btn-sm" href="/" role="button"><i class="fas fa-undo"></i> BATAL</a>
                    </div>
                </div>
        </form>
    </section>
@endsection
