
document.getElementById('search-button').addEventListener('click', function () {
    search();
});

function search() {
    var query = document.getElementById('search-input').value;

    // Lakukan permintaan AJAX ke server untuk melakukan pencarian
    fetch(`/search?query=${query}`)
        .then(response => response.json())
        .then(data => {
            displaySearchResults(data);
        })
        .catch(error => console.error('Error:', error));
}

function displaySearchResults(results) {
    var searchResultsContainer = document.getElementById('search-results');
    searchResultsContainer.innerHTML = '';

    if (results.length > 0) {
        var table = '<table class="table align-items-center mb-0">'; // Membuat tabel hasil pencarian
        table += '<thead> <!-- ... Header tabel ... --> </thead>'; // Tambahkan header sesuai dengan tabel Anda

        results.forEach(function (result) {
            table += '<tr>'; // Membuat baris baru untuk setiap hasil
            table += '<td style="text-align: center;">' + result.id + '</td>'; // Kolom ID
            table += '<td style="text-align: center;">' + result.isbn + '</td>'; // Kolom ISBN
            table += '<td style="text-align: center;">' + result.author + '</td>'; // Kolom Author
            table += '<td style="text-align: center;">' + result.title + '</td>'; // Kolom Title
            table += '<td style="text-align: center;">' + result.price + '</td>'; // Kolom Price
            table += '<td style="text-align: center;">'; // Kolom Action
            table += '<a class="badge badge-sm bg-gradient-success">Add to Cart</a>';
            table += '<a class="badge badge-sm bg-gradient-secondary">Details</a>';
            table += '</td>';
            table += '</tr>';
        });

        table += '</table>'; // Menutup tabel
        searchResultsContainer.innerHTML = table; // Memasukkan tabel hasil pencarian ke dalam tampilan
    } else {
        searchResultsContainer.innerHTML = 'No results found.'; // Tampilkan pesan jika tidak ada hasil
    }
}
