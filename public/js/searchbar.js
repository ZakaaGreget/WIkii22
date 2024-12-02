document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchBar");
    const basePath = "http://localhost/Wikii22/WIKIIFIX/public/tips";
    searchInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Cegah submit default
            const searchValue = searchInput.value.trim(); // Ambil nilai input
            if (searchValue) {
                // Gunakan PHP untuk menghasilkan basePath secara dinamis
                const basePath = "http://localhost/Wikii22/WIKIIFIX/public/tips";
                const queryString = `?nama=${encodeURIComponent(searchValue)}`;
                window.location.href = 'http://localhost/Wikii22/WIKIIFIX/public' + queryString; // Redirect
            } else {
                alert("Search bar tidak boleh kosong!");
            }   
        }
    });
});
