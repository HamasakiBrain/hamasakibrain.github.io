$(document).ready(()=> {

    var parallax = new Parallax($(".zero_zero").get(0), {
        selector: '.pos-dark',
    });
    $(".phone").mask("+7 (000) 000 00-00")

    $("form").submit((e) => {
        e.preventDefault();
        req = $.ajax({
            url: "/tele.php",
            type: "POST",
            data: $('form').serialize(),
            success: ()=>{
                console.log("Success")
                $('.form').toggleClass('active');
            },
            error: () => {
                console.log("Error")
            }
        })
    })
    $('.send').on('click', () => {
        $('.form').toggleClass('active');
    })
});

