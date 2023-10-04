// MOBILE MENU 

function myFunction() {
    let x = document.getElementById("mMenu");
    if (x.style.display === "block") {
        x.style.display = "none"
    } else {
        x.style.display = "block"
    }
}


// MODAL BOX 

let modal = document.getElementById('volunteerModal');

let btn = document.getElementById("volunteerButton");

let span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function howToContributeText() {
    if (!event.target.classList.contains('active-button')) {
       let activeButton = document.getElementsByClassName('active-button')[0]
       activeButton.classList.remove('active-button')
       event.target.classList.add('active-button')
    }
    if (event.target.name == 'overview') {
        let text = document.getElementsByClassName('how-to-contribute-text')[0]
        text.innerHTML = "<p class='section-paragraph'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p> <p class='section-paragraph'> Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>"
    }
    if (event.target.name == 'impact') {
        let text = document.getElementsByClassName('how-to-contribute-text')[0]
        text.innerHTML = "<p class='section-paragraph'>impact </p> <p class='section-paragraph'> Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>"
        console.log(text)
    }
    if (event.target.name == 'what-you-get') {
        let text = document.getElementsByClassName('how-to-contribute-text')[0]
        text.innerHTML = "<p class='section-paragraph'>What you get </p> <p class='section-paragraph'> Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>"
        console.log(text)
    }
}
