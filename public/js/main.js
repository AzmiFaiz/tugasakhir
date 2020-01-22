$(document).on('ready pjax:success', function(){
	// modal Tambah MK
	$('#modalTambahMk').click(function (){
		$('#modalKrs').modal('show')
			.find('#modalContent')
			.load($(this).attr('value'));
	});

	// modal Form Akad Kelas
	$('#modalFormAkadKelas').click(function (){
		$('#modalAkadKelas').modal('show')
			.find('#modalContentAkadKelas')
			.load($(this).attr('value'));
	});

	// modal Form Edit Nilai Mahasiswa
	$('.editNilaiMhs').click(function (){
		$('#modalNilaiMhs').modal('show')
			.find('#modalContentNilaiMhs')
			.load($(this).attr('value'));
	});

	// get the click of the Tambah Jadwal Kuliah button
	$('.tambahJadwalButton').click(function (){
		$('#modalTambahJadwal').modal('show')
			.find('#modalContentTambahJadwal')
			.load($(this).attr('value'));
	});

	// get the click of the Edit Jadwal Kuliah button
	$('.editJadwalButton').click(function (){
		$('#modalEditJadwal').modal('show')
			.find('#modalContentEditJadwal')
			.load($(this).attr('value'));
	});

	// get the click of the Tambah Presensi button
	$('#tambahPresensiButton').click(function (){
		$('#modalTambahPresensi').modal('show')
			.find('#modalContentTambahPresensi')
			.load($(this).attr('value'));
	});

	// get the click of the Edit Presensi button
	$('.editPresensiButton').click(function (){
		$('#modalEditPresensi').modal('show')
			.find('#modalContentEditPresensi')
			.load($(this).attr('value'));
	});

	// get the click of the Presensi Mahasiswa button
	$('.presensiMhsButton').click(function (){
		$('#modalPresensiMhs').modal('show')
			.find('#modalContentPresensiMhs')
			.load($(this).attr('value'));
	});

	// get the click of the Edit Bobot Penilaian Kelas button
	$('.editBobotButton').click(function (){
		$('#modalEditBobot').modal('show')
			.find('#modalContentEditBobot')
			.load($(this).attr('value'));
	});

	// get the click of the Ambil Paket button
	$('.ambilPaketButton').click(function (){
		$('#modalAmbilPaket').modal('show')
			.find('#modalContentAmbilPaket')
			.load($(this).attr('value'));
	});

	// get the click of the Lihat Paket button
	$('.lihatPaketButton').click(function (){
		$('#modalLihatPaket').modal('show')
			.find('#modalContentLihatPaket')
			.load($(this).attr('value'));
	});

	// get the click of the Buat Jadwal Ujian button
	$('.buatJadwalUjianButton').click(function (){
		$('#modalBuatJadwalUjian').modal('show')
			.find('#modalContentBuatJadwalUjian')
			.load($(this).attr('value'));
	});

	// get the click of the Edit Jadwal Ujian button
	$('.editJadwalUjianButton').click(function (){
		$('#modalEditJadwalUjian').modal('show')
			.find('#modalContentEditJadwalUjian')
			.load($(this).attr('value'));
	});

	// get the click of the Lihat Jadwal Ujian button
	$('.lihatJadwalUjianButton').click(function (){
		$('#modalLihatJadwalUjian').modal('show')
			.find('#modalContentLihatJadwalUjian')
			.load($(this).attr('value'));
	});

	// get the click of the Publish Nilai button
	$('#publishNilaiKelasButton').click(function (){
		$('#modalPublishNilai').modal('show')
			.find('#modalContentPublishNilai')
			.load($(this).attr('value'));
	});

	// get the click of the Isi Kuisioner button
	$('.isiKuisionerButton').click(function (){
		$('#modalIsiKuisioner').modal('show')
			.find('#modalContentIsiKuisioner')
			.load($(this).attr('value'));
	});

	// get the click of the Info Tagihan Mahasiswa button
	$('.infoTagihanMhsButton').click(function (){
		$('#modalInfoTagihanMhs').modal('show')
			.find('#modalContentInfoTagihanMhs')
			.load($(this).attr('value'));
	});

	// get the click of the Info Profile Mahasiswa button
	$('.profileMhsButton').click(function (){
		$('#modalProfilMhs').modal('show')
			.find('#modalContentProfilMhs')
			.load($(this).attr('value'));
	});

	// get the click of the Tambah Catatan Bimik button
	$('#tambahCatatanBimikButton').click(function (){
		$('#modalTambahCatatanBimik').modal('show')
			.find('#modalContentTambahCatatanBimik')
			.load($(this).attr('value'));
	});

	// get the click of the Edit Catatan Bimik button
	$('.editCatatanBimikButton').click(function (){
		$('#modalEditCatatanBimik').modal('show')
			.find('#modalContentEditCatatanBimik')
			.load($(this).attr('value'));
	});

	// get the click of the Tambah Detail Catatan Bimik button
	$('.tambahDetailCatatanBimikButton').click(function (){
		$('#modalTambahDetailCatatanBimik').modal('show')
			.find('#modalContentTambahDetailCatatanBimik')
			.load($(this).attr('value'));
	});

	// get the click of the Edit Detail Catatan Bimik button
	$('.editDetailCatatanBimikButton').click(function (){
		$('#modalEditDetailCatatanBimik').modal('show')
			.find('#modalContentEditDetailCatatanBimik')
			.load($(this).attr('value'));
	});

	// get the click of the Adjustments Jatah SKS button
	$('#adjustmentsJatahSksButton').click(function (){
		$('#modalAdjustmentsJatahSks').modal('show')
			.find('#modalContentAdjustmentsJatahSks')
			.load($(this).attr('value'));
	});
});
