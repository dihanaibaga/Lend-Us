<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts.head')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.main_menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="pricing-plan">
                    <!-- title text and switch button -->
                    <div class="text-center">
                        <h1 class="mt-5">Lend US</h1>
                        <p class="mb-2 pb-75">
                            Silahkan Pilih Layanan/Barang yang kamu butuhkan dengan memilih salah satu opsi di bawah ini
                        </p>
                    </div>
                    <!--/ title text and switch button -->

                    <!-- pricing plan cards -->
                    <div class="row pricing-card">
                        <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                            <div class="row">
                                <!-- mobil -->
                                <div class="col-12 col-md-4">
                                    <div class="card basic-pricing text-center">
                                        <div class="card-body">
                                            <h3>Mobil Dinas</h3>
                                            <p class="card-text">multi purpose vehicle</p>
                                            <ul class="list-group list-group-circle text-left">
                                                <li class="list-group-item">Transmisi Manual</li>
                                                <li class="list-group-item">Bahan Bakar Pertalite</li>
                                                <li class="list-group-item">7 Kursi</li>
                                                <li class="list-group-item">1988 CC</li>
                                                <li class="list-group-item">137 HP</li>
                                            </ul>
                                            <button class="btn btn-block btn-outline-success mt-2">Pilih</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ mobil -->

                                <!-- standard plan -->
                                <div class="col-12 col-md-4">
                                    <div class="card standard-pricing popular text-center">
                                        <div class="card-body">
                                            <h3>Zoom Premium</h3>
                                            <p class="card-text">Akses Premium Video Converence</p>
                                            <ul class="list-group list-group-circle text-left">
                                                <li class="list-group-item">Meetings up to 300 Attendants</li>
                                                <li class="list-group-item">Team Chat, Group and file sharing</li>
                                                <li class="list-group-item">White Board</li>
                                                <li class="list-group-item">Cloud Storage</li>
                                                <li class="list-group-item">Free in Lend-us</li>
                                            </ul>
                                            <button class="btn btn-block btn-primary mt-2">Pilih</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ standard plan -->

                                <!-- enterprise plan -->
                                <div class="col-12 col-md-4">
                                    <div class="card enterprise-pricing text-center">
                                        <div class="card-body">
                                            <h3>Laboratorium</h3>
                                            <p class="card-text">Laboratorium Komputer</p>
                                            <ul class="list-group list-group-circle text-left">
                                                <li class="list-group-item">20 Perangkat x 4 Ruangan</li>
                                                <li class="list-group-item">Pendingin di setiap ruangan</li>
                                                <li class="list-group-item">Sound Sistem</li>
                                                <li class="list-group-item">Proyektor</li>
                                                <li class="list-group-item">Bersih dan nyaman</li>
                                            </ul>
                                            <button class="btn btn-block btn-outline-primary mt-2">Pilih</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ enterprise plan -->
                            </div>
                        </div>
                    </div>
                    <!--/ pricing plan cards -->

                    <!-- pricing free trial -->
                    <div class="pricing-free-trial">
                        <div class="row">
                            <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
                                <div class="pricing-trial-content d-flex justify-content-between">
                                    <div class="text-center text-md-left mt-3">
                                        <h3 class="text-primary">Still not convinced? Start with a 14-day FREE trial!</h3>
                                        <h5>You will get full access to with all the features for 14 days.</h5>
                                        <button class="btn btn-primary mt-2 mt-lg-3">Start 14-day FREE trial</button>
                                    </div>

                                    <!-- image -->
                                    <img src="../../../app-assets/images/illustration/pricing-Illustration.svg" class="pricing-trial-img img-fluid" alt="svg img" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ pricing free trial -->

                    <!-- pricing faq -->
                    <div class="pricing-faq">
                        <h3 class="text-center">FAQ's</h3>
                        <p class="text-center">Let us help answer the most common questions.</p>
                        <div class="row my-2">
                            <div class="col-12 col-lg-10 col-lg-offset-2 mx-auto">
                                <!-- faq collapse -->
                                <div class="collapse-margin collapse-icon" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="lead collapse-title">Does my subscription automatically renew?</span>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                                                bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                                                caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut
                                                marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo" data-toggle="collapse" role="button" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="lead collapse-title">Can I store the item on an intranet so everyone has access?</span>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Tiramisu marshmallow dessert halvah bonbon cake gingerbread. Jelly beans chocolate pie powder. Dessert
                                                pudding chocolate cake bonbon bear claw cotton candy cheesecake. Biscuit fruitcake macaroon carrot cake.
                                                Chocolate cake bear claw muffin chupa chups pudding.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="lead collapse-title">Am I allowed to modify the item that I purchased?</span>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                                                soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert jelly-o sweet muffin
                                                chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow pastry. Bonbon biscuit pastry topping
                                                toffee dessert gummies. Topping apple pie pie croissant cotton candy dessert tiramisu.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ pricing faq -->
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN: Page Vendor JS-->
    @include('layouts.script')
</body>
<!-- END: Body-->

</html>
