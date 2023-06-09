<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model {

    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['kode_produk','nama_produk', 'id_kategori', 'id_ukuran', 'id_supplier', 'harga', 'stok'];

    public function getProduk($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}