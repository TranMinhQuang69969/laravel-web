const inputSearch = document.querySelector('.input-search');
const autoBox = document.querySelector('.autobox')
// console.log(inputSearch)

inputSearch.onkeyup = (e)=> {        // Bắt sự kiện khi thực hiện 
    // console.log(e.target.value)
    let checkData = e.target.value;
    let dataArray = []
    if (checkData) {
        dataArray = recomentlist.filter((data) => {
            return data.toLocaleLowerCase().startsWith(checkData.toLocaleLowerCase())  // toLocaleLowerCase: chuyển đổi các kiểu chữ về chữ thường
        });
        // console.log(dataArray);
        dataArray = dataArray.map((data) => {
            return data = '<li>'+data+'</li>'
        });
        autoBox.classList.add('active')  // 
        // console.log(dataArray);
        showAdress(dataArray)

        let liItem = autoBox.querySelectorAll("li")        // click lấy ra giá trị
        for (let i=0; i< liItem.length; i++) {
            liItem[i].addEventListener("click", function(){
                inputSearch.value = liItem[i].innerHTML
                autoBox.classList.remove('active')
            })
        }
    } else {
        autoBox.classList.remove('active')
    }
    
}
function showAdress (list) {
    let listData;
    if(!list.length) {
        listData = '<li>'+inputSearch.value+'</li>';
    } else {
        listData = list.join('')
    }
    autoBox.innerHTML = listData
}

let recomentlist = [
    "Hà Nội",
    "Hải Phòng",
    "Hải Dương",
    "Hà Tỉnh",
    "Hà Nam",
    "Hồ Chí Minh",
    "Nghệ An", 
    "Phú Quốc",
    "Phú Thọ",
    "Nha Trang",
    "Quảng Bình",
    "Quảng Trị",
    "Quảng Nam",
    "Đà Nẵng", 
    "Đà Lạt",
];

// ---------------NUMBER-BOX-------------------------
const inputNumber = document.querySelector(".number-people")
const numberBox = document.querySelector(".number-box")
const numberClose = document.querySelector(".number-box-close")

inputNumber.addEventListener("click", function(){
    numberBox.classList.add("active")
});

numberClose.addEventListener("click", function(){
    numberBox.classList.remove("active")
});

const nguoilonPlus = document.querySelector(".nguoilonPlus")
const nguoilonMinus = document.querySelector(".nguoilonMinus")
let nguoilonvalue = document.querySelector(".nguoilon span")

let i = 0;
nguoilonPlus.addEventListener("click", function(){
    i = i + 1;
    nguoilonvalue.innerHTML = i
    totalNumber()
})

nguoilonMinus.addEventListener("click", function(){
    if ( i<= 0 ){i=0}
    else {
        i = i-1;
        nguoilonvalue.innerHTML = i;
        totalNumber()
    }
})
// treem
const treemPlus = document.querySelector(".treemPlus")
const treemMinus = document.querySelector(".treemMinus")
let treemvalue = document.querySelector(".treem span")

let u = 0;
treemPlus.addEventListener("click", function(){
    u = u + 1;
    treemvalue.innerHTML = u
    totalNumber()
})

treemMinus.addEventListener("click", function(){
    if ( u<= 0 ){u=0}
    else {
        u = u-1;
        treemvalue.innerHTML = u;
        totalNumber()
    }
})

// sosinh
const sosinhPlus = document.querySelector(".sosinhPlus")
const sosinhMinus = document.querySelector(".sosinhMinus")
let sosinhvalue = document.querySelector(".sosinh span")

let s = 0;
sosinhPlus.addEventListener("click", function(){
    s = s + 1;
    sosinhvalue.innerHTML = s
    totalNumber()
})

sosinhMinus.addEventListener("click", function(){
    if ( s<= 0 ){s=0}
    else {
        s = s-1;
        sosinhvalue.innerHTML = s;
        totalNumber()
    }
})

function totalNumber(){
  let  total = i + u + s
  console.log(total)
  inputNumber.value  = total + " " + " Người";
  console.log(inputNumber)

}


// SCROLL
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