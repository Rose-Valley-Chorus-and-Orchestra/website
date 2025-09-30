const { response } = require("express");

document.addEventListener("DOMContentLoaded", function(){

    //load header and footer
    loadHeaderFooter();

    //initial content load(home)
    loadPageContent();

    //SPA routing
    document.getElementById("homeLink").addEventListener("click", function(e){
        e.preventDefault();
        loadPageContent("home");
        history.pushState({page: "home"}, "Home", "index.html");
    });

    document.getElementById("aboutLink").addEventListener("click", function(e){
        e.preventDefault();
        loadPageContent("about");
        history.pushState({page: "about"}, "About Us", "about.html");
    });

    document.getElementById("ticketsLink").addEventListener("click", function(e){
        e.preventDefault();
        loadPageContent("ticekts");
        history.pushState({page: "tickets"}, "Tickets", "tickets.html");
    });

    document.getElementById("venueLink").addEventListener("click", function(e){
        e.preventDefault();
        loadPageContent("venue");
        history.pushState({page: "venue"}, "Venue", "venue.html");
    });

    document.getElementById("contactLink").addEventListener("click", function(e){
        e.preventDefault();
        loadPageContent("contact");
        history.pushState({page: "contact"}, "Contact Us", "contact.html");
    });

    //handle back/forwar navigation
    window.addEventListener("popstate", function(event){
        if(event.state){
            loadPageContent(event.state.page);
        }
    });

    //load header and footer
    function loadHeaderFooter(){
        fetch('/components/header.html').then(response => response.text()).then(data => document.getElementById('headerContainer').innerHTML = data);
        fetch('/components/footer.html').then(response => response.text()).then(data => document.getElementById('footerContainer').innerHTML = data);
    }

    //load page content dynamically based on the page name
    function loadPageContent(page){
        fetch('/${page}.html').then(response => response.text()).then(data => document.getElementById('content').innerHTML = data);
    }
})