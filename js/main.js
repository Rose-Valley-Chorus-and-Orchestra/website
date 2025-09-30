async function loadHeader() {
  const headerHtml = await fetch('/components/header.html').then(r => r.text());
  document.getElementById('headerContainer').innerHTML = headerHtml;

  // attach nav listeners
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
  const footerHtml = await fetch('/components/footer.html').then(r => r.text());
  document.getElementById('footerContainer').innerHTML = footerHtml;
}

function loadPageContent(page) {
  fetch(`/${page}.html`)
    .then(r => {
      if (!r.ok) throw new Error(`${page}.html not found`);
      return r.text();
    })
    .then(html => {
      const mainContent = document.getElementById('content');
      mainContent.innerHTML = html;

      // --- NEW: Reset carousel to first slide if it exists ---
      const carouselEl = mainContent.querySelector('.carousel');
      if (carouselEl) {
        const carousel = new bootstrap.Carousel(carouselEl);
        carousel.to(0); // reset to first slide
      }
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

// initialize SPA
document.addEventListener('DOMContentLoaded', async () => {
  await loadHeader();
  await loadFooter();
  loadPageContent('home'); // default page
});
