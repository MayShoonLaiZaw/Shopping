let minus = document.querySelectorAll('.minus');
let plus = document.querySelectorAll('.plus');
let quantity = document.querySelectorAll('.quantity');
minus.forEach(substract => {
    substract.addEventListener("click",function() {
    var quantity_product_id = substract.getAttribute("quantity-product-id");
    console.log(quantity_product_id);
    quantity.forEach(item=> {
        var a = +item.innerText; 
    
            a = Math.max(1,a-1);
            quantity.innerText = a;
        })
    })
})


plus.forEach(add => {
    add.addEventListener("click",function() {
        var quantity_product_id = add.getAttribute("quantity-product-id");
        a = a+1;
        console.log(a);
        quantity.innerText = a;
        console.log(quantity_product_id);
    })
})