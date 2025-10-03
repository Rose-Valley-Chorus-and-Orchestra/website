// ===== FUNCTIONS (defined globally) =====
function showLoginPopup() {
    Swal.fire({
        title: 'Login',
        html: `
            <input type="text" id="email" class="swal2-input" placeholder="Email Address">
            <input type="password" id="password" class="swal2-input" placeholder="Password">
        `,
        confirmButtonText: 'Log in',
        focusConfirm: false,
        preConfirm: () => {
            const popup = Swal.getPopup();
            const email = popup.querySelector('#email').value.trim();
            const password = popup.querySelector('#password').value.trim();

            if (!email || !password) {
                Swal.showValidationMessage('Please enter both email and password');
                return false;
            }
            return { email, password };
        }
    }).then((result) => {
        if (result.isConfirmed && result.value) {
            const params = new URLSearchParams();
            params.append('action', 'login');
            params.append('email', result.value.email);
            params.append('password', result.value.password);
            params.append('csrf_token', window.csrfToken);

            fetch("api.php", {
                method: "POST",
                body: params
            })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Log In Successful');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: data.message || 'Invalid credentials'
                    });
                }
            })
            .catch(err => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Could not reach server. Try again later.'
                });
                console.error(err);
            });
        }
    });
}

document.addEventListener("DOMContentLoaded", function() {
    // Scroll fade-in effect
    const faders = document.querySelectorAll('.fade-in-up');
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if(entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    faders.forEach(function(fader){ observer.observe(fader); });

    // Login button
    var loginBtn = document.getElementById('loginBtn');
    if(loginBtn) {
        loginBtn.addEventListener('click', showLoginPopup);
    }
});
