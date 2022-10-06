<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Welcome to <span>PUSH_CLUB</span></h1>
                <h2>Địa điểm vui chơi,giải trí cho giới trẻ thủ đô</h2>
                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=2i2SOZgAuTI" class="glightbox play-btn"></a>
            </div>
        </div>
    </div>
</section>
<style>
#hero {
    background: url("public/img/theme.jpg") no-repeat top center;
}
</style>
<main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="public/layout/vendor/assets/img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Sân chơi sôi động cho giới trẻ Hà Thành.</h3>
                    <p class="fst-italic">
                        Ở PUSH là sự hội tụ sự đẳng cấp của các thể loại nhạc có một không hai: Deep House, top40. EDM,
                        Dust House, Electro… , sự hiện diện đặc biệt của các DJ phong cách, tên tuổi: Slim V, Jay L,
                        Cunmobile, KEN Nguyen…
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Lắc lư theo những điệu nhạc cuốn hút.</li>
                        <li><i class="bi bi-check-circle"></i> Tụ tập tổ chức tiệc lớn, tiệc nhỏ, có khi lại đơn giản.
                        </li>
                        <li><i class="bi bi-check-circle"></i> Tận hưởng không khí sôi động tuyệt vời.</li>
                    </ul>
                    <p>
                        Các event siêu hấp dẫn và thực sự hiếm có được tổ chức trên quy mô rộng lớn với những vị khách
                        mời đặc biệt, diễn ra chủ yếu vào cuối tuần.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Why Us</h2>
                <p>Tại sao đến PUSH CLUB ?</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Dj tài năng</h4>
                        <p>Các Dj có tên tuổi và góp mặt nhiều giải lớn.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>Giá cả hợp lý</h4>
                        <p>Giá cả là thế mạnh ở PUSH CLUB.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4> Chất lượng phục vụ</h4>
                        <p>Nhân viên được đào tại bài bản.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Menu</h2>
                <p>Thực đơn tại PUSH</p>
            </div>
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                <?php foreach($menu as $key => $value) { ?>
                <div class="col-lg-6 menu-item filter-starters">
                    <img src="public/img/<?php echo $value->menu_img;?>" class="menu-img" alt="">
                    <div class="menu-content">
                        <a
                            href="#"><?php echo $value->menu_name;?></a><span><?php echo number_format($value->menu_price)." VNĐ"; ?></span>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Events</h2>
                <p>Tổ chức sự kiện.</p>
            </div>

            <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach($table as $key => $value) { ?>
                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="public/img/<?php echo $value->table_img; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3><?php echo$value->table_name; ?></h3>
                                <div class="price">
                                    <p><span><?php echo number_format($value->table_price)." VNĐ"; ?></span></p>
                                </div>
                                <p>
                                    <?php echo $value->table_content; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Booking Bar</h2>
                <p>Booking</p>
            </div>
            <form action="booking_bar.php" method="POST">
            <div id="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 form-group">
                        <input type="text" name="ho_ten" class="ho_ten form-control dev1m" placeholder="Nhập họ và tên"
                            >
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 form-group">
                        <input type="text" class="so_dien_thoai form-control dev1m" name="so_dien_thoai"
                            placeholder="Nhập số điện thoại" >
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 form-group">
                        <input type="datetime-local" class="thoi_gian form-control dev1m" name="thoi_gian" >
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 form-group">
                        <input type="text" name="so_nguoi" class="so_nguoi form-control dev1m"
                            placeholder="Nhập số người" >
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 form-group">
                        <select name="table_name" id="table_name" class="table_name form-control dev1m" >
                            <option value="">---Chọn bàn---</option>
                            <?php foreach($table as $key => $value) {?>
                            <option value="<?php echo$value->table_id; ?>">
                                <?php echo $value->table_name. " ".number_format($value->table_price)." VNĐ"; ?>
                            </option>
                            <?php } ?>
                        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 form-group">
                        <select name="location_table" id="location_table" class="location_table form-control dev1m">
                        </select>
                        <div class="validate"></div>
                    </div>
                </div>
                <div id="divOderMenu">
                    <div class="order row" >
                        <div class="col-lg-4 col-md-4 form-group">
                            <select class="form-control dev1m" name="menuName[]">
                                <option>Chọn món ăn</option>
                                <?php  foreach($menu as $key => $value) { ?>
                                <option value="<?php echo$value->menu_id; ?>"><?php echo$value->menu_name; ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 form-group">
                            <input type="text" class="form-control dev1m" name="menuSoLuong[]" placeholder="Nhập số lượng">
                        </div>
                        <div class="col-lg-2 col-md-2 form-group">
                            <input id="btnAddOrder" type="button" class="form-control dev1m_addorder" value="THÊM MÓN">
                        </div>
                        <div class="col-lg-2 col-md-2 form-group">
                            <input onClick="window.location.reload();" type="button" class="form-control dev1m_addorder"
                                value="XÓA TẤT CẢ MÓN">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 form-group">
                        <textarea class="ghi_chu form-control dev1m" name="ghi_chu" rows="5" placeholder="Nhập ghi chú"></textarea>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="text-center"><button type="submit" class="dev1m_booking" name="booking_bar">Booking bar</button>
            </div>
            </form>
        </div>
        </div>

        <!-- ajax -->
        <script>
        // Xử lí table
        $(document).ready(function() {
            $("#table_name").change(function() {
                var id = $("#table_name").val();
                $.post("gettable.php", {
                    id_location: id
                }, function(data) {
                    $("#location_table").html(data);
                })
            });

        });
        // Xử lí menu
        $('#btnAddOrder').click(function() {
            getRowOrder();
        });

        function getRowOrder() {
            var totalRow = $('#divOderMenu .order').length;
            if (totalRow > 100) {
                alert('Quán Bar này k có nhiều món vậy đâu =))');
            } else {
                $.ajax({
                    url: "addroworder.php",
                    method: "GET",
                    success: function(response) {
                        $('#divOderMenu').append(response);
                    }
                });
            }
        }
        // Lấy dữ liệu

        // $("#booking_bar").click(function() {
        //     proccessBooking();
        // });

        // function proccessBooking() {
        //     var lstDataSubmit = [];
        //     $('#divOderMenu .order').each(function() {
        //         var dataRow = $(this).data('data-row');
        //         var i = 0;
        //         var dataOne = {
        //             hoTen: $('input.ho_ten').val(),
        //             soDienThoai: $('input.so_dien_thoai').val(),
        //             soNguoi: $('input.so_nguoi').val(),
        //             thoiGian: $('input.thoi_gian').val(),
        //             menuName: $('select.menuName[data-row="' + dataRow + '"] :selected').val() !=
        //                 undefined ?
        //                 $('select.menuName[data-row="' + dataRow + '"] :selected')
        //                 .val() : '',
        //             menuSoLuong: $('input.menuSoLuong[data-row="' + dataRow + '"]').val(),
        //             tableName: $('select.table_name').val(),
        //             locationTable: $('select.location_table').val(),
        //             ghiChu: $('input.ghi_chu').val(),
        //         };
        //         lstDataSubmit.push(dataOne);
        //     });
        //     $.ajax({
        //         url: "booking_bar.php",
        //         type: "POST",
        //         data: {
        //             data: lstDataSubmit,
        //         },
        //         success: function(msg) {
        //             if (msg == 1) {
        //                 alert("oki r");
        //             } else {
        //                 alert("ko oorn r");
        //             }
        //         },
        //     });
        // }
        // </script>
    </section><!-- End Book A Table Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Gallery</h2>
                <p>Một số hình ảnh tại PUSH</p>
            </div>
        </div>
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                <?php foreach($img_bar as $key => $value) { ?>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <img src="public/img/<?php echo$value->img_bar_image ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Dj Section ======= -->
    <section id="dj" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dj</h2>
                <p>Các DJ tại PUSH</p>
            </div>
            <div class="row">
                <?php foreach($dj as $key => $value) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="public/img/<?php echo $value->dj_img;?>" class="img-fluid" alt="">
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section><!-- End Chefs Section -->
</main>
<style>
.book-a-table .php-form-dev1m {
    width: 100%;
}

.book-a-table .php-form-dev1m .form-group {
    padding-bottom: 8px;
}

.book-a-table .php-form-dev1m .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
}

.book-a-table .php-form-dev1m .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
}

.book-a-table .php-form-dev1m .error-message br+br {
    margin-top: 25px;
}

.book-a-table .php-form-dev1m .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.book-a-table .php-form-dev1m .loading {
    display: none;
    text-align: center;
    padding: 15px;
}

.book-a-table .php-form-dev1m .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #cda45e;
    border-top-color: #1a1814;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.book-a-table .php-form-dev1m input,
.book-a-table .php-form-dev1m textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    background: #0c0b09;
    border-color: #625b4b;
    color: white;
}

.book-a-table .php-form-dev1m input::-moz-placeholder,
.book-a-table .php-form-dev1m textarea::-moz-placeholder {
    color: #a49b89;
}

.book-a-table .php-form-dev1m input::placeholder,
.book-a-table .php-form-dev1m textarea::placeholder {
    color: #a49b89;
}

.book-a-table .php-form-dev1m input:focus,
.book-a-table .php-form-dev1m textarea:focus {
    border-color: #cda45e;
}

.book-a-table .php-form-dev1m input {
    height: 44px;
}

.book-a-table .php-form-dev1m textarea {
    padding: 10px 12px;
}

.book-a-table .php-form-dev1m button[type=submit] {
    background: #cda45e;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}

.book-a-table .php-form-dev1m button[type=submit]:hover {
    background: #d3af71;
}

.native-input[type=date]::-webkit-calendar-picker-indicator {
    filter: invert(1);
}

.dev1m {
    margin-bottom: 15px;
    padding: 1rem 0.75rem;
    background-color: #000;
    color: #fff;
    text-align: left;
    font-size: 14px;
    border-radius: 0;
    font-family: inherit;

}

.dev1m_addorder {
    margin-bottom: 15px;
    padding: 1rem 0.75rem;
    background-color: #000;
    color: #fff;
    text-align: center;
    font-size: 14px;
    border-radius: 0;
    font-family: inherit;
}

.dev1m_booking {
    background: #cda45e;
    border: 0;
    padding: 10px 15px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}
</style>