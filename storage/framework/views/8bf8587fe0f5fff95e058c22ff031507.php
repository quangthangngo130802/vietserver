<div class="header_top">
    <div class="container">
        <div class="float-left site_brand">
            <a href="../index.html" class="logo" title="VIETSERVER.VN">
                <img src="<?php echo e(asset('asset/img/storage/uploads/2021-08-02/logo-fullcolor_size_2640x710.png')); ?>"
                    alt="VIETSERVER.VN">
            </a>
        </div>
        <div class="float-right">
            <ul class="top_nav d-none d-md-block">
                <li><a href="../faqs.html"><i class="fa fa-question-circle"></i> Câu hỏi thường gặp</a></li>
                <li><a href="../login.html"><i class="fa fa-life-ring"></i> Hỗ trợ</a></li>
                <li><a class="header_phone" href="tel:0987444400"><i class="fa fa-phone-square"></i>
                        <span>0987444400</span></a></li>

               <?php if(!Auth::check()): ?>
                    <li>
                        <a class="btn btn-primary" href="../register.html">Đăng ký</a>
                        <a class="btn btn-primary" href="../login.html">Đăng nhập</a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="mobile_support d-block d-md-none">
                <a href="../faqs.html"><i class="fa fa-question-circle"></i></a>
                <a class="ml-2" href="../login.html"><i class="fa fa-info-circle"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header_menu_area">
    <div class="header_main">
        <nav role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <div class="container">
                <div class="nav_menu">
                    <div class="nav_home">
                        <a href="../index.html" title="Trang chủ"><i class="fa fa-home"></i></a>
                    </div>
                    <ul class="main_menu menu_2 d-none d-md-block">
                        <li class="">
                            <a href="https://v2.vietserver.vn/" title="Cloud VPS V2"> <span>Cloud VPS V2</span></a>

                        </li>
                        <li class="dropdown">
                            <a href="#" title="Cloud VPS VN"> <span>Cloud VPS VN</span></a>
                            <ul class="sub_menu_2 ">
                                <li class="">
                                    <a href="cloud-vps-viet-nam.html" title="Cloud VPS Việt Nam"> <span>Cloud VPS Việt
                                            Nam</span></a>

                                </li>
                                <li class="">
                                    <a href="cloud-vps-viet-nam-2.html" title="Cloud VPS Việt Nam 2"> <span>Cloud VPS
                                            Việt Nam 2</span></a>

                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="Cloud VPS Quốc Tế"> <span>Cloud VPS Quốc Tế</span></a>
                            <ul class="sub_menu_2 ">
                                <li class="">
                                    <a href="cloud-vps-usa-5.html" title="Cloud VPS Quốc Tế"> <span>Cloud VPS Quốc
                                            Tế</span></a>

                                </li>
                                <li class="">
                                    <a href="cloud-vps-usa-dc-4.html" title="Cloud VPS USA DC 4"> <span>Cloud VPS USA DC
                                            4</span></a>

                                </li>
                                <li class="">
                                    <a href="cloud-vps-usa-3.html" title="Cloud VPS USA DC 3"> <span>Cloud VPS USA DC
                                            3</span></a>

                                </li>
                                <li class="">
                                    <a href="cloud-vps-usa-2.html" title="Cloud VPS USA DC 2"> <span>Cloud VPS USA DC
                                            2</span></a>

                                </li>
                                <li class="">
                                    <a href="cloud-vps-usa.html" title="Cloud VPS USA DC 1"> <span>Cloud VPS USA DC
                                            1</span></a>

                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="../blog/index.html" title="Tin tức"> <span>Tin tức</span></a>

                        </li>
                        <li class="">
                            <a href="../tai-lieu.html" title="Hướng dẫn"> <span>Hướng dẫn</span></a>

                        </li>
                        <li class="">
                            <a href="../chinh-sach.html" title="ĐIỀU KHOẢN"> <span>ĐIỀU KHOẢN</span></a>

                        </li>
                        <li class="">
                            <a href="../sla.html" title="SLA"> <span>SLA</span></a>

                        </li>
                        <li class="">
                            <a href="../lien-he.html" title="Liên hệ"> <span>Liên hệ</span></a>

                        </li>
                    </ul>
                    <button type="button" class="mobile_menu d-block d-md-none"><i class="fa fa-bars"></i></button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH C:\laragon\www\vietserver\resources\views/frontend/layout/partials/navbar.blade.php ENDPATH**/ ?>