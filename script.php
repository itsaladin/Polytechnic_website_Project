

<script src="ins/Vertical-Text-Scrolling-Plugin-With-jQuery-scrollText-js/Vertical-Text-Scrolling-Plugin-With-jQuery-scrollText-js/jQuery.scrollText.js"></script>

<script src="ins/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/jquery.min.js"></script>
<script src="ins/bootstrap-4.0.0-beta.3-dist/js/slim.min.js"></script>
<script src="ins/bootstrap-4.0.0-beta.3-dist/js/popper.js"></script>
<script src="ins/bootstrap-4.0.0-beta.3-dist/js/bootstrap.min.js"></script>
<script src="ins/jquery-20171205T170344Z-001/jquery/jquery-3.2.1.min.js"></script>


<script src="ins/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>

<script src="ins/jQuery-Ajax-enabled-Month-Calendar-Plugin-with-Bootstrap-Zabuto-Calendar/jQuery-Ajax-enabled-Month-Calendar-Plugin-with-Bootstrap-Zabuto-Calendar/zabuto_calendar.min.js"></script>



<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        autoplay: true,
        loot: true,
        nav: false,
        animateOut: 'fadeOut',
        autoplayTimeout: 3000
    });
    /*$('.play').on('click', function() {
     owl.trigger('play.owl.autoplay', [1000])
     })
     $('.stop').on('click', function() {
     owl.trigger('stop.owl.autoplay')
     });*/



    /*$('.owl-carousel').owlCarousel({
     loop: true,
     margin: 10,
     nav: true,
     responsive: {
     0: {
     items: 1
     },
     600: {
     items: 3
     },
     1000: {
     items: 5
     }
     }
     });*/


    $(document).ready(function() {
        $("#calendar").zabuto_calendar({
            today: true,
            show_previous: true,
            show_next: true,
            cell_border: true,
            nav_icon: true, // object: prev: string, next: string
            data: true,
            ajax: true, // object: url: string, modal: boolean,
            legend: true, // object array, [{type: string, label: string, classname: string}]
        });
    });
</script>