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
                        <h2 style="color: white" class="text-decoration-none">Hello, {{ auth()->user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
<main role="main"  style="margin-top: 60px; margin-bottom: 20px;">
	<div class="content">
		<h1> Tips Menjaga Sepatu Tetap Putih dan Bebas Kuning</h1>
		<p> Memiliki sepatu putih yang bersih dan terawat adalah impian bagi banyak orang. Namun, seiring waktu, sepatu putih cenderung menguning akibat paparan debu, kotoran, atau bahkan penyimpanan yang tidak tepat. Untuk menjaga sepatu tetap putih dan bebas kuning, ada beberapa tips yang dapat Anda terapkan. Berikut adalah beberapa tips yang efektif untuk menjaga keindahan sepatu putih Anda. </p>
            
            <h2>1. Pembersihan Rutin</h2>
            <p>Membersihkan sepatu secara rutin adalah langkah penting untuk mencegah penumpukan kotoran dan noda yang dapat menyebabkan kuning. Gunakan sikat lembut dan air sabun untuk membersihkan permukaan sepatu secara teratur. Hindari penggunaan bahan kimia yang keras atau pemutih berlebihan yang dapat merusak bahan sepatu.</p>
            
            <h2>2. Lindungi dari Debu dan Kotoran</h2>
            <p>Hindari paparan sepatu putih Anda terhadap debu dan kotoran yang dapat menyebabkan kuning. Gunakan tas sepatu atau kotak penyimpanan khusus untuk melindungi sepatu saat tidak digunakan. Jika Anda sedang bepergian atau menyimpan sepatu dalam waktu lama, pastikan mereka disimpan di tempat yang bersih dan terlindung dari paparan langsung sinar matahari.</p>

            <h2>3. Hindari Paparan Cairan atau Bahan Pewarna</h2>
            <p>Hindari kontak sepatu putih dengan cairan atau bahan pewarna yang kuat, seperti tinta, cat, atau bahan kimia. Jika terjadi tumpahan, bersihkan dengan cepat menggunakan kain bersih yang lembut dan air dingin. Jangan biarkan tumpahan meresap ke dalam serat sepatu, karena ini dapat menyebabkan noda yang sulit dihilangkan.</p>

            <h2>4. Gunakan Pelindung dan Pewarna Khusus</h2>
            <p>Gunakan pelindung atau pewarna khusus untuk sepatu putih Anda. Pelindung sepatu dapat membentuk lapisan perlindungan yang mencegah noda dan kotoran menempel pada permukaan sepatu. Pewarna khusus dapat digunakan untuk mengembalikan warna putih yang kusam atau kuning pada sepatu yang sudah terkena dampak waktu.</p>

            <h2>5. Simpan dengan Benar</h2>
            <p>Simpan sepatu dengan benar setelah digunakan. Bersihkan dan keringkan sepatu sepenuhnya sebelum menyimpannya. Gunakan kertas koran atau karet gel silika untuk menyerap kelembaban dan menjaga bentuk sepatu. Pastikan tempat penyimpanan sepatu dalam kondisi yang bersih, kering, dan terlindung dari sinar matahari langsung.</p>

            <h2>Kesimpulan</h2>
            <p>Menjaga sepatu tetap putih dan bebas kuning membutuhkan perawatan dan perhatian khusus. Dengan pembersihan rutin, perlindungan terhadap debu dan kotoran, hindari paparan cairan atau bahan pewarna, serta penggunaan pelindung dan pewarna khusus, Anda dapat menjaga keindahan sepatu putih Anda dalam</p>
	</div>
	
</main>
@endsection