<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Bank</title>
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <script src="https://kit.fontawesome.com/8020a10438.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <py-script src="/pyscript/registrasi.py"></py-script>

    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Pendaftaran Rekening Baru
            </p>
            <p class="subtitle">
                Silahkan isi data dibawah ini
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container is-max-desktop">
            <div class="box pb-2">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label">Nama Lengkap</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Tulis nama lengkap Anda disini" id="input_nama">
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="field">
                            <label class="label">Nomor ID (NIK/Passport)</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Masukan nomor identitas" id="input_id">
                            </div>
                        </div>
                    </div>
                    <div class="column is-2">
                        <label class="label">‎</label>
                        <div class="control">
                            <button class="button is-primary is-fullwidth" id="periksa" pys-onClick="periksa">Periksa</button>
                        </div>
                    </div>
                </div>
                <article class="message is-danger" id="data_invalid" style="display: none;">
                    <div class="message-body">
                        <strong>Data yang Anda masukan tidak valid.</strong> Silakan periksa kembali.
                    </div>
                </article>
                <article class="message is-success" id="data_valid" style="display: none;">
                    <div class="message-body">
                        <strong>Data yang Anda masukan valid.</strong> Silakan lanjutkan.
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="box">
                <p class="title is-4">Formulir Pendaftaran Rekening Online</p>
                <hr>
                <div class="columns">
                    <div class="column">
                        <fieldset disabled id="fieldset">
                            <form method="POST" action="{{ route('registrasi.store') }}">
                                @csrf

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Pemohon</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" name="fullname" id="fullname" readonly required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" name="idNumber" id="idnumber" readonly required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-id-card"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Tanda Pengenal</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" name="IDType" id="idtype1" value="KTP">
                                                    KTP
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="IDType" id="idtype2" value="Passport">
                                                    Passport
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Jenis Kelamin</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" name="gender" id="gender1" value="male">
                                                    Laki-laki
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="gender" id="gender2" value="female">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Alamat</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control has-icons-left">
                                                <input class="input" type="text" id="address" name="address" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-map-location-dot"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Agama</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control">
                                                <div class="select is-fullwidth">
                                                    <select id="religion" name="religion" required></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Status Pernikahan</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" name="maritalStatus" id="maritalstatus1" value="married">
                                                    Menikah
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="maritalStatus" id="maritalstatus2" value="single">
                                                    Lajang
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="maritalStatus" id="maritalstatus3" value="divorcee">
                                                    Janda/Duda
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Tempat/Tanggal Lahir</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" id="pob" name="pob" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-map-location-dot"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" id="dob" name="dob" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal pt-5">
                                    <div class="field-label is-normal">
                                        <label class="label">Pendidikan Terakhir</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control">
                                                <div class="select is-fullwidth">
                                                    <select id="lastedubg" name="lastEduBg" required>
                                                        <option>-</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA/Sederajat</option>
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Nomor Telepon</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" name="noTelp" id="notelp" maxlength="20" placeholder="Tulis nomor telepon Anda" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-phone"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <!-- Right empty for spacing -->
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Hobi</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" name="hobby" id="hobby" placeholder="Tulis hobi Anda" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-person-walking"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <!-- Right empty for spacing -->
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Email</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="email" name="email" id="email" placeholder="Tulis email Anda" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <!-- Right empty for spacing -->
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Nama Ibu Kandung</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" name="motherMaidenName" id="mothermaidenname" placeholder="Tulis nama Ibu kandung Anda" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fa-solid fa-person-dress"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <!-- Right empty for spacing -->
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <!-- Left empty for spacing -->
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <label class="checkbox">
                                                    <input type="checkbox" id="checkbox">
                                                    Saya setuju dengan <a href="#">syarat dan ketentuan</a> yang berlaku.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <!-- Left empty for spacing -->
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <button class="button is-primary" id="registrasi" disabled>
                                                    Daftar Rekening Baru
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>