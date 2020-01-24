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
		$this->addSelectTable("Matkul","matkul_id",["table"=>"mata_kuliah","value_option"=>"id","display_option"=>"nama_matkul","sql_condition"=>""]);
		$this->addText("Prasyarat1","prasyarat1")->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat2","prasyarat2")->strLimit(150)->maxLength(255);
		$this->addText("Prasyarat3","prasyarat3")->strLimit(150)->maxLength(255);
		$this->addText("Syarat Tambahan","syarat_tambahan")->strLimit(150)->maxLength(255);
		$this->addText("Jumlah Dibutuhkan","jumlah_dibutuhkan")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Tahunajaran","tahunajaran_id",["table"=>"tahun_ajaran","value_option"=>"id","display_option"=>"nama_tahun_ajaran","sql_condition"=>""]);
		$this->addSelectTable("Semester","semester_id",["table"=>"semester","value_option"=>"id","display_option"=>"nama_semester","sql_condition"=>""]);
		$this->addSelectTable("Dosen","dosen_id",["table"=>"dosen","value_option"=>"id","display_option"=>"nama_dosen","sql_condition"=>""]);
		

    }
}
