<footer>
    <div class="main-footer" style="background:url(img/footer-bg.jpg) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ft-item-all">
                        <h2>UKRentals</h2>
                        <p>If you are looking to rent the latest luxury Car in Dubai, luxurysupercarsdubai.com is a
                            one-stop destination for all. You can avail the widest range of the most exotic luxury cars
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ft-item-all">
                        <h2>Useful Links</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Luxury Cars</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ft-item-all">
                        <h2>Car Brands</h2>
                        <ul>
                            <li><a href="">Aston Martin</a></li>
                            <li><a href="">Audi</a></li>
                            <li><a href="">Bentley</a></li>
                            <li><a href="">BMW</a></li>
                            <li><a href="">Ferrari</a></li>
                            <li><a href="">Rolls-Royce</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ft-item-all contact-ft">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <h6>Phone</h6>
                                <p><a href="tel:+971509038904">+971 50 903 8904</a> - <a href="tel:+971565388444">+971
                                        56 538 8444</a></p>
                                <p>Landline: <a href="tel:+97145466616">+971 4 546 6616</a></p>
                            </li>
                            <li>
                                <h6>Email</h6>
                                <a href="mailto:info@ukrentaldeals.com">info@ukrentaldeals.com</a>
                            </li>
                            <li>
                                <h6>Address</h6>
                                <p>Church St WindermereState CodeLA23 3DG, UK</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center border-tp">
                <div class="col-lg-3">
                    <div class="ft-logo">
                        <a href="#!"><img src="img/ft-logo.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ft-social">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="pay-method">
                        <img src="img/pay-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ft-copy">
        <div class="container">
            <div class="term-privacy">
                <ul>
                    <li><a href="">Booking T&C’s</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <p>© 2023 Luxury Super Car Rentals UK.</p>
        </div>
    </div>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/script.js"></script>
<script>
$('.car-slide').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    navText: [
        '    <img src="img/arrow1.png" alt=""> ',
        '    <img src="img/arrow2.png" alt="">',
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})
$('.review-slide').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    navText: [
        '    <img src="img/arrow1.png" alt=""> ',
        '    <img src="img/arrow2.png" alt="">',
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3.5
        }
    }
})
</script>
<script>
$('#datepicker,#datepicker2').one('focus', function() {
    $(this)
        .datepicker({
            minDate: 0,
            showButtonPanel: true,
        })
        .datepicker('show');
    $('#ui-datepicker-div').draggable();
});
</script>
<script>
// faq
$(".frequently-section .acc_trigger:first").addClass("closed").next().show();
$(".faq_item > .acc_trigger").bind("click", function() {
    if ($(this).hasClass("closed")) {
        $(".faq_item").children(".acc_trigger").removeClass("closed");
        $(".faq_item").children(".acc_container").slideUp(300);
        $(this).removeClass("closed");
        $(this).next(".acc_container").slideUp(300);
        return false;
    } else {
        $(".faq_item").children(".acc_trigger").removeClass("closed");
        $(".faq_item").children(".acc_container").slideUp(300);
        $(this).addClass("closed");
        $(this).next(".acc_container").slideDown(300);
        return false;
    }
});
</script>
</body>

</html>