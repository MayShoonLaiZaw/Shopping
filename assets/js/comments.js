let comments_form = document.querySelector("#comments-form");
comments_form.addEventListener("submit",function(e) {
    e.preventDefault();
    let user_image = this.getAttribute('data-image');
    let username= this.getAttribute('data-user');
    let comments = document.querySelector("#comments").value;
    let product_id = this.getAttribute('data-id');

    let url= './addcomments_api.php';
    let data= {
        user_image: user_image,
        username: username,
        product_id: product_id,
        comments: comments
    };
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(res) {
            console.log(res);
            showComments();
        },
        error: function(err) {
            console.error(err);
        }
    })
})

function showComments(){
    let product_id = comments_form.getAttribute('data-id');
    let url= './showcomments_api.php';
    let data= {
        product_id: product_id,
    };
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(res) {
            
            console.log(res);
            renderComment(res.data)
        },
        error: function(err) {
            console.error(err);
        }
    })
}
showComments();
function renderComment(res){
    let reviews = document.querySelector("#reviews");
    reviews.innerHTML = "";
    res.forEach(item => {
        reviews.innerHTML += `
        <div class="customer-reviews-list flex-container">
            <div class="customer-reviews-photo">
                <div class="customer-reviews-img">
                    <img src="assets/images/${item.user_image}" alt="customer-photo">
                </div>
            </div>
            <div class="customer-reviews-para">
                <h4>${item.username}</h4>
                <p>${item.comments}</p>
                <div class="customer-reviews-date">
                    <p>1 day ago</p>
                </div>
            </div>
        </div>
        `
    });
}