<div class="container-xxl px-0 marquee" id="">
    <marquee behavior="" direction=""><?= $run1->running_1; ?></marquee>
</div>

<!-- Footer Start -->
<div class="container-xxl py-5  footer">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <div class="location text-center position-relative">
                <img src="<?= base_url(); ?>assets/imagenew/circle.png" class="img-fluid bg" alt="">
                <div class="content">
                    <div class="f-text mb-4">
                        <img src="<?= base_url(); ?>assets/imagenew/location.svg" class="img-fluid" alt="">
                    </div>
                    <a href="https://goo.gl/maps/2QvjfKYQZxBKzydU9 ">
                        <img src="<?= base_url(); ?>assets/imagenew/f-location.svg" class="img-fluid icon-map" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 text-center p-0">
            <div class="social-media text-center position-relative">
                <div class="content">
                    <div class="f-text mb-4">
                        <img src="<?= base_url(); ?>assets/imagenew/social-media.svg" class="img-fluid" alt="">
                    </div>
                    <?php foreach ($sosmed as $sosmed) { ?>
                    <a href="<?= $sosmed->link; ?>" title="<?= $sosmed->name; ?>" target="_blank"><img
                            src="https://admin103.bonbancoffeeroastery.com/upload/icon/<?= $sosmed->icon; ?>"
                            class="img-fluid icon me-4" alt=""></a>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <div class="contact position-relative">
                <img src="<?= base_url(); ?>assets/imagenew/circle-2.png" class="img-fluid bg" alt="">
                <div class="content">
                    <div class="f-text mb-4">
                        <img src="<?= base_url(); ?>assets/imagenew/contact.svg" class="img-fluid" alt="">
                    </div>
                    <div class="contact-number ms-xl-5 ps-xl-5 ms-lg-0  ms-md-5 ps-md-5 ms-5 ps-4 text-start">
                        <?php
                        $number = $website->phone;
                        $n1 = substr($number, 0, 4);
                        $n2 = substr($number, 4, 4);
                        $n3 = substr($number, 8, 4);
                        $wa = $n1 . '-' . $n2 . '-' . $n3;
                        ?>
                        <div class="ctc position-relative">
                            <i class="fa fa-whatsapp text-white"></i>
                            <a href="https://wa.wizard.id/2c2b87" target="_blank"><?= $wa; ?></a>
                        </div>
                        <div class="ctc position-relative mt-3">
                            <i class="fa fa-envelope-o text-white"></i>
                            <a href=""><?= $website->email; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <div class="about-us position-relative">
                <div class="content">
                    <div class="f-text mb-4">
                        <img src="<?= base_url(); ?>assets/imagenew/about-us.svg" alt="">
                    </div>
                    <p class="text-white"><?= $website->about_us; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <div class="f-copyright position-relative">
                <div class="content">
                    <div class="f-text mb-4">
                        <img src="<?= base_url(); ?>assets/imagenew/copyright.svg" alt="">
                    </div>
                    <p class="text-white">©2022 <?= $website->name; ?> </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
            <div class="online-shop position-relative">
                <div class="content">
                    <div class="f-text">
                        <img src="<?= base_url(); ?>assets/imagenew/online-shop.svg" alt="">
                    </div>
                    <div class="tolen">
                        <div class="row">
                            <?php foreach ($tolen as $t) { ?>
                            <div class="col-lg-6 mt-3">
                                <a href="<?= $t->link; ?>" target="_blank" title="<?= $t->nama; ?>"><img
                                        src="https://admin103.bonbancoffeeroastery.com/upload/online_shop/<?= $t->image; ?>"
                                        class="img-fluid" alt=""></a>
                            </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-btn d-flex justify-content-center align-items-center text-center mt-5">
        <a href="" class="py-1 px-3 me-3">TERMS & CONDITIONS</a>
        <a href="" class="py-1 px-3">PRIVACY & POLICY</a>
    </div>
</div>
<!-- Footer End -->
<div class="copyright">
    <div class="container">
        <div class="row justify-content-center text-center mx-0">
            <div class="col-lg-4">
                <p>Copyright © 2022 - <a href="https://progimedia.com/">PROGIMEDIA</a> All Rights Reserved. Powered by
                    <a href="https://digitalindo.co.id/">Digitalindo</a>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animate__animated animate__bounceOutDown"
        style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animate__animated animate__fadeIn" style="display: block;">
            <div class="header-section" style="background: #F6FB00">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png"
                    onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin103.bonbancoffeeroastery.com/upload/wa_image/<?= $sec1->image; ?>">
                    </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                    <div class="avatar">
                        <img class="avatar"
                            src="https://admin103.bonbancoffeeroastery.com/upload/wa_image/<?= $sec2->image; ?>">
                    </div>
                    <div class="profile">
                        <p class="position">Customer Service </p>
                        <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                        <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                        <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } else { ?>
                        <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } ?>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
        <div class="chat-section animate__animated animate__fadeIn" id="customer_chat_<?= $sec3->id; ?>"
            style="display: none;">
            <div class="header-section" style="background:#F6FB00">
                <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png"
                    onclick="backListChat(<?= $sec3->id; ?>);">
                <div class="header-avatar-section">
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin103.bonbancoffeeroastery.com/upload/wa_image/<?= $sec3->image; ?>">
                    </div>
                </div>
                <div class="header-desc-section">
                    <h3><?= $sec3->nama; ?></h3>
                    <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                    <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                </div>
            </div>
            <div class="inside-chat-section">
                <div class="chat">
                    <div class="inside-chat">
                        <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari Bonban Coffee Roastery.</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
                <div class="chat">
                    <div class="inside-chat">
                        <span>Ada yang bisa saya bantu ?</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
            </div>
            <div class="box-chat-section">
                <div class="text">
                    <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>"
                        value="<?= $sec3->phone; ?>">
                    <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>"
                        name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onclick="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                </div>
                <div class="button-send">
                    <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img
                            src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script> -->

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>


<script type="text/javascript">
function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceOutDown')) {
        cek_class.classList.remove("animate__bounceOutDown");
        cek_class.classList.add("animate__bounceInUp");
        cek_class.style.display = "block";
    } else {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}

function chatCustomer(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
        list_chat.style.display = "none";
        chat.style.display = "block";
    }
}



function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceInUp')) {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}





function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
        chat.style.display = "none";
        list_chat.style.display = "block";
        $("#chat_wa_" + id).val('');
    }
}



function textChatWhatsapp(id) {
    var link_wa = 'https://api.whatsapp.com/send?';
    if (id != 0 && id != '') {
        var telp = $("#telp_wa_" + id).val();
        var chat = $("#chat_wa_" + id).val();
        var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
        var btn = document.getElementById("btn_wa_" + id);
        btn.setAttribute("href", link);
    }
}
</script>

</body>

</html>