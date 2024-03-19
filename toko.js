let frm = document.getElementById('online');
let produkPilihan = ["TV", "AC", "KULKAS"];
let pilihProduk = `<option value="">Pilihan Produk</option>`;
for (let p in produkPilihan) {
    pilihProduk += `<option value="${produkPilihan[p]}">${produkPilihan[p]}</option>`;
}
frm.produk.innerHTML = pilihProduk;

function transaksi() {
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumlah = parseInt(frm.jumlah.value); // Convert string to integer

    let harga;
    switch (produk.toUpperCase()) { // Convert to uppercase for consistency
        case 'TV':
            harga = 200000;
            break;
        case 'AC':
            harga = 300000;
            break;
        case 'KULKAS':
            harga = 500000;
            break;
        default:
            harga = 0;
    }

    let hargaKotor = harga * jumlah; // Fixing hargaKotor calculation

    let diskon;
    if ((produk.toUpperCase() === 'KULKAS' && jumlah >= 3) || (produk.toUpperCase() === 'AC' && jumlah >= 3))
        diskon = 0.2 * hargaKotor; // Fixing diskon calculation
    else
        diskon = 0.1 * hargaKotor;

    swal(`
        Nama Pelanggan: ${nama}
        Produk Dibeli: ${produk}
        Harga Produk: ${harga}
        Jumlah Produk Dibeli: ${jumlah}
        `);
}

// Add event listener to trigger transaksi() function
frm.querySelector('input[type="button"]').addEventListener('click', transaksi);
