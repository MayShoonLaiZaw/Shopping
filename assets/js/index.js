var sliders = document.querySelectorAll(".products-slide-collection");
var index = 0;

function next() {
    sliders[index].classList.remove("active");
    index = (index + 1) % sliders.length;
    sliders[index].classList.add("active");
}

function prev() {
    sliders[index].classList.remove("active");
    index = (index - 1 + sliders.length) % sliders.length;
    sliders[index].classList.add("active");
}

setInterval(next,5000);

// var add_card = document.querySelectorAll(".add-card");
// add_card.forEach(items=> {

//     items.addEventListener("click",function() {
//         // let data_id = this.getAttribute('data-id');
//         let data = {
//             data_id: this.getAttribute('data-id'),
//         }
//         // console.log(data);
//         $.ajax({
//             type: "POST",
//             url: "./shopping_card_api.php",
//             data: data,
//             success: function(res){
//                 console.log(res);
//             },
//             error: function(err) {
//                 console.error(err);
//             }
//         })
//     })
// })

// function fetchShoppingCard(){
//     // var add_card = document.querySelectorAll(".add-card");
//     add_card.forEach(items=> {
//         var data_id = items.getAttribute('data-id');
//         var data = {
//             data_id : data_id,
//         }
//         console.log(data);
//         $.ajax({
//             method: "POST",
//             url: "./fetchshopping_api.php",
//             data: data,
//             success: function(res){
//                 console.log(res);
//             },
//             error: function(err) {
//                 console.log(err);
//             }
//         })
//     })
// }
// fetchShoppingCard();