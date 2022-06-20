<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <script src="https://kit.fontawesome.com/8020a10438.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item">
                        Documentation
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            More
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                About
                            </a>
                            <a class="navbar-item">
                                Jobs
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Report an issue
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Pemohon</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" name="fullname" id="fullname">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" name="idnumber" id="idnumber">
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
                                            <input type="radio" name="idtype" id="idtype1" value="KTP">
                                            KTP
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="idtype" id="idtype2" value="Passport">
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
                                        <input class="input" type="text" id="address" name="address">
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
                                            <select id="religion" name="religion"></select>
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
                                            <input type="radio" name="maritalstatus" id="maritalstatus1" value="married">
                                            Menikah
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="maritalstatus" id="maritalstatus2" value="single">
                                            Lajang
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="maritalstatus" id="maritalstatus3" value="divorcee">
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
                                        <input class="input" type="text" id="pob" name="pob">
                                        <span class="icon is-small is-left">
                                            <i class="fa-solid fa-map-location-dot"></i>
                                        </span>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" id="dob" name="dob">
                                        <span class="icon is-small is-left">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </span>
                                    </p>
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
                                            <input type="checkbox">
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
                                        <button class="button is-primary">
                                            Daftar Rekening Baru
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <py-script>
        import asyncio
        from pyodide.http import pyfetch
        from js import window, console

        input_nama = Element('input_nama')
        input_id = Element('input_id')
        data_invalid = Element('data_invalid')
        data_valid = Element('data_valid')
        fieldset = Element('fieldset')
        fullname = Element('fullname')
        idnumber = Element('idnumber')
        idtype1 = Element('idtype1')
        idtype2 = Element('idtype2')
        gender1 = Element('gender1')
        gender2 = Element('gender2')
        address = Element('address')
        religion = Element('religion')
        maritalstatus1 = Element('maritalstatus1')
        maritalstatus2 = Element('maritalstatus2')
        maritalstatus3 = Element('maritalstatus3')
        pob = Element('pob')
        dob = Element('dob')

        religion_list = ['Islam', 'Kristen Protestan', 'Kristen Katolik', 'Hindu', 'Budha', 'Konghucu']

        def valid():
            fieldset.element.removeAttribute('disabled')
            data_valid.element.removeAttribute('style')
            data_invalid.element.setAttribute('style', 'display: none;')

        def invalid():
            data_invalid.element.removeAttribute('style')
            data_valid.element.setAttribute('style', 'display: none;')
            fieldset.element.setAttribute('disabled', 'disabled')

        async def periksa(*args, **kwargs):
            input1 = input_nama.value
            input2 = input_id.value

            response = await pyfetch(url="https://capil.herokuapp.com/api/identity/" + str(input2), method="GET")

            if response.status == 200:
                x = await response.json()
                name = x['data']['fullname']
                idn = x['data']['idNumber']
                it = x['data']['IDType']
                gdr = x['data']['gender']
                add = x['data']['address']
                r = x['data']['religion']
                ms = x['data']['maritalStatus']
                p = x['data']['pob']
                d = x['data']['dob']

                if not input1.lower()[0:10] == name.lower()[0:10]:
                    invalid()
                else:
                    valid()
                    fullname.element.value = name
                    idnumber.element.value = idn
                    idtype1.element.checked = it == 'KTP'
                    idtype2.element.checked = it == 'Passport'
                    gender1.element.checked = gdr == 'male'
                    gender2.element.checked = gdr == 'female'
                    address.element.value = add
                    for x in religion_list:
                        option = window.document.createElement("option")
                        option.text = x
                        option.value = x
                        if x == r:
                            option.selected = True
                        religion.element.appendChild(option)
                    maritalstatus1.element.checked = ms == 'married'
                    maritalstatus2.element.checked = ms == 'single'
                    maritalstatus3.element.checked = ms == 'divorcee'
                    pob.element.value = p
                    dob.element.value = d
            else:
                invalid()
    </py-script>
</body>

</html>