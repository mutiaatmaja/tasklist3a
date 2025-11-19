<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <h1>Selamat Datang di Pencatatan Acara Saya</h1>
    <hr color="red" />
    <h3>Silahkan Masukkan Acara Anda</h3>
    <label>Nama Kegiatan :</label>
    <input type="text" wire:model='nama_kegiatan' />
    <label>Status</label>
    <select wire:model='status'>
        <option value="">--pilih status</option>
        <option value="BARU">BARU</option>
        <option value="PENDING">PENDING</option>
        <option value="PUTUS">PUTUS</option>
        <option value="SELESAI">SELESAI</option>
    </select>
    <button>SIMPAAAAAAAN DATAAAAAA</button>

    <hr color="blue" />
    <h3>Berikut Adalah Daftar Kegiatan Anda</h3>
    <hr color="green" />
</div>
