// Load header dynamically
async function loadHeader() {
  const headerHtml = await fetch('/components/header.html').then(r => r.text());
  document.getElementById('headerContainer').innerHTML = headerHtml;

  // Now that header is in DOM, attach nav listeners
  document.querySelectorAll('[data-page]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const page = link.dataset.page;

      // Update URL with hash
      location.hash = page;

      // Load content
      loadPageContent(page);
    });
  });
}

// Load footer dynamically
async function loadFooter() {
  const footerHtml = await fetch('/components/footer.html').then(r => r.text());
  document.getElementById('footerContainer').innerHTML = footerHtml;
}

// Load a page fragment into #content
function loadPageContent(page) {
  fetch(`/${page}.html`)
    .then(r => {
      if (!r.ok) throw new Error(`${page}.html not found`);
      return r.text();
    })
    .then(html => {
      document.getElementById('content').innerHTML = html;
    })
    .catch(err => {
      document.getElementById('content').innerHTML =
        `<p class="text-danger">${err.message}</p>`;
    });
}

// Handle hash changes (back/forward navigation included)
window.addEventListener('hashchange', () => {
  const page = location.hash.replace('#', '') || 'home';
  loadPageContent(page);
});

// Initialize app
document.addEventListener('DOMContentLoaded', async () => {
  await loadHeader();
  await loadFooter();

  // Load page based on hash, default to home
  const page = location.hash.replace('#', '') || 'home';
  loadPageContent(page);
});
