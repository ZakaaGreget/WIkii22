// document.addEventListener("DOMContentLoaded", function () {
//     const searchForm = document.getElementById("searchForm");
//     const searchInput = document.getElementById("searchBar");
//     const basePath = "http://localhost/Wikii22/WIKIIFIX/public/tips";

//     if (searchForm && searchInput) {
//         console.log("Form dan input ditemukan!");

//         searchForm.addEventListener("submit", function (event) {
//             event.preventDefault(); // Cegah pengiriman form bawaan
//             console.log("Form di-submit");

//             const searchValue = searchInput.value.trim();
//             console.log("Nilai input: ", searchValue);

//             if (searchValue) {
//                 const queryString = `?nama=${encodeURIComponent(searchValue)}`;
//                 console.log("Redirecting ke: ", basePath + queryString);
//                 window.location.href = basePath + queryString; // Redirect ke URL
//             } else {
//                 alert("Search bar tidak boleh kosong ya");
//             }
//         });
//     } else {
//         console.error("Form atau input tidak ditemukan!");
//     }
// });
