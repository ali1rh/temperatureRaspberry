// var settings = {
//   "method": "GET",
//   "timeout": 0,
//   "url": "https://rezajax.ir/zahra/getTemp.php",
//   "method": "GET",
//   "headers": {
//     "accept": "application/json",
//     "Access-Control-Allow-Origin": "*",
//     // "Connection": "Keep-Alive",
//     "Content-Type": "application/json",
//     // "Content-Length": "25",
//     // "Date": "Sat, 14 May 2022 07:50:21 GMT",
//   }
// }

// $.ajax(settings).done(function (response) {
//   console.log(response);

// });

// var xhr = new XMLHttpRequest();
// xhr.open("GET", "hhttps://rezajax.ir/zahra/getTemp.php", true);
// xhr.onload = function () {
//     console.log(xhr.responseText);
// };
// xhr.send();

// fetch("https://rezajax.ir/zahra/getTemp.php").then(function (response) {
//     return response.json();
// }).then(function (json) {
//     console.log(json);
// });







// var settings = {
//   "url": "https://iloc.myiloc.com/api/login",
//   "method": "POST",
//   "timeout": 0,
//   "headers": {
//     "Content-Type": "application/json",
//     "Accept": "application/json"
//   },
//   "data": JSON.stringify({
//     "username": "ali1rh",
//     "password": "123"
//   }),
// };

// var ddd = $.ajax(settings).done(function (response) {
//   console.log(response);
// });
// console.log(ddd)





var settings = {
  "url": "https://laravel.rezajax.ir/api/temp",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
  $('.textTemp').html('دما ' + response.temperature)
  console.log(response);
});

