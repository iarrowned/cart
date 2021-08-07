
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
function del(id){
    console.log('del');
    $.ajax({
        async: false,
        type: "POST",
        url: "/ajax/cart.php",
        dataType: "text",
        data: "action=del&id="+id,
        error: function () {
            alert("Error");
        },
        success: function (response){

        }
    })
}
