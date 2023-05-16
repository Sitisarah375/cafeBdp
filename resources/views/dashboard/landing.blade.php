@extends('layout')
@section('content')

{{-- 1 --}}

<div class="bg" style="margin-top: 61px" id="home">
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <div class="col-6" style="margin-top: 200px">
                <h6><b>Welcome To</b></h6>
                <div class="text-danger" style="font-size: 50px"><b>Cafe Wikrama</b></div>
                <h4 class="text-success">Fresh and Delicious Food Every Day!</h4>
                <br>
                <a href="/index" class="btn btn-outline-success">Order Now!</a>
            </div>
            <div class="img">
                <img src="img/home.png" alt="">
            </div>
        </div>
    </div>
</div>

{{-- end --}}

{{-- 2 --}}

<div class="container-fluid two pt-5" id="shop">
    <h2 class="text-center text-danger"><b>My Menu</b></h2>
    <select class="form-select d-flex" aria-label="Default select example" onchange="menuCheck(this)">
        <option value="" selected>Select menu type</option>
        <option value="foods">Foods</option>
        <option value="drinks">Drinks</option>
    </select>
    <div class="row mt-4 ms-5">
        <div class="col-lg-4 mb-3" id="drink">
            <div class="card border border-dark"
                style="padding-bottom:20px; width: 18rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                <img src="https://i.pinimg.com/564x/82/bb/1c/82bb1c883f968f05488f88f79433510e.jpg" class="card-img-top"
                    alt="..." style="max-height: 320px; min-height:320px">
                <div class="card-body">
                    <h5 class="card-title">Green Tea</h5>
                    <p class="card-text">Rp. 5.000,00</p>
                    <a href="#" class="btn btn-success">Buy!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3" id="drink">
            <div class="card border border-dark"
                style="padding-bottom:20px;width: 18rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                <img src="https://i.pinimg.com/564x/e1/b2/45/e1b245b8a12e75b61252f24719ec52ad.jpg" class="card-img-top"
                    alt="..." style="max-height: 320px; min-height:320px">
                <div class="card-body">
                    <h5 class="card-title">Coffee</h5>
                    <p class="card-text">Rp. 5.000,00</p>
                    <a href="#" class="btn btn-success">Buy!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3" id="drink">
            <div class="card border border-dark"
                style="padding-bottom:20px;width: 18rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                <img src="https://i.pinimg.com/564x/76/ba/be/76babebd4643daa5cfe37451cbaa28f3.jpg" class="card-img-top"
                    alt="..." style="max-height: 320px; min-height:320px">
                <div class="card-body">
                    <h5 class="card-title">Juice</h5>
                    <p class="card-text">Rp. 5.000,00</p>
                    <a href="#" class="btn btn-success">Buy!</a>
                </div>
            </div>
        </div>
    </div>

    {{-- end --}}

    {{-- 3 --}}
    <div class="container mt-5" id="food">
        <div class="row">
            <div class="d-flex">
                <img src="https://i.pinimg.com/736x/d3/9b/5e/d39b5e96efd26149d0cebbe8ca888007.jpg"
                    style="max-height: 250px; min-height:250px">
                <div class="col-8" style="margin-top:70px">
                    <h4><b>Bakso</b></h4>
                    <p>Bakso atau baso adalah jenis bola daging yang lazim ditemukan pada masakan Indonesia. Bakso
                        umumnya dibuat dari campuran daging sapi giling dan tepung tapioka, tetapi ada juga bakso yang
                        terbuat dari daging ayam, babi, ikan, udang bahkan daging kerbau.</p>
                    <a href="" class="btn btn-outline-success">Order!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="food">
        <div class="row">
            <div class="d-flex">
                <img src="img/food/seblak.png" style="max-height: 300px; min-height:300px">
                <div class="col-8" style="margin-top:70px">
                    <h4><b>Seblak</b></h4>
                    <p>Seblak adalah masakan khas Sunda yang awal mula nya terinspirasi dari makanan kobok khas india.
                        dikenal berasal dari wilayah Parahyangan dengan cita rasa gurih dan pedas. Terbuat dari kerupuk
                        basah bumbu halus ala india yang terdiri dari bawang putih dengan kencur.</p>
                    <a href="" class="btn btn-outline-success">Order!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="food">
        <div class="row">
            <div class="d-flex">
                <img src="https://i.pinimg.com/564x/3e/24/f8/3e24f8eb09b7a36a03a5267dc76d48a6.jpg"
                    style="width:400px; height:240px">
                <div class="col-8" style="margin-top:70px">
                    <h4><b>Mie Ayam</b></h4>
                    <p>Mi ayam adalah hidangan khas Indonesia yang terbuat dari mi gandum yang dibumbui dengan daging
                        ayam yang biasanya dipotong dadu. Hidangan ini banyak terpengaruh dengan teknik penyajian
                        kuliner yang digunakan dalam hidangan Tionghoa.</p>
                    <a href="" class="btn btn-outline-success">Order!</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    {{-- end --}}

    {{-- contact --}}
    {{-- <section class="footer mt-5" id="contact">       
            <div class="footer-grid">   
                  <section class="footer-1">
                <div class="icons">
                    <a href="https://twitter.com/smkwikrama" class="bi bi-twitter"></a>
                    <a href="https://www.instagram.com/smkwikrama/" class="bi bi-instagram"></a>
                    <a href="https://www.youtube.com/@multimediawikrama7482" class="bi bi-youtube"></a>
                    <a href="https://www.linkedin.com/school/smkwikramabogor/mycompany/" class="bi bi-linkedin"></a>
                </div>
            </section>
            </div>
        <div class="credit">created by <span>sarah</span> | all rights reserved.</div>
        </section> --}}

    {{-- end --}}

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container" id="contact">
                <div class="row">
                    <div class="col-lg-6 col-md-3 footer-links">
                        <div class="social-links mt-5"">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-1 mt-1">
            <div class="copyright">
                &copy; Copyright <strong><span>Sarah</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script>
        function menuCheck(that) {
            if (that.value == "foods") {
                document.querySelectorAll("#food").forEach(e => e.style.display = "block");
                document.querySelectorAll("#drink").forEach(e => e.style.display = "none");
            } else if (that.value == "drinks") {
                document.querySelectorAll("#drink").forEach(e => e.style.display = "block");
                document.querySelectorAll("#food").forEach(e => e.style.display = "none");
            } else {
                document.querySelectorAll("#drink").forEach(e => e.style.display = "block");
                document.querySelectorAll("#food").forEach(e => e.style.display = "block");
            }
        }

    </script>
    @endsection
