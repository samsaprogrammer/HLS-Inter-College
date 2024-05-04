//Add hovered class to selsect list item

let list = document.querySelectorAll(".das_navigation li");

function activeLink(){
    list.forEach(item=>{
        item.classList.remove("hovered");
    })
    this.classList.add("hovered");
}

list.forEach(item => item.addEventListener("mouseover", activeLink));


//Menu toggle sectiojn start

let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".das_navigation");
let main = document.querySelector(".main_content");

toggle.onclick = function (){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};