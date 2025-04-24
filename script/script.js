let dots = document.getElementById("dots");
let moreText = document.getElementById("more");
let btn = document.getElementById("btn");
let blog = document.querySelector(".blog1");

function leesMeer() {
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btn.innerHTML = "Lees meer";
        moreText.style.display = "none";
        blog.style.height = "auto"; // Compress to the original size
    } else {
        dots.style.display = "none";
        btn.innerHTML = "Lees minder";
        moreText.style.display = "inline";
        blog.style.height = "auto"; // Expand the article to show full text
        blog.style.width= "30em"; // Expand the article to show full text

    }
}