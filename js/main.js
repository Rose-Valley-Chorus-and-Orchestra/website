async function loadHeader() {
  const headerHtml = await fetch('/header.html').then(r => r.text());
  document.getElementById('headerContainer').innerHTML = headerHtml;

  // now that header is in DOM, attach nav listeners
  document.querySelectorAll('[data-page]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const page = link.dataset.page;
      loadPageContent(page);
      history.pushState({ page }, '', `${page}.html`);
    });
  });
}

async function loadFooter() {
  const footerHtml = await fetch('/footer.html').then(r => r.text());
  document.getElementById('footerContainer').innerHTML = footerHtml;
}

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

// handle back/forward buttons
window.addEventListener('popstate', e => {
  const page = e.state?.page || 'home';
  loadPageContent(page);
});

// initialize app
document.addEventListener('DOMContentLoaded', async () => {
  await loadHeader();
  await loadFooter();
  loadPageContent('home'); // default page
});
