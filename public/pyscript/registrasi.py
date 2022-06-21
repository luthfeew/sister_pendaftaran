import asyncio
from pyodide.http import pyfetch
from pyodide import create_proxy
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
checkbox = Element('checkbox')
registrasi = Element('registrasi')

religion_list = ['Islam', 'Kristen Protestan',
                 'Kristen Katolik', 'Hindu', 'Budha', 'Konghucu']


def valid():
    fieldset.element.removeAttribute('disabled')
    data_valid.element.removeAttribute('style')
    data_invalid.element.setAttribute('style', 'display: none;')


def invalid():
    fieldset.element.setAttribute('disabled', 'disabled')
    data_invalid.element.removeAttribute('style')
    data_valid.element.setAttribute('style', 'display: none;')


def checkbox_change(e):
    if checkbox.element.checked:
        registrasi.element.removeAttribute('disabled')
    else:
        registrasi.element.setAttribute('disabled', 'disabled')


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


def main():
    checkbox.element.addEventListener('change', create_proxy(checkbox_change))


main()
