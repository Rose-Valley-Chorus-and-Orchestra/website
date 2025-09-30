async function loadHeader() {
  const headerHtml = await fetch('/components/header.html').then(r => r.text());
  document.getElementById('headerContainer').innerHTML = headerHtml;

  document.querySelectorAll('[data-page]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const page = link.dataset.page;
      loadPageContent(page);
      window.location.hash = page; // update URL hash
    });
  });
}

function loadPageContent(page) {
  fetch(`/${page}.html`)
    .then(r => r.text())
    .then(html => document.getElementById('content').innerHTML = html)
    .catch(err => document.getElementById('content').innerHTML = `<p class="text-danger">${err.message}</p>`);
}

// Load correct page on hash change
window.addEventListener('hashchange', () => {
  const page = window.location.hash.replace('#', '') || 'home';
  loadPageContent(page);
});

// Initialize SPA
document.addEventListener('DOMContentLoaded', async () => {
  await loadHeader();
  await loadFooter();
  const initialPage = window.location.hash.replace('#', '') || 'home';
  loadPageContent(initialPage);
});

async function loadFooter() {
  const footerHtml = await fetch('/components/footer.html').then(r => r.text());
  document.getElementById('footerContainer').innerHTML = footerHtml;
}
