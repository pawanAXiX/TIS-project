document.getElementById("share-dest").addEventListener("click", function () {
    console.log("running");
    if (navigator.share) { // Check if the share API is supported
        navigator.share({
            title: document.title,
            url: window.location.href
        })
            .then(function () {
                console.log("Successfully shared.");
            })
            .catch(function (error) {
                console.error("Error sharing:", error);
            });
    } else {
        console.log("Share API is not supported.");
    }
});