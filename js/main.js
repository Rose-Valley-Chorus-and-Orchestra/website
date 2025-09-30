// main.js

// Load header and attach navigation listeners
async function loadHeader() {
    const headerHtml = await fetch('/components/header.html').then(r => r.text());
    document.getElementById('headerContainer').innerHTML = headerHtml;

    // Attach click listeners to all links with data-page
    document.querySelectorAll('[data-page]').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const page = link.dataset.page;
            loadPageContent(page);
            window.location.hash = page; // update URL hash
        });
    });
}

// Load footer
async function loadFooter() {
    const footerHtml = await fetch('/components/footer.html').then(r => r.text());
    document.getElementById('footerContainer').innerHTML = footerHtml;
}

// Load a fragment into main content
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

// Listen to hash changes (back/forward navigation)
window.addEventListener('hashchange', () => {
    const page = window.location.hash.replace('#', '') || 'home';
    loadPageContent(page);
});

// Initialize SPA
document.addEventListener('DOMContentLoaded', async () => {
    await loadHeader();
    await loadFooter();

    // Load initial page based on hash or default to home
    const initialPage = window.location.hash.replace('#', '') || 'home';
    loadPageContent(initialPage);
});
