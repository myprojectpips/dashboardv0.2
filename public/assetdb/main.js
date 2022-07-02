$(document).ready(function () {
    togglerButton();
    scrollTop();
    setting();
});

function togglerButton() {
    let windowPage = $(window);
    
    $('#toggler').click(function () { 
        let sidebar = $('#sidebar');
        $('.icon-toggler').toggleClass('fa-bars fa-xmark');
        
        function checkWidth() {
            var windowSize = windowPage.width();
            
            // console.log(windowSize);

            if (windowSize >= 950) { // Dekstop
                sidebar.toggleClass('sidebar-toggled').removeClass('sidebar-toggled-responsive');
            }else if (windowSize >= 400){ // Ipad & Mobile
                sidebar.toggleClass('sidebar-toggled-responsive').removeClass('sidebar-toggled');
            }else{ // Minim Device
                sidebar.toggleClass('sidebar-toggled-responsive').removeClass('sidebar-toggled')
            }
        }

        checkWidth();
        $(windowPage).resize(checkWidth);

        // $('#sidebar').toggleClass('sidebar sidebar-toggled');
    });
}

function scrollTop() {
    $(window).scroll(function(){
        if ($(window).scrollTop() > 100) {
            $('#btnScrollTop').fadeIn();
        } else {
            $('#btnScrollTop').fadeOut();
        }
    });

    $('#btnScrollTop').click(function () {
        $('html, body').animate({scrollTop : 0}, 0);
    });
}

function setting() {
    $('#profileInformation').click(function () {
        $('#profileContainer').removeClass('d-none');
        $('#accountContainer').addClass('d-none');
        $('#securityContainer').addClass('d-none');
    });

    $('#accountSetting').click(function () {
        $('#profileContainer').addClass('d-none');
        $('#accountContainer').removeClass('d-none');
        $('#securityContainer').addClass('d-none');
    });

    $('#securitySetting').click(function () {
        $('#profileContainer').addClass('d-none');
        $('#accountContainer').addClass('d-none');
        $('#securityContainer').removeClass('d-none');
    });
}

function rupiah(harga){
    var	number_string = harga.toString(),
        sisa 	= number_string.length % 3,
        rupiah 	= number_string.substr(0, sisa),
        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
            
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return "Rp. " + rupiah;
}