<!-- js -->
<script src="{{ asset('zfood/js/classie.js') }}"></script>
<script src="{{ asset('zfood/js/demo.js') }}"></script>

<script src="{{ asset('zfood/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('zfood/js/responsiveslides.min.js') }}"></script>
<script>
    $(function() {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: false,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
