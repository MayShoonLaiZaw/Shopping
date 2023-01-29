let comments_form = document.querySelector("#comments-form");
comments_form.addEventListener("submit",function(e) {
    e.preventDefault();
    let comments = document.querySelector("#comments").value;
    let product_id = this.getAttribute('data-id');
    let username= this.getAttribute('data-user');
    let user_image = this.getAttribute('data-image');
    console.log(comments,product_id,username,user_image);

    $.ajax({
        type: "Post",
        url: '/productsPage.php',
        data: {

        },
        async: false,
        success: function($res) {
            response = {
                "status": res.status,
                "message": res.message,
            }
        },
        error: function($err) {
            console.error($err);
        }
    })
})