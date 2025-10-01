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
            Swal.fire({
                title: 'Members Login',
                html: `
                    <input type="text" id="email" class="swal2-input" placeholder="Email Address">
                    <input type="password" id="password" class="swal2-input" placeholder="Password">
                `,
                confirmButtonText: 'Log In',
                focusConfirm: false,
                preConfirm: () => {
                    const email = Swal.getPopup().querySelector('#email').value;
                    const password = Swal.getPopup().querySelector('#password').value;

                    if (!email || !password) {
                        Swal.showValidationMessage(`Please enter both email and password`);
                    }
                    return { email: email, password: password };
                }
            }).then((results) => {
                if(results.isConfirmed){
                    Swal.fire(`Email: ${results.value.email}`);
                }
            });
        });
    }
});