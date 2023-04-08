// scroll

window.onscroll = function () {
    scrollFunction();
};
function scrollFunction() {

    if (
        document.body.scrollTop > 600 ||
        document.documentElement.scrollTop > 600
    ) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }

    if (document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200)
    { 
        document.querySelector(".header-content").style.backgroundColor = "#fff";
        document.querySelectorAll(".header-nav .nav-opt a").forEach((item)=> {
            item.style.color = "#000";
        })
        document.querySelector(".header-content").style.height = "60px";
    } else {
        document.querySelector(".header-content").style.backgroundColor = "transparent";
        document.querySelectorAll(".header-nav .nav-opt a").forEach((item)=> {
            item.style.color = "#fff";
        })
        document.querySelector(".header-content").style.height = "85px";
    }
}

document.getElementById("myBtn").addEventListener("click", function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});