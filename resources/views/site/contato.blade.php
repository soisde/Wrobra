@extends('layout.layout')

@section('title', 'Contato')

@section('conteudo')

 <!-- slider Area Start-->
 <div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h2>Contato</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
                            <li class="breadcrumb-item"><a href="#">Contato</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- ================ contact section start ================= -->
<section class="contact-section">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900877!2d-46.43443702389327!3d-23.495592259180704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1708103568586!5m2!1spt-BR!2sbr" width="95%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Entre em contato</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira sua mensagem'" placeholder="Insira sua mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira seu nome'" placeholder="Insira seu nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira seu email'" placeholder="Insira seu email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira o assunto'" placeholder="Insira o assunto">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>São Paulo, São Paulo.</h3>
                            <p>Marechal Tito, 1500</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>(11) 95075-8902</h3>
                            <p>Seg - Sáb 8:00 - 17:30</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>wrobras24@gmail.com</h3>
                            <p>Envie-nos sua dúvida a qualquer momento!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->
@endsection
