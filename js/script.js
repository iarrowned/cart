const cart = document.getElementById('cart');
const btn = document.getElementById('show');

btn.onclick = function ()
    {
        cart.classList.toggle('hidden');
    };