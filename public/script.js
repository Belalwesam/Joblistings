$(document).ready(function () {
    $(".deleteBtn").click(function (e) {
        e.preventDefault();
        let id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            url: "listings/" + id,
            type: "DELETE",
            data: {
                id: id,
                _token: token,
            },
            success: function () {
                console.log("it's deleted");
            },
        });
        $('#row-'+id).css({"display":"none"});
    });
});
let header = document.getElementById('header');
console.log(header)
window.onscroll = function() {
    let scrollY = window.scrollY;
    if (scrollY > 250) {
       header.classList.add('change');
    } else {
        header.classList.remove('change');
    }
}