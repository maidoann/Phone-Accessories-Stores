$(document).ready(function () {

    console.log(searchTerm);

    start();

});


let chooseCateData = [];
let chooseBrandData = [];
let choosePriceData = [];
let pageIndex = 1;
let searchTerm = '';
let selectedValue = 0 ;
// document.addEventListener('DOMContentLoaded', function () {
//     var categoryLinks = document.querySelectorAll('.main-nav a[data-category]');

//     categoryLinks.forEach(function (link) {
//         link.addEventListener('click', function (event) {
//             event.preventDefault();

//             // Lấy giá trị category từ thuộc tính data-category
//             var category = this.getAttribute('data-category');

//             // Chuyển hướng đến trang products với tham số category
//             window.location.href = 'products?keyword=' + category;
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    var categoryLinks = document.querySelectorAll(' a[data-key]');

    categoryLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            // Lấy giá trị category từ thuộc tính data-category
            var category = this.getAttribute('data-key');

            // Chuyển hướng đến trang products với tham số category
            var baseUrl = 'http://127.0.0.1:8000/products'; // Lấy phần cơ bản của URL
            window.location.href = baseUrl + '?keyword=' + category;
        });
    });
});

function handlePageClick(i) {
    pageIndex = i;
    console.log(pageIndex);
    var checkCate = document.getElementsByName('category');
    var tempCate = [];
    var checkBrand = document.getElementsByName('brand');
    var tempBrand = [];
    var urlParams = new URLSearchParams(window.location.search);
    searchTerm = urlParams.get('keyword');
    selectedValue = document.getElementById("sortSelect").value;

    for (var i = 0; i < checkCate.length; i++) {
        if (checkCate[i].checked && !tempCate.includes(checkCate[i].value)) {
            tempCate.push(checkCate[i].value);
        } else {
            tempCate.splice(i, 1);
        }

    }
    for (var i = 0; i < checkBrand.length; i++) {
        if (checkBrand[i].checked && !tempBrand.includes(checkBrand[i].value)) {
            tempBrand.push(checkBrand[i].value);
        } else {
            tempBrand.splice(i, 1);
        }
    }

    chooseCateData = tempCate;
    chooseBrandData = tempBrand;


    console.log(chooseCateData.toString());
    // if(chooseCateData.length < 1 && chooseBrandData.length <1)
    //     phantrang(pageIndex)
    if(chooseCateData.length > 0 || chooseBrandData.length > 0 || choosePriceData.length > 0) {
    getProduct();
    }else phantrang();

}

function Choose() {
    var checkCate = document.getElementsByName('category');
    var tempCate = [];
    var checkBrand = document.getElementsByName('brand');
    var tempBrand = [];
    var checkPrice = document.getElementsByName('price');
    var tempPrice = [];
    selectedValue = document.getElementById("sortSelect").value;
    pageIndex = 1;

    for (var i = 0; i < checkCate.length; i++) {
        if (checkCate[i].checked && tempCate.indexOf(checkCate[i].value) === -1) {
            tempCate.push(checkCate[i].value);
        } else if (!checkCate[i].checked) {
            var index = tempCate.indexOf(checkCate[i].value);
            if (index !== -1) {
                tempCate.splice(index, 1);
            }
        }
    }

    for (var i = 0; i < checkBrand.length; i++) {
        if (checkBrand[i].checked && tempBrand.indexOf(checkBrand[i].value) === -1) {
            tempBrand.push(checkBrand[i].value);
        } else if (!checkBrand[i].checked) {
            var index = tempBrand.indexOf(checkBrand[i].value);
            if (index !== -1) {
                tempBrand.splice(index, 1);
            }
        }
    }

    for (var i = 0; i < checkPrice.length; i++) {
        if (checkPrice[i].checked && tempPrice.indexOf(checkPrice[i].value) === -1) {
            tempPrice.push(checkPrice[i].value);
        } else if (!checkPrice[i].checked) {
            var index = tempPrice.indexOf(checkPrice[i].value);
            if (index !== -1) {
                tempPrice.splice(index, 1);
            }
        }
    }

    chooseCateData = tempCate;
    chooseBrandData = tempBrand;
    if (tempPrice.length > 0) {
        choosePriceData = tempPrice;
    }

    console.log(chooseCateData.toString());

    if (chooseCateData.length > 0 || chooseBrandData.length > 0 || choosePriceData.length > 0) {
        console.log("chooseCateData:", chooseCateData.toString());
        console.log("chooseBrandData:", chooseBrandData.toString());
        console.log("choosePriceData:", choosePriceData.toString());

        // Gọi hàm getProduct để load sản phẩm theo các lựa chọn
        getProduct();
    } else {
        start();
    }
}
// function ChooseBrand() {
//     var checkBrand = document.getElementsByName('brand');
//     var tempBrand = [];
//     for (var i = 0; i < checkBrand.length; i++) {
//         if (checkBrand[i].checked && !tempBrand.includes(checkBrand[i].value)) {
//             tempBrand.push(checkBrand[i].value);
//         } else {
//             tempBrand.splice(i, 1);
//         }
//     }

//     chooseBrandData = tempBrand;
//     console.log(chooseBrandData.toString());
//     if(chooseBrandData.length > 0){
//         getProduct();
//         }else start();



// }

function getProduct() {
    let data = {
        keycate_id: chooseCateData.toString(),
        keybrand_id: chooseBrandData.toString(),
        pricex: choosePriceData.toString(),
        pageIndex: pageIndex.toString(),
        selectedValue: selectedValue.toString(),
    };
    $.ajax({
        async: false,
        url: "productAjax",
        type: 'get',
        // dataType: 'json',
        data: data,
        success: function (data) {
            $('#storess').html(data);
        },
        error: function (err) {
            console.log(err);
        }
    });

}
function start(){
    var urlParams = new URLSearchParams(window.location.search);
    var searchTerm = urlParams.get('keyword');
    // selectedValue = document.getElementById("sortSelect").value;
    if(searchTerm != null ){

        let data = {
            searchTerm: searchTerm.toString(),
            selectedValue:selectedValue.toString(),
        }
        $.ajax({
            async: false,
            url: "productAjaxStart",
            type: 'get',
            data: data,
            success: function (data) {
                $('#storess').html(data);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }else{
        let data = {
            selectedValue:selectedValue.toString(),
        }
        $.ajax({
            async: false,
            url: "productAjaxStart",
            type: 'get',
            // dataType: 'json',
            data: data,
            success: function (data) {
                $('#storess').html(data);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

}

function phantrang(){
    let data = {
        pageIndex: pageIndex,
        searchTerm: searchTerm,
        selectedValue: selectedValue.toString(),
    };
    $.ajax({
        async: false,
        url: "productAjaxPhanTrang",
        type: 'get',
        // dataType: 'json',
        data: data,
        success: function (data) {
            $('#storess').html(data);
        },
        error: function (err) {
            console.log(err);
        }
    });
}


