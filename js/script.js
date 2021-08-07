const cart = document.getElementById('cart');
const btn = document.getElementById('show');

btn.onclick = function ()
    {
        cart.classList.toggle('hidden');
        if (btn.innerHTML === "Show")
        {
            btn.innerHTML = "Hide";
        } else {
            btn.innerHTML = "Show";
        }
    };