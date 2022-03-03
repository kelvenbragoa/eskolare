 <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Lista-Eskolare</h3>
                    <p>
                        Rua Major Serpa <br> Beira, Rua 8989898<br> Moçambique<br><br>
                        <strong>Telefone:</strong> +258 84 4300 100<br>
                        <strong>Email:</strong> lista-eskolare@listaeskolare.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links rápidos</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/howitworks')}}">Como funciona</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="courses.html">Listas</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/teacher')}}">Explicação</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{URL::to('/schoolbus')}}">Carrinhas</a></li>
                     
                        
                    </ul>
                </div>

              
                <div class="col-lg-6 col-md-6 footer-newsletter">
                    <h4>Junte-se a nós</h4>
                    <p>Papelarias interesadas em fazer parceria</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>LISTA-ESKOLARE</span></strong>. Todos Direitos Reservados
            </div>
            <div class="credits">
               
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
           
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

        </div>
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('template2/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('template2/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('template2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template2/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('template2/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('template2/assets/js/main.js')}}"></script>

</body>

</html>