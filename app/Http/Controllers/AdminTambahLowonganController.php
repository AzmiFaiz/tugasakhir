<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminTambahLowonganController extends CBController {


    public function cbInit()
    {
        $this->setTable("tambah_lowongan");
        $this->setPermalink("tambah_lowongan");
        $this->setPageTitle("Tambah Lowongan");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Prasyarat 1","Prasyarat1")->required(false)->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat 2","prasyarat2")->required(false)->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat 3","prasyarat3")->required(false)->strLimit(150)->maxLength(250);
		$this->addText("Syarat Tambahan","syarat_tambahan")->required(false)->strLimit(150)->maxLength(250);
		$this->addNumber("Jumlah yang dibutuhkan:","jumlah_dibutuhkan");
		

    }
}
