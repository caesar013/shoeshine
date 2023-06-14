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
		<h1>Menemukan Gaya yang Tepat: Mengenal Berbagai Model Sepatu</h1>
		<p>Sepatu bukan hanya alat pelindung untuk kaki, tetapi juga merupakan pernyataan gaya dan ekspresi diri. Dalam dunia fashion yang terus berkembang, ada berbagai model sepatu yang cocok untuk berbagai kesempatan dan gaya pribadi. Dalam artikel ini, kami akan memperkenalkan beberapa model sepatu yang populer dan memberikan wawasan tentang penggunaannya. </p>
            
            <h2>1. Sneaker</h2>
            <p>Sepatu sneakers adalah model yang paling serbaguna dan populer saat ini. Sneaker menawarkan kenyamanan dan gaya yang klasik serta dapat digunakan dalam berbagai situasi, mulai dari kasual hingga semi-formal. Mereka cocok dipadukan dengan celana jeans, celana panjang, atau bahkan rok dan dress untuk menciptakan tampilan yang santai dan trendi.</p>
            
            <h2>2. Loafer</h2>
            <p>Sepatu loafer merupakan pilihan yang elegan dan nyaman. Model ini memiliki desain slip-on tanpa tali atau pengikat. Loafer biasanya terbuat dari kulit dan cocok untuk acara formal atau semi-formal. Mereka dapat dipadukan dengan celana panjang, celana chino, atau bahkan celana pendek untuk tampilan yang santai namun sopan.</p>

            <h2>3. Boots</h2>
            <p>Sepatu boots adalah pilihan yang kuat dan tahan lama. Ada berbagai jenis boots, termasuk chelsea boots, combat boots, dan hiking boots. Boots memberikan tampilan yang keren dan kasual, serta memberikan perlindungan ekstra pada musim dingin atau kegiatan luar ruangan. Mereka cocok dipadukan dengan celana jeans atau celana pendek untuk tampilan yang berani.</p>

            <h2>4. Sandal</h2>
            <p>Sandal adalah model sepatu yang cocok untuk musim panas atau acara santai. Mereka nyaman dan memberikan sirkulasi udara yang baik pada kaki. Ada berbagai model sandal, mulai dari sandal jepit, sandal slide, hingga sandal dengan tali yang melingkar di sekitar kaki. Sandal bisa dipadukan dengan celana pendek, celana panjang, atau bahkan gaun musim panas untuk tampilan yang santai dan ceria.</p>

            <h2>5. Formal Shoes</h2>
            <p>Sepatu formal adalah pilihan yang tepat untuk acara-acara resmi seperti pernikahan atau pertemuan bisnis. Model ini termasuk oxford shoes, derby shoes, atau monk strap shoes. Mereka memiliki desain klasik dengan detail dan tali pengikat yang khas. Sepatu formal umumnya terbuat dari kulit dan dapat dipadukan dengan setelan jas atau pakaian formal lainnya untuk tampilan yang elegan dan profesional.</p>

            <h2>Kesimpulan</h2>
            <p>Pilihan model sepatu sangat penting dalam menciptakan tampilan yang tepat dan sesuai dengan kesempatan. Sneaker, loafer, boots, sandal, dan sepatu formal adalah beberapa model yang populer dan memiliki kegunaan yang berbeda. Pilihlah model yang sesuai dengan gaya pribadi, acara, dan kenyamanan Anda. Jangan ragu untuk bereksperimen dengan gaya dan mencari model sepatu yang mencerminkan kepribadian Anda.</p>
	</div>
	
</main>
@endsection