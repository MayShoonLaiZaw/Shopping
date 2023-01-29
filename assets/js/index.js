// $(function() {
//     // $(".dropdown").hide();
//     // $("#nav-drop").hover(function() {
//     //     $(".dropdown").slideToggle();
//     // })
//     // $(".category-dropdown").hide();
//     // $(".category-lists li").click(function(){
//     //     $(".category-dropdown").show();
//     // })
    
// })

const buttons = document.querySelectorAll("[data-carousel-button]");
buttons.forEach(button => {
    button.addEventListener("click",function() {
        const offset = button.dataset.carouselButton === "next" ? 1 : -1;
        const slides = button.closest('[data-carousel]').querySelector("[data-slides]");
        const activeSlide = slides.querySelector('[data-active]');
        let newIndex = [...slides.children].indexOf(activeSlide) + offset;

        if(newIndex < 0) newIndex = slides.children.length -1;
        if(newIndex >= slides.children.length) newIndex = 0;
        slides.children[newIndex].dataset.active = true;
        delete activeSlide.dataset.active;
    })
})

const shoes = document.querySelector("#Shoes");
const clothes = document.querySelector("#Clothes");
const hats = document.querySelector("#hats");
const bags = document.querySelector("#bags");
const category = document.querySelectorAll(".category-lists li");
const cate_clothes = document.querySelector("#cate-clothes")
const cate_shoes = document.querySelector("#cate-shoes")
const cate_hats = document.querySelector("#cate-hats")
const cate_bags = document.querySelector("#cate-bags")
category.forEach(items=>{
    console.log(items);
    items.addEventListener("click",function(){
        // if(items.addEventListener("mouseover",function() {
            
        //     items.style.background = "#FF8F00";
        // })){
        //     console.log("mouserover");
        // } if(items.addEventListener("mouseleave",function() {
            
        //     items.style.background = "#fff";
        // })){
        //     console.log ("mouserleave")  
        // }
        console.log(items.innerText);
        if(items.innerText == "Clothes") {
            // clothes.style.display = "block";
            // hats.style.display = "none";
            // bags.style.display = "none";
            // cate_clothes.style.background = "#FF8F00";
            // cate_shoes.style.background = "#fff";
            // cate_hats.style.background = "#fff";
            // cate_bags.style.background = "#fff";
            console.log("clothes");
        } else if(items.innerText == "Shoes") {
            shoes.style.display = "block";
            clothes.style.display = "none";
            hats.style.display = "none";
            bags.style.display = "none";
            cate_shoes.style.background = "#FF8F00";
            cate_clothes.style.background = "#fff";
            cate_hats.style.background = "#fff";
            cate_bags.style.background = "#fff";
        } else if(items.innerText == "Hats") {
            hats.style.display = "block";
            shoes.style.display = "none";
            clothes.style.display = "none";
            bags.style.display = "none";
            cate_hats.style.background = "#FF8F00";
            cate_clothes.style.background = "#fff";
            cate_shoes.style.background = "#fff";
            cate_bags.style.background = "#fff";
        } else if(items.innerText == "Bags") {
            bags.style.display = "block";
            shoes.style.display = "none";
            clothes.style.display = "none";
            hats.style.display = "none";
            cate_bags.style.background = "#FF8F00";
            cate_clothes.style.background = "#fff";
            cate_hats.style.background = "#fff";
            cate_shoes.style.background = "#fff";
        }
    })
})
category.forEach(items=>{
    console.log(items);
})