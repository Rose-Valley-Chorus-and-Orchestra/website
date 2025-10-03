// ===== FUNCTIONS (defined globally) =====
function showLoginPopup() {
    Swal.fire({
        title: 'Login',
        html: `
            <input type="text" id="email" class="swal2-input" placeholder="Email Address">
            <input type="password" id="password" class="swal2-input" placeholder="Password">
            <p style="margin-top:10px;font-size:0.9em;">
                <a href="#" id="forgotLink">Forgot Password?</a>
            </p>
        `,
        confirmButtonText: 'Log in',
        focusConfirm: false,
        didOpen: () => {
            document.getElementById("forgotLink").addEventListener("click", (e) => {
                e.preventDefault();
                Swal.close();
                showForgotPasswordPopup();
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
                if (data.success && data.firstLogin) {
                    showSetPasswordPopup(); // Show "set new password"
                } else if (data.success) {
                    Swal.fire('Login successful');
                } else {
                    Swal.fire({ icon: 'error', title: 'Login Failed', text: data.message || 'Invalid Credentials' });
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

function showSetPasswordPopup() {
    Swal.fire({
        title: 'Set New Password',
        html: `
            <input type="password" id="newPass" class="swal2-input" placeholder="New Password">
            <input type="password" id="confirmPass" class="swal2-input" placeholder="Confirm Password">
        `,
        confirmButtonText: 'Save Password',
        preConfirm: () => {
            const newPass = Swal.getPopup().querySelector('#newPass').value.trim();
            const confirmPass = Swal.getPopup().querySelector('#confirmPass').value.trim();

            if (!newPass || !confirmPass) {
                Swal.showValidationMessage('Both fields are required');
                return false;
            }
            if (newPass !== confirmPass) {
                Swal.showValidationMessage('Passwords do not match');
                return false;
            }
            if (newPass.length < 12) {
                Swal.showValidationMessage('Password must be at least 12 characters');
                return false;
            }
            return { newPass };
        }
    }).then((result) => {
        if (result.isConfirmed && result.value) {
            const params = new URLSearchParams();
            params.append('action', 'setPassword');
            params.append('newPassword', result.value.newPass);
            params.append('csrf_token', window.csrfToken);

            fetch("api.php", { method: "POST", body: params })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({ icon: 'success', title: 'Password Updated', text: 'Please log in with your new password' });
                } else {
                    Swal.fire({ icon: 'error', title: 'Error', text: data.message });
                }
            });
        }
    });
}

function showForgotPasswordPopup() {
    Swal.fire({
        title: 'Forgot Password',
        html: `<input type="email" id="forgotEmail" class="swal2-input" placeholder="Enter your email">`,
        confirmButtonText: 'Send Temporary Password',
        preConfirm: () => {
            const email = Swal.getPopup().querySelector('#forgotEmail').value.trim();
            if (!email) {
                Swal.showValidationMessage('Email is required');
                return false;
            }
            return { email };
        }
    }).then((result) => {
        if (result.isConfirmed && result.value) {
            const params = new URLSearchParams();
            params.append('action', 'forgotPassword');
            params.append('email', result.value.email);
            params.append('csrf_token', window.csrfToken);

            fetch("api.php", { method: "POST", body: params })
                .then(r => r.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Temporary Password Sent',
                            text: 'Check your email for the temporary password.'
                        });
                    } else {
                        Swal.fire({ icon: 'error', title: 'Error', text: data.message });
                    }
                })
                .catch(err => {
                    Swal.fire({ icon: 'error', title: 'Error', text: 'Could not reach server. Try again later.' });
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
