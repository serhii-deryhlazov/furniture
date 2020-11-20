<script type="text/javascript">
    $(document).ready(function() {

        var slider2 = document.getElementById('sliderRefine');

        noUiSlider.create(slider2, {
            start: [42, 880],
            connect: true,
            range: {
                'min': [30],
                'max': [900]
            }
        });

        var limitFieldMin = document.getElementById('price-left');
        var limitFieldMax = document.getElementById('price-right');

        slider2.noUiSlider.on('update', function(values, handle) {
            if (handle) {
                limitFieldMax.innerHTML = $('#price-right').data('currency') + Math.round(values[handle]);
            } else {
                limitFieldMin.innerHTML = $('#price-left').data('currency') + Math.round(values[handle]);
            }
        });
    });
</script>

<script src="./assets/js/jquery.flexisel.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,
            animationSpeed: 400,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 3
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script>

    $("#lang").on("click", function() {
        $(this).attr("src", "assets/img/flags/russia.png");
    });

    $(".card-product").on("click", function() {
        window.location.href = $(this).find("a").attr("href");
    });

    $("#catlink").on("click", function() {
        window.location.href = "?p=2-catalog";
    });

    $("#contlink").on("click", function() {
        window.location.href = "?p=4-contact";
    });

    $("#matlink").on("click", function() {
        window.location.href = "?p=5-materials";
    });

    $(".main-cat").on("click", function(e) {
        $("#collapseTwo").addClass("in");

        switch ($(this).data("ftype")) {
            case 1:
                $("#ft1").attr("checked", "true");
                break;
            case 2:
                $("#ft2").attr("checked", "true");
                break;
            case 3:
                $("#ft3").attr("checked", "true");
                break;
            default:
        };
    });
</script>