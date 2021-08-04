
function addToCart(id){
    console.log('add '+id);
    $.ajax({
        async: false,
        type: "POST",
        url: "/ajax/cart.php",
        dataType: "text",
        data: "action=add&id="+id,
        error: function () {
            alert("Error");
        },
        success: function (response){

        }
    })
}
function showCart(){
    console.log('show');
    $.ajax({
        async: false,
        type: "POST",
        url: "/ajax/cart.php",
        dataType: "text",
        data: "action=show",
        error: function () {
            alert("Error");
        },
        success: function (response){
            $('#cart').html(response);
        }
    })
}