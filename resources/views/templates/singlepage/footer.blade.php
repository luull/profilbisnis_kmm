<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-6 footer-contact" data-aos="fade-right" data-aos-delay="100">
                    <h3> {{session('konfigurasi')->app_name}}</h3>
                    <p class="mb-3">
                        {{session('konfigurasi')->about_web}}
                    </p>
                    {!!session('qrcode')!!}
                </div>
                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-bottom" data-aos-delay="100">
                    <h4>Layanan</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#about"> Profil</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#produk"> Produk</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#testimoni"> Testimoni</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#photo"> Galeri</a></li>
                       
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-left" data-aos-delay="100">
                    <h4>Kontak</h4>
                    <ul>

                        <li><a>Alamat : {{session('data')->city->city_name.' '.session('data')->city->type}} - {{session('data')->province->province}}</a></li>
                        <li><a href="tel:{{ session('data')->hp }}">No.Hp : {{ session('data')->hp }}</a></li>
                        <li><a href="mailto:{{ session('data')->email }}"> Email : {{ session('data')->email }}</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone={{ session('data')->wa }}" target="blank"> Whatsapp : {{ session('data')->wa }}</a></li>
                    </ul>
                </div>

            </div>

            <div class="row">

                <div class="copyright-wrap col-md-12 py-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="copyright">
                            &copy; {{session('konfigurasi')->copyright}}
                            Powered by <a href=" {{session('konfigurasi')->url}}"> {{session('konfigurasi')->poweredby}}</a>
                        </div>
     
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="http://twitter.com/{{ session('data')->twitter }}" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="http://facebook.com/{{ session('data')->fb }}" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://instagram.com/{{ session('data')->ig }}" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/{{ session('data')->tube }}/featured" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer><!-- End Footer -->