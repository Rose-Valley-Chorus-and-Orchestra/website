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
            document.getElementById("signupLink").addEventListener("click", (e) => {
                e.preventDefault();
                Swal.close();
                showSignupPopup();
            });
        },
        preConfirm: () => {
            const email = Swal.getPopup().querySelector('#email').value;
            const password = Swal.getPopup().querySelector('#password').value;

            if (!email || !password) {
                Swal.showValidationMessage(`Please enter both email and password`);
            }
            return { email, password };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Use URLSearchParams for PHP 5.3 compatible form POST
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
                    Swal.fire(`Log In Successful`);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Login Failed",
                        text: data.message || "Invalid credentials"
                    });
                }
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
        customClass: {
            popup: 'signup-popup'
        },
        confirmButtonText: 'Create Account',
        focusConfirm: false,
        preConfirm: () => {
            const fName = document.getElementById('fname').value.trim();
            const lName = document.getElementById('lname').value.trim();
            const email = document.getElementById('email').value.trim();
            const emailConfirm = document.getElementById('emailConfirm').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!fName || !lName || !email || !emailConfirm || !password) {
                Swal.showValidationMessage(`All fields are required`);
            } else if (email !== emailConfirm) {
                Swal.showValidationMessage(`Emails do not match`);
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                Swal.showValidationMessage(`Invalid email format`);
            } else if (password.length < 12) {
                Swal.showValidationMessage(`Password must be at least 12 characters`);
            }

            return { fName, lName, email, emailConfirm, password };
        }
    }).then((result) => {
        if (result.isConfirmed) {
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
                        icon: "success",
                        title: "Account Created",
                        text: "You can now log in with your credentials."
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Sign Up Failed",
                        text: data.message || "Something went wrong"
                    });
                }
            });
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    // Scroll fade-in effect
    const faders = document.querySelectorAll('.fade-in-up');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    faders.forEach(fader => observer.observe(fader));

    // Login button
    const loginBtn = document.getElementById('loginBtn');
    if (loginBtn) {
        loginBtn.addEventListener("click", showLoginPopup);
    }
});



/*
const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(com|org)$/;
if (!emailRegex.test(email)) {
    swal.showValidationError('Email must end in .mil or .gov');
    return false;
}
*/