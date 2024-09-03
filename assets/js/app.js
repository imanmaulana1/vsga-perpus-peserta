/* Konfirmasi Sebelum Hapus */
var elems = document.getElementsByClassName('confirm');
var confirmIt = function (e) {
  if (!confirm('Apakah yakin akan dihapus?')) e.preventDefault();
};

for (let i = 0, l = elems.length; i < l; i++) {
  elems[i].addEventListener('click', confirmIt, false);
}

const queryString = window.location.search;

const pageParam = new URLSearchParams(queryString).get('p');

const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach((link) => {
  const href = new URL(link.href);
  const hrefParam = new URLSearchParams(href.search).get('p');

  if (hrefParam === pageParam || (pageParam === null && hrefParam === null)) {
    link.classList.add('active');
  } else {
    link.classList.remove('active');
  }
});
