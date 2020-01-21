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
		$this->addText("No","No")->strLimit(150)->maxLength(255);
		$this->addText("Mata Kuliah","mata_kuliah")->strLimit(150)->maxLength(255);
		$this->addText("Semester","Semester")->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat1","Prasyarat1")->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat2","Prasyarat2")->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat3","Prasyarat3")->strLimit(150)->maxLength(255);
		$this->addText("Syarat Tambahan","Syarat_tambahan")->strLimit(150)->maxLength(255);
		$this->addText("Pelamar","pelamar")->strLimit(150)->maxLength(255);
		$this->addText("Status","Status")->strLimit(150)->maxLength(255);
		

    }
}
