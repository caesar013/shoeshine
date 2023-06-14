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
		<h1>Tips Membersihkan Sepatu Secara Mandiri di Rumah</h1>
		<p>Merawat kebersihan sepatu adalah langkah penting dalam mempertahankan penampilan dan daya tahan sepatu kesayangan Anda. Membersihkan sepatu secara mandiri di rumah bisa menjadi alternatif yang efektif dan hemat biaya. Berikut adalah beberapa tips praktis untuk membersihkan sepatu secara mandiri di rumah.</p>
            
            <h2>1. Mengetahui Bahan dan Instruksi Perawatan</h2>
            <p>Sebelum memulai proses pembersihan, penting untuk mengetahui jenis bahan sepatu Anda dan instruksi perawatannya. Setiap jenis bahan mungkin memerlukan pendekatan yang berbeda. Periksa petunjuk perawatan pada label sepatu atau lakukan penelitian mengenai cara terbaik untuk membersihkan bahan tersebut.</p>
            
            <h2>2. Bersihkan Debu dan Kotoran Ringan</h2>
            <p>Mulailah dengan membersihkan debu dan kotoran ringan pada sepatu menggunakan sikat lembut atau kain bersih. Gosok perlahan pada permukaan sepatu untuk menghilangkan kotoran yang menempel. Pastikan Anda membersihkan area sulit yang sulit dijangkau seperti sela-sela sol dan lipatan sepatu.</p>

            <h2>3. Gunakan Cairan Pembersih yang Sesuai</h2>
            <p>Pilihlah cairan pembersih yang sesuai dengan jenis bahan sepatu Anda. Untuk sepatu kulit, gunakan pembersih khusus kulit. Untuk sepatu kanvas atau tekstil, Anda dapat menggunakan sabun cair yang lembut dicampur dengan air. Pastikan untuk menguji cairan pembersih pada area kecil yang tidak mencolok terlebih dahulu sebelum digunakan secara keseluruhan.</p>

            <h2>4. Sikat dan Gosok dengan Lembut</h2>
            <p>Setelah mengaplikasikan cairan pembersih, gunakan sikat lembut atau spons untuk membersihkan sepatu dengan gerakan melingkar atau gesekan ringan. Hindari menggosok terlalu keras agar tidak merusak atau menggores permukaan sepatu. Perhatikan juga bagian sol dan aksen sepatu yang mungkin memerlukan perawatan ekstra.</p>

            <h2>5. Bersihkan Noda dengan Bahan Alami</h2>
            <p>Untuk noda yang lebih membandel, Anda bisa mencoba membersihkannya dengan bahan alami seperti pasta gigi non-gel, cuka putih, atau baking soda yang dicampur dengan air. Oleskan bahan alami tersebut pada noda, biarkan beberapa saat, lalu gosok secara perlahan dengan sikat atau spons. Bilas dengan air bersih dan keringkan dengan kain bersih.</p>

            <h2>6. Keringkan dengan Benar</h2>
            <p>Setelah membersihkan sepatu, jangan lupa untuk mengeringkannya dengan benar sebelum digunakan kembali. Hindari meletakkannya di bawah sinar matahari langsung karena dapat merusak bahan sepatu. Biarkan sepatu kering secara alami pada suhu ruangan, dan jangan gunakan sumber panas seperti pengering rambut.</p>

            <h2>Kesimpulan</h2>
            <p>Dengan menggunakan tips ini, Anda dapat membersihkan sepatu secara mandiri di rumah dengan mudah. Penting untuk merawat sepatu</p>
	</div>
	
</main>
@endsection