// Ambil elemen input search-box
const searchInput = document.getElementById('searchInput');

// Tambahkan event listener ketika user mengetik pada input search-box
searchInput.addEventListener('keyup', function() {
  // Ambil nilai yang dimasukkan pada input search-box
  const searchText = searchInput.value.toLowerCase();

  // Ambil seluruh elemen card yang ada
  const cards = document.querySelectorAll('.filtered-item');

  // Looping untuk setiap card
  cards.forEach(function(card) {
    // Ambil nilai nama hewan dari setiap card
    const hewanName = card.querySelector('.card-title').textContent.toLowerCase();
    const hewanDes = card.querySelector('.card-text').textContent.toLowerCase();
    
    // Jika nilai dari input search-box cocok dengan nilai nama hewan pada card, tampilkan card tersebut
    if (hewanName.indexOf(searchText) != -1 || hewanDes.indexOf(searchText) != -1) {
      card.style.display = 'block';
    }
    // Jika tidak cocok, sembunyikan card tersebut
    else {
      card.style.display = 'none';
    }
  });
}); 