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
            alert("Log In clicked from main.js");
        });
    }
});

document.getElementById()