<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    // properti yang digunakan
    // untuk menentukan untuk tabel apa
    protected $table = 'film';
    // untuk masuk ke database tanpa harus mengubah di database
    protected $primarykey = 'id';
    // set untuk auto incremenya true atau false
    protected $useAutoIncrement = true;
    // ini untuk kolom-kolom apa saja yang boleh diisi
    protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover'];

    public function getFilm()
    {


        $data =
            [
                // dibawah ini merupakan data yang akan ditampilkan dalam view
                [
                    "nama_film" => "Sewu Dino",
                    "genre" => "horor",
                    "duration" => "1 jam 43 menit"
                ],
                [
                    "nama_film" => "Fast and Farios X",
                    "genre" => "action",
                    "duration" => "2 jam"
                ],
                [
                    "nama_film" => "Vincenzo",
                    "genre" => "action",
                    "duration" => "2 jam"
                ],
                [
                    "nama_film" => "Waktu Magrib",
                    "genre" => "horor",
                    "duration" => "1 jam 40 menit"
                ],
                [
                    "nama_film" => "Menjelang Magrib",
                    "genre" => "horor",
                    "duration" => "2 jam"
                ]
            ];
        return $data;
    }
    public function getAllDataJoin()
    {
        $query = $this->db->table("film")
            ->select("film.*, genre.nama_genre")
            ->join("genre", "genre.id_genre = film.id_genre");
        return $query->get()->getResultArray();
    }

    public function getAllData()
    {
        // ketika bagian ini dipanggil maka akan ada respon yang diberikan
        return $this->findAll();
    }

    // fungsi ini digunakan untuk mencari data berdasarkan ID
    public function getDataByID($id)
    {
        return $this->find($id);
    }

    // fungsi ini digunakan untuk mencari data berdasarkan genre
    public function getDataBy($data)
    {
        return $this->where("genre", $data)->findAll();
    }

    // fungsi ini digunakan untuk mengurutkan data berdasarkan order yang dibuat dari desc (yang terbaru dibuat) pada kolom tertentu
    public function getOrderBy()
    {
        return $this->orderBy("duration", "desc")->findAll();
    }

    // fungsi ini digunakan untuk mencari data berdasarkan limit
    public function getLimit()
    {
        return $this->limit(5)->get()->getResultArray();
    }
}
