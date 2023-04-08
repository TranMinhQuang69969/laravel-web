// const price = document.querySelector('.price-a');
// console.log(price.innerHTML);
// $(document).ready(function(){
//     function tinhtien(){
//         $(".price-a").each(function(){
//                 var tong = this.find('.price-a').val();
//                 console.log(tong)
//         })
//     }
// })

function tinhtien() {

    const prices = document.querySelectorAll('.price-a');
    const totalprice = document.querySelector('.totalprice');
    console.log(totalprice)


    var total = 0;
    
    prices.forEach((price) => {
        var gia =  price.innerHTML;
        console.log(gia);
        total = total + Number(gia);
        // console.log(gia)
    })
    totalprice.value = total + " " +"đ";


    
    

}
tinhtien()