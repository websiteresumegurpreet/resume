var img = document.getElementById("img")
var img1 = document.getElementById("small-img-div")

var elem1 = document.querySelector("#upper")
var elemImage = document.querySelector("#upper img")

var h = document.querySelector("#h")
var ht = document.querySelector("#ht")
var he = document.querySelector("#he")
var f = document.querySelector("#f")
var s = document.querySelector("#h5")



elem1.addEventListener("mousemove", function (dets) {
    elemImage.style.left = dets.x + "px"
    elemImage.style.top = dets.y + "px"
});


elem1.addEventListener("mouseenter", function (dets) {
    elemImage.style.opacity = 1


});
elem1.addEventListener("mouseleave", function (dets) {
    elemImage.style.opacity = 0


});

var tl = gsap.timeline()

tl.to("#main", {

    y: "100vh",
    scale: 0.6,
    duration: 0


})


tl.to("#main", {

    y: "30vh",
    duration: 1,
    delay: 1

})

tl.to("#main", {
    y: "0vh",
    rotate: 360,
    scale: 1,
    duration: 0.7


});



img.addEventListener("click", function () {

    img.style.backgroundColor = "tranparent"









    setInterval(function () {

        img1.style.backgroundImage = "url('woman.jpg')";
        h.style.color = "yellow";
        ht.style.color = "yellow";
        he.style.color = "yellow";
        f.style.color = "yellow";
        s.style.color = "white";


    }, 2000);

    setInterval(function () {

        img1.style.backgroundImage = "url(https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)";

        h.style.color = "white";
        ht.style.color = "blue";
        he.style.color = "green";
        f.style.color = "purple";
        s.style.color = "red";




    }, 6000);




});
