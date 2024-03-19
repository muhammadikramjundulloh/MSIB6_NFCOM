class Pegawai {
    constructor(nama, jabatan, status) {
        this.nama = nama;
        this.jabatan = jabatan;
        this.status = status;
        this.gajiPokok = this.hitungGajiPokok();
        this.tunjanganJabatan = this.hitungTunjanganJabatan();
        this.bpjs = this.hitungBPJS();
        this.tunjanganKeluarga = this.hitungTunjanganKeluarga();
        this.totalGaji = this.hitungTotalGaji();
    }

    hitungGajiPokok() {
        switch (this.jabatan) {
            case 'Manager':
                return 15000000;
            case 'Asisten Manager':
                return 10000000;
            case 'Staff':
                return 5000000;
            default:
                return 0;
        }
    }

    hitungTunjanganJabatan() {
        return this.gajiPokok * 0.15;
    }

    hitungBPJS() {
        return this.gajiPokok * 0.10;
    }

    hitungTunjanganKeluarga() {
        return this.status === 'Menikah' ? this.gajiPokok * 0.20 : 0;
    }

    hitungTotalGaji() {
        return this.gajiPokok + this.tunjanganJabatan + this.bpjs + this.tunjanganKeluarga;
    }

    cetakData() {
        return `
            <tr>
                <td>${this.nama}</td>
                <td>${this.jabatan}</td>
                <td>${this.status}</td>
                <td>Rp ${this.gajiPokok.toLocaleString()}</td>
                <td>Rp ${this.tunjanganJabatan.toLocaleString()}</td>
                <td>Rp ${this.bpjs.toLocaleString()}</td>
                <td>Rp ${this.tunjanganKeluarga.toLocaleString()}</td>
                <td>Rp ${this.totalGaji.toLocaleString()}</td>
            </tr>
        `;
    }
}

const pegawaiData = [];

const pegawaiTable = document.getElementById('pegawaiBody');
const pegawaiFoot = document.getElementById('pegawaiFoot');

function tambahPegawai(event) {
    event.preventDefault();

    const form = event.target;
    const nama = form.nama.value;
    const jabatan = form.jabatan.value;
    const status = form.status.value;

    const pegawai = new Pegawai(nama, jabatan, status);
    pegawaiData.push(pegawai);
    
    pegawaiTable.innerHTML += pegawai.cetakData();

    form.reset();
}

document.getElementById('pegawaiForm').addEventListener('submit', tambahPegawai);

//  jabatan dari JavaScript
const jabatanSelect = document.getElementById('jabatan');
jabatanSelect.innerHTML += `
    <option value="Manager">Manager</option>
    <option value="Asisten Manager">Asisten Manager</option>
    <option value="Staff">Staff</option>
`;


// total gaji semua pegawai
document.getElementById('totalButton').addEventListener('click', function() {
    const totalGajiSemua = pegawaiData.reduce((total, pegawai) => total + pegawai.totalGaji, 0);
    pegawaiFoot.innerHTML = `
        <tr>
            <td colspan="7">Total Gaji Semua Pegawai</td>
            <td>Rp ${totalGajiSemua.toLocaleString()}</td>
        </tr>
    `;
});

