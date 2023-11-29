<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
            $table->unsignedBigInteger('Kodetenan');
            $table->string('nama_tenan');
            $table->unsignedBigInteger('KodeKasir');
            $table->unsignedBigInteger('nama_kasie');
            $table->unsignedBigInteger('barang_id');
            $table->integer('jumlah_barang');
            $table->decimal('diskon', 8, 2);
            $table->decimal('total', 8, 2);
            $table->integer('stok'); // Kolom stok baru
            $table->timestamps();
    
            $table->foreign('barang_id')->references('KodeBarang')->on('barang');
        });
    
        // Menambahkan kolom stok dari tabel barangs menggunakan statement SQL
        DB::connection()->getPdo()->exec('ALTER TABLE transaksis ADD stok INT');
    
        // Mengupdate kolom stok dengan nilai dari tabel barangs menggunakan statement SQL
        DB::connection()->getPdo()->exec('UPDATE transaksis
            JOIN barangs ON transaksis.barang_id = barang.id
            SET transaksis.stok = barang.Stok');
    
        // Menambahkan join dengan tabel Tenan dan Kasir
        DB::connection()->getPdo()->exec('UPDATE transaksis
            JOIN tenan ON transaksis.Kodetenan = tenan.Kodetenan
            JOIN kasir ON transaksis.KodeKasir = kasir.KodeKasir
            SET transaksis.nama_tenan = tenan.NamaTenan');
    
        // Menambahkan kolom NamaKasir dari tabel Kasir
        DB::connection()->getPdo()->exec('UPDATE transaksis
            JOIN kasir ON transaksis.KodeKasir = kasir.KodeKasir
            SET transaksis.nama_kasir = kasir.NamaKasir');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
