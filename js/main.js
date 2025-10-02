// ===== FUNCTIONS (defined globally) =====
function showLoginPopup() {
    Swal.fire({
        title: 'Login',
        html: `
            <input type="text" id="email" class="swal2-input" placeholder="Email Address">
            <input type="password" id="password" class="swal2-input" placeholder="Password">
            <p style="margin-top:10px;font-size:0.9em;">
                New user? <a href="#" id="signupLink">Sign up here</a>
            </p>
        `,
        confirmButtonText: 'Log in',
        focusConfirm: false,
        didOpen: () => {
            document.getElementById("signupLink").addEventListener("click", function(e) {
                e.preventDefault();
                Swal.close();
                showSignupPopup();
            });
        },
        preConfirm: () => {
            const email = Swal.getPopup().querySelector('#email').value.trim();
            const password = Swal.getPopup().querySelector('#password').value.trim();

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

function showSignupPopup() {
    Swal.fire({
        title: 'Sign Up',
        html: `
            <input type="text" id="fname" class="swal2-input" placeholder="First Name">
            <input type="text" id="lname" class="swal2-input" placeholder="Last Name">
            <input type="email" id="email" class="swal2-input" placeholder="Email">
            <input type="email" id="emailConfirm" class="swal2-input" placeholder="Confirm Email">
            <input type="password" id="password" class="swal2-input" placeholder="Password">
        `,
        customClass: { popup: 'signup-popup' },
        confirmButtonText: 'Create Account',
        focusConfirm: false,
        preConfirm: () => {
            const fName = document.getElementById('fname').value.trim();
            const lName = document.getElementById('lname').value.trim();
            const email = document.getElementById('email').value.trim();
            const emailConfirm = document.getElementById('emailConfirm').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!fName || !lName || !email || !emailConfirm || !password) {
                Swal.showValidationMessage('All fields are required');
                return false;
            }
            if (email !== emailConfirm) {
                Swal.showValidationMessage('Emails do not match');
                return false;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                Swal.showValidationMessage('Invalid email format');
                return false;
            }
            if (password.length < 12) {
                Swal.showValidationMessage('Password must be at least 12 characters');
                return false;
            }

            return { fName, lName, email, emailConfirm, password };
        }
    }).then((result) => {
        if (result.isConfirmed && result.value) {
            const params = new URLSearchParams();
            params.append('action', 'signup');
            params.append('fname', result.value.fName);
            params.append('lname', result.value.lName);
            params.append('email', result.value.email);
            params.append('emailConfirm', result.value.emailConfirm);
            params.append('password', result.value.password);
            params.append('csrf_token', window.csrfToken);

            fetch("api.php", {
                method: "POST",
                body: params
            })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Account Created',
                        text: 'You can now log in with your credentials.'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Sign Up Failed',
                        text: data.message || 'Something went wrong'
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
