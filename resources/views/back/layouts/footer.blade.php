</div>
</section>

<script type="text/javascript" src="{{ asset('back/') }}/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('back/') }}/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('back/') }}/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="{{ asset('back/') }}/assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('back/') }}/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('back/') }}/assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="{{ asset('back/') }}/assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="{{ asset('back/') }}/assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ asset('back/') }}/assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('back/') }}/assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="{{ asset('back/') }}/assets/js/script.js"></script>
<script type="text/javascript " src="{{ asset('back/') }}/assets/js/SmoothScroll.js"></script>
<script src="{{ asset('back/') }}/assets/js/pcoded.min.js"></script>
<script src="{{ asset('back/') }}/assets/js/demo-12.js"></script>
<script src="{{ asset('back/') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
