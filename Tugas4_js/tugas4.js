
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

const pegawaiData = [
    new Pegawai('Muhammad', 'Manager', 'Menikah'),
    new Pegawai('Ikram', 'Asisten Manager', 'jomblo'),
    new Pegawai('Jundulloh', 'Staff', 'Menikah')
];

const pegawaiTable = document.getElementById('pegawaiBody');
const pegawaiFoot = document.getElementById('pegawaiFoot');

pegawaiData.forEach(pegawai => {
    pegawaiTable.innerHTML += pegawai.cetakData();
});

const totalGajiSemua = pegawaiData.reduce((total, pegawai) => total + pegawai.totalGaji, 0);
pegawaiFoot.innerHTML = `
    <tr>
        <td colspan="7">Total Gaji</td>
        <td>Rp ${totalGajiSemua.toLocaleString()}</td>
    </tr>
`;
