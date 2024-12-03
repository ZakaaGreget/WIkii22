document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchBar");

    searchInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Cegah aksi default
            console.log("Tombol Enter ditekan"); // Menambahkan log untuk memastikan event dipicu

            const searchValue = searchInput.value.trim();
            console.log("Nilai pencarian: ", searchValue); // Log nilai pencarian

            if (searchValue) {
                const queryString = `?nama=${encodeURIComponent(searchValue)}`;
                window.location.href = basePath + queryString;
            } else {
                alert("Search bar tidak boleh kosong!");
            }
        }
    });
});
