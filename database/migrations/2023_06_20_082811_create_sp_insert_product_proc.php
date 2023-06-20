<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_product`(
	IN `nama_produk` VARCHAR(50),
	IN `deskripsi` VARCHAR(255),
	IN `kategori` VARCHAR(50),
	IN `img` VARCHAR(255),
	IN `harga` INT,
	IN `stok` INT,
	IN `slug` VARCHAR(50)
)
BEGIN
	INSERT INTO products(nama_produk, deskripsi, kategori, img, harga, stok, slug)
	VALUES (nama_produk, deskripsi, kategori, img, harga, stok, slug);
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_insert_product");
    }
};
