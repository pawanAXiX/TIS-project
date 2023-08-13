const likeBtns = document.querySelectorAll(".like-btn");

likeBtns.forEach(function (likeBtn) {
    // 
    var like_status = likeBtn.getAttribute("data_liked");
    if (like_status=="yes") {
        likeBtn.style.backgroundColor="#f88932";
    }


    // if like button is clicked, sending the ajax request 
    likeBtn.addEventListener("click", function () {
        liked_dest_type = likeBtn.getAttribute("data-destination-type");
        liked_dest_id = likeBtn.getAttribute("data-destination-id");
        var like_form_data = new FormData();
        like_form_data.append("liked-dest-id", liked_dest_id);
        like_form_data.append("liked-dest-type", liked_dest_type);


        var like_ajax_request = new XMLHttpRequest();
        like_ajax_request.open("POST", "user/ajax_processing/update_like.php");
        like_ajax_request.send(like_form_data);


        like_ajax_request.onreadystatechange = function () {
            if (like_ajax_request.readyState == 4 && like_ajax_request.status == 200) {
                console.log(like_ajax_request.responseText);
                if (like_ajax_request.responseText=="liked") {
                    likeBtn.style.backgroundColor="#f88932";
                    likeBtn.setAttribute("data-liked","yes");
                }
                else if(like_ajax_request.responseText=="disliked"){
                    likeBtn.style.backgroundColor="white";
                    likeBtn.setAttribute("data-liked","no");
                }
            }
        }
    });
});


