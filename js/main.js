// Load header dynamically
async function loadHeader() {
  const headerHtml = await fetch('/components/header.html').then(r => r.text());
  document.getElementById('headerContainer').innerHTML = headerHtml;

  // Attach click listeners to nav links
  document.querySelectorAll('[data-page]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const page = link.dataset.page;
      loadPageContent(page);
      history.pushState({ page }, '', `${page}.html`);
    });
  });
}

// Load footer dynamically
async function loadFooter() {
  const footerHtml = await fetch('/components/footer.html').then(r => r.text());
  document.getElementById('footerContainer').innerHTML = footerHtml;
}

// Load page content dynamically
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

// Handle browser back/forward buttons
window.addEventListener('popstate', e => {
  const page = e.state?.page || 'home';
  loadPageContent(page);
});

// Initialize SPA
document.addEventListener('DOMContentLoaded', async () => {
  await loadHeader();
  await loadFooter();
  loadPageContent('home'); // default page
});
