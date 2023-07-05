<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;


class Genre extends BaseController
{

    protected $genre;

    //step 3 membuat fungsi construct untuk insasi clas model
    public function __construct()
    {
        //step 4 memanggil properti genre
        $this->genre = new GenreModel();
    }

    public function index()
    {
        $data['genre'] = $this->genre->getAllData();
        return view("genre/semuagenre", $data);
    }

    public function update($id_genre)
    {
        $decryptedId = decryptUrl($id_genre);
        $data["errors"] = session('errors');
        $data["genre"] = $this->genre->getDataByID($id_genre);
        return view("genre/edit_genre", $data);
    }

    public function edit_genre()
    {
        $validation = $this->validate([
            'nama_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Genre Harus diisi'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $id_genre = $this->request->getPost('id_genre');
        $data = [
            'nama_genre' => $this->request->getPost('nama_genre')
        ];

        $this->genre->update($id_genre, $data);
        session()->setFlashdata('success', 'Data berhasil diperbarui.'); // tambahkan ini
        return redirect()->to('/genre');
    }

    public function destroy($id_genre)
    {
        $decryptedId = decryptUrl($id_genre);
        $this->genre->delete($id_genre);
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('/genre');
    }
}
