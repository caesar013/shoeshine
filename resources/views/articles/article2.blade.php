@push('css')
<style>
/* --- General Pen Styles --- */
body{
	font-family: Georgia, serif;
	color: #333;
	font-size: 1.4rem;
	line-height: 2rem;
}
p{
    opacity: 1;
    color: #000
}
a{color: #000;}
h1{
	font-size: 2.6rem;
	line-height: 2.6rem;
}
.content{
	margin: 0 auto;
	max-width: 90%;
	width: 720px;
}
main{
	padding: 1% 0;
	position: relative;
	background: #f5f5f5;
	box-shadow: 0px -10px 60px rgba(0,0,0,0.25);
		height: 100%;
}
footer p{
	font-size: .8rem;
	font-weight: bold;
	color: #ccc;
}
footer a{color: #ccc;}
/* --- Important Pen Styles --- */

.zoom{
	overflow: hidden;
	padding-bottom: 55%;
}
.zoom img{
	position: fixed;
	top: 0%;
	left: 50%;
	max-width: 200%;
	width: 100%;
	transform: translateX(-50%);
	/* Thanks  @bastian_fiessinger. Use when activating blur effect:
	will-change: -webkit-filter, filter, transform; */
}
@media (max-width: 667px) {
	h1{
		font-size: 1.8rem;
		line-height: 2.6rem;
		text-align: left;
	}
	.content{
		margin: 0 auto;
		max-width: 90%;
		width: 100%;
		height: 100%;
		text-align: justify;
	}
	.zoom{
		overflow: hidden;
		padding-bottom: 75%;
	}

}
</style>
    
@endpush
@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white" class="text-decoration-none">Articles.</h2>
                    </div>
                </div>
            </div>
        </div>
<main role="main"  style="margin-top: 60px; margin-bottom: 20px;">
	<div class="content">
		<h1> Praktis dan Efisien: Panduan Memesan Layanan Cuci Sepatu Online</h1>
		<p> Dalam era digital yang semakin maju, layanan cuci sepatu online menjadi solusi praktis dan efisien bagi mereka yang ingin merawat sepatu mereka dengan mudah. Melalui beberapa langkah sederhana, Anda dapat memesan layanan cuci sepatu secara online dan menikmati hasil yang bersih dan segar. Berikut adalah panduan langkah demi langkah untuk memesan layanan cuci sepatu online. </p>
            
            <h2>1. Cari Penyedia Layanan Cuci Sepatu Online</h2>
            <p>Mencari penyedia layanan cuci sepatu online yang terpercaya adalah langkah pertama yang penting. Lakukan riset dan tinjau ulasan dari pelanggan sebelum memilih penyedia layanan. Periksa pula apakah mereka menawarkan layanan pickup dan delivery untuk kenyamanan Anda.</p>
            
            <h2>2. Pilih Jenis Layanan yang Anda Butuhkan</h2>
            <p>Penyedia layanan cuci sepatu online biasanya menawarkan berbagai jenis layanan, mulai dari pembersihan biasa hingga perawatan khusus. Pilih jenis layanan yang sesuai dengan kebutuhan sepatu Anda, seperti membersihkan noda, merawat bahan tertentu, atau restorasi.</p>

            <h2>3. Pilih Waktu dan Tempat Penjemputan</h2>
            <p>Pada langkah ini, Anda akan diminta untuk memilih waktu dan tempat penjemputan sepatu yang ingin Anda cuci. Beberapa penyedia layanan memiliki sistem penjadwalan online yang memudahkan Anda memilih waktu yang sesuai dengan jadwal Anda. Pastikan Anda memberikan alamat yang jelas dan dapat dijangkau.</p>

            <h2>4. Persiapkan Sepatu untuk Pengambilan</h2>
            <p>Sebelum sepatu dijemput, pastikan untuk membersihkan sepatu dari kotoran ringan dan menyingkirkan barang pribadi yang ada di dalamnya. Jika ada instruksi khusus dari penyedia layanan, ikuti petunjuk tersebut untuk persiapan sepatu sebelum diambil.</p>

            <h2>5. Tunggu Proses Pencucian</h2>
            <p>Setelah sepatu dijemput, biarkan penyedia layanan melakukan proses pencucian dan perawatan yang diperlukan. Jika ada kerusakan atau masalah yang ditemukan, mereka akan memberi tahu Anda untuk mendapatkan persetujuan sebelum melanjutkan perbaikan.</p>

            <h2>6. Pengantaran Sepatu yang Bersih dan Segar</h2>
            <p>Setelah sepatu selesai dicuci dan dirawat, mereka akan dikemas dengan rapi dan dikirim kembali ke alamat yang Anda tentukan. Pastikan Anda ada di tempat saat pengantaran atau jika ada kesepakatan pengambilan di lokasi tertentu.</p>

            <h2>Kesimpulan</h2>
            <p>Dengan memesan layanan cuci sepatu online, Anda dapat merawat sepatu dengan mudah dan efisien tanpa harus pergi ke tempat laundry fisik. Dengan langkah-langkah yang sederhana, Anda dapat menikmati sepatu yang bersih dan segar tanpa repot. Pastikan Anda memilih penyedia layanan yang terpercaya dan berkualitas untuk hasil yang memuaskan</p>
	</div>
	
</main>
@endsection