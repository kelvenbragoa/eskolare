@extends('layouts.master')
@section('content')
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h2>Sobre nós</h2>
        <p>Lista-Eskolare nasceu para facilitar a vida de encarregados de educação na hora de comprar o material escolar, de encontrar um explicador e carrinha escolar para os seu filhos, tudo isso apenas selecionando a cidade, escola e classe.</p>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{asset('template2/assets/img/aboutus.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>O que é Lista-Eskolare.</h3>
                <p class="fst-italic">
                    Lista-Eskolare é um ecommerce de materiais escolares que nasceu para ajudar milhares encarregados de educação a comprar o material do seu filho, encontrar um explicador e carrinha escolar, de uma forma fácil, rápida e segura. Podendo ser acessado através de qualquer
                    dispositivo, seja smartphone, tablet ou pc, o Lista-Eskolare conta com um sistema dinâmico e intuitivo, sendo necessário apenas selecionar a cidade, escola e classe para ter acesso a lista completa e comprar todos os materiais
                    exigidos pela escola e ainda receber no conforto da sua casa.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> No Lista-Eskolare basta apenas você selecionar a cidade, escola e classe para comprar todos os materiais escolares do seu filho exigidos pela escola.</li>
                    <li><i class="bi bi-check-circle"></i> No Lista-Eskolare o material é entregue a porta da sua casa com apenas um clique.</li>
                    <li><i class="bi bi-check-circle"></i> No Lista-Eskolare você encontra explicador qualificado para lhe ajudar e carrinha escolar para seu filho.</li>
                </ul>
                <p>
                    Compre agora seu material escolar completo em um único lugar!! De forma simples, fácil e dinâmica!
                </p>

            </div>
        </div>

    </div>
</section>
    
@endsection