

// -------------------nav toggle start--------------------

$(document).scroll(function () {
    var scroll = $(this).scrollTop();
    if (scroll > 50)
    {
        $(".navbar").addClass("nav-shadow")
    }
       
    else
        {
            $(".navbar").removeClass("nav-shadow")
        }
})

// -------------------nav toggle start--------------------