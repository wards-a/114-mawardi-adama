document.addEventListener("DOMContentLoaded", () => {
    const article = document.getElementById("description");
    const btnExpand = document.getElementById("btnExpandDescription");
    
    btnExpand.addEventListener('click', () => {
        article.classList.toggle('line-clamp-6');
        if (article.classList.contains('line-clamp-6')) {
            btnExpand.textContent = "Baca Selengkapnya";
        } else {
            btnExpand.textContent = "Tutup Deskripsi";
        }
    });
});