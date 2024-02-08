
let menu = document.querySelector("#menubar");
let pages = document.querySelectorAll("#pages li");

let menubar = true;


function Rnavbar() {

    if (menubar === true) {
        menu.style.transform = "translateX(0%)";
    }
    else {
        menu.style.transform = "translateX(-110%)";
    }
    menubar = !menubar;
}



pages.forEach((items) => {

    items.addEventListener('click', () => {

        document.querySelector(".active").classList.remove("active");

        items.className += " active";
    })

})




// ------------------ header slider ----------------


const hbox = document.querySelectorAll(".imgsection .imgbox .box .image");
const container = document.querySelector(".imgsection .imgbox");
let currentindex = 0;

document.querySelector('#rightbtn').addEventListener('click', () => {

    if (currentindex === 0) {
        currentindex = hbox.length - 1;
        setslider(currentindex);
    }
    else {
        setslider(currentindex -= 1);
    }
});

document.querySelector('#leftbtn').addEventListener('click', () => {

    if (currentindex === hbox.length - 1) {
        currentindex = 0;
        setslider(currentindex);
    }
    else {
        setslider(currentindex += 1);
    }
});

function setslider(index) {

    document.querySelector(".imgsection .imgbox .box .activeimg").classList.remove("activeimg");
    hbox[index].className += " activeimg";

    const offset = -currentindex * 55 + '%';
    container.style.transform = 'translateX(' + offset + ')';

    setInterval(() => {
        const activebtn = document.querySelector(".imgsection .imgbox .box .activeimg img").getAttribute('src');
        const hbackground = document.querySelector("header");
        hbackground.style.backgroundImage = `url('${activebtn}')`;
    }, 1000);

}

setInterval(() => {
    if (currentindex === hbox.length - 1) {
        currentindex = 0;
        setslider(currentindex);
    }
    else {
        setslider(currentindex += 1);
    }
}, 3000);














// fetch("https://fakestoreapi.com/products")
//   .then((res) => res.json())
//   .then((json) => console.log(json));


fetch("https://fakestoreapi.com/products")
    .then((data) => {

        return data.json();
    })
    .then((data) => {

        

        const firstproducts = document.querySelector('.products-1 .items');
        const secondproducts = document.querySelector('.products-2 .items');


        data.forEach((obj, i) => {

            // console.log(obj);

            if (obj.category === 'electronics') {

                firstproducts.innerHTML += `<div class="products">
            <div class="image">
            <img src="${obj?.image}" alt="">
            </div>
                <h4>${(obj?.title.length > 40) ? obj?.title.slice(0, 40) + "..." : obj?.title}</h4>
                <p>${obj?.rating?.rate}</p>
                <h5>$ ${obj?.price},-</h5>
                <a href="">Shop now <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>`;
            }

            else {
                secondproducts.innerHTML += `<div class="products">
            <div class="image">
            <img src="${obj?.image}" alt="">
            </div>
                <h4>${(obj?.title.length > 40) ? obj?.title.slice(0, 40) + "..." : obj?.title}</h4>
                <p>${obj?.rating?.rate}</p>
                <h5>$ ${obj?.price},-</h5>
                <a href="">Shop now <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>`;
            }



        })


    })
    .catch((error) => "error found");





let currentslider = 0;

document.querySelector("#features .icons-1 .fa-angle-left").addEventListener("click" , ()=>{
    currentslider = Math.max(currentslider - 1, 0);
    updateSlider();
})


document.querySelector("#features .icons-2 .fa-angle-left").addEventListener("click" , ()=>{
    currentslider = Math.max(currentslider - 1, 0);
    updateSlider2();
})



document.querySelector("#features .icons-1 .fa-angle-right").addEventListener("click" , ()=>{

    currentslider = Math.min(currentslider + 1, 2);
    updateSlider();
})

document.querySelector("#features .icons-2 .fa-angle-right").addEventListener("click" , ()=>{

    currentslider = Math.min(currentslider + 1, 10);
    updateSlider2();
})



function updateSlider() {
    const newPosition = -currentslider * 20 + '%';
    document.querySelector(".products-1 .items").style.transform = 'translateX(' + newPosition + ')';
}

function updateSlider2() {
    const newPosition = -currentslider * 19.2 + '%';
    document.querySelector(".products-2 .items").style.transform = 'translateX(' + newPosition + ')';
}







saleitems = document.querySelectorAll("#sale .salebox .box-1 ul li");

saleitems.forEach((item , i) =>{
    
    item.addEventListener("click" , function(){
        
        document.querySelector(".saleactive").classList.remove("saleactive");
        this.className += " saleactive";


        document.querySelectorAll("#sale .salebox .box-2 .item").forEach((temp) =>{

            temp.style.transform = `translateY(-${i*100}%)`;
        })
    })
    
})



