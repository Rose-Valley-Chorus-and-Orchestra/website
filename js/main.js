// ===== FUNCTIONS (defined globally) =====
function showLoginPopup() {
    Swal.fire({
        title: 'Login',
        html: `
            <input type="text" id="username" class="swal2-input" placeholder="Username">
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
            const username = Swal.getPopup().querySelector('#username').value;
            const password = Swal.getPopup().querySelector('#password').value;

            if (!username || !password) {
                Swal.showValidationMessage(`Please enter both username and password`);
            }
            return { username, password };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("api.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    action: "login",
                    username: result.value.username,
                    password: result.value.password
                })
            })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    Swal.fire(`Welcome ${data.user.name}!`);
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
            <input type="email" id="email" class="swal2-input" placeholder="Email">
            <input type="email" id="email2" class="swal2-input" placeholder="Confirm Email">
            <input type="password" id="password" class="swal2-input" placeholder="Password">
        `,
        confirmButtonText: 'Create Account',
        focusConfirm: false,
        preConfirm: () => {
            const email = Swal.getPopup().querySelector('#email').value;
            const email2 = Swal.getPopup().querySelector('#email2').value;
            const password = Swal.getPopup().querySelector('#password').value;

            if (!email || !email2 || !password) {
                Swal.showValidationMessage(`All fields are required`);
            } else if (email !== email2) {
                Swal.showValidationMessage(`Emails do not match`);
            }
            return { email, password };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("api.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    action: "signup",
                    email: result.value.email,
                    password: result.value.password
                })
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
    const faders = document.querySelectorAll('.fade-in-up');
    const loginBtn = document.getElementById('loginBtn');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // only animate once
            }
        });
    }, {
        threshold: 0.2 // trigger when 20% of element is visible
    });

    faders.forEach(fader => {
        observer.observe(fader);
    });

    if(loginBtn){
        loginBtn.addEventListener("click", function(){
            showLoginPopup();
        });
    }
});



/*
const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.(com|org)$/;
if (!emailRegex.test(email)) {
    swal.showValidationError('Email must end in .mil or .gov');
    return false;
}
*/