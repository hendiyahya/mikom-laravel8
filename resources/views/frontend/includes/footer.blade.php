

<footer class="footer section pb-3 bg-primary text-white overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a class="footer-brand mr-lg-5 d-flex" href="/">
                    <img src="{{asset('img/logo-with-text.png')}}" height="35" class="mr-3" alt="Footer logo">
                </a>
                <p class="my-4">
                    {!! setting('meta_description') !!}
                </p>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0 text-center">
                <h6>
                    Tautan
                </h6>
                <ul class="links-vertical">
                    <li><a target="_blank" href="#">UPI</a></li>
                    <li><a target="_blank" href="#">FPMIPA</a></li>
                    <li><a target="_blank" href="#">DEPILKOM</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0 text-center">
                <h6>
                    Navigasi
                </h6>
                <ul class="links-vertical">
                    <li><a target="_blank" href="#">ARTIKEL</a></li>
                    <li><a target="_blank" href="#">FORUM</a></li>
                    <li><a target="_blank" href="#">KONSULTASI</a></li>
                </ul>
            </div>
        </div>

        <hr class="my-4 my-lg-5">

        <div class="row">
            <div class="col pb-4 mb-md-0">
                <div class="d-flex text-center justify-content-center align-items-center">
                    <p class="font-weight-normal mb-0">
                        &copy; {{ app_name() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
