/*===== MENU SHOW =====*/
const showMenu = (toggleId, navId) => {
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId)

if (toggle && nav) {
toggle.addEventListener('click', () => {
nav.classList.toggle('show')
})
}
}
showMenu('nav-toggle', 'nav-menu')



/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');

function linkAction() {
/*Active link*/
navLink.forEach(n => n.classList.remove('active'));
this.classList.add('active');

/*Remove menu mobile*/
const navMenu = document.getElementById('nav-menu')
navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
origin: 'top',
distance: '10px',
duration: 1000,
reset: true
});

/*SCROLL HOME*/
sr.reveal('.home__title', {});
sr.reveal('.button', { delay: 50 });
sr.reveal('.home__img', { delay: 200 });
sr.reveal('.home__social-icon', { interval: 200 });

/*SCROLL ABOUT*/
sr.reveal('.about__img', {});
sr.reveal('.about__subtitle', { delay: 400 });
sr.reveal('.about__text', { delay: 400 });

/*SCROLL SKILLS*/
sr.reveal('.skills__subtitle', {});
sr.reveal('.skills__text', {});
sr.reveal('.skills__data', { interval: 200 });
sr.reveal('.skills__img', { delay: 600 });

/*SCROLL WORK*/
sr.reveal('.work__img', { interval: 200 });

/*SCROLL CONTACT*/
sr.reveal('.contact__input', { interval: 100 });


window.addEventListener("DOMContentLoaded", function () {

const form = document.querySelector('form');
const thankYou = document.querySelector('.thank-you');
const nameInput = document.querySelector('input[name="name"]');
const emailInput = document.querySelector('input[name="email"]');
const messageInput = document.querySelector("textarea[name='message']");

nameInput.isValid = () => !!nameInput.value;
emailInput.isValid = () => isValidEmail(emailInput.value);
messageInput.isValid = () => !!messageInput.value;


const inputs = [nameInput, emailInput, messageInput];


const isValidEmail = (email) => {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

let isFormValid = false;
let isValidationOn = false;

const resetElm = (elm) => {
  elm.classList.remove("invalid");
  elm.nextElementSibling.classList.add("hidden");
};

const invalidateElm = (elm) => {
  elm.classList.add("invalid");
  elm.nextElementSibling.classList.remove("hidden");
};


const validateInputs = () => {
  if(!isValidationOn) return;
  isFormValid = true;
  resetElm(nameInput);
  resetElm(emailInput);
  resetElm(messageInput);

  if(!nameInput.value) {
    isFormValid = false;
    invalidateElm(nameInput);
  }

  if(!isValidEmail(emailInput.value)) {
    isFormValid = false;
    invalidateElm(emailInput);
  }
  if(!messageInput.value) {
    isFormValid = false;
    invalidateElm(messageInput);
  }
};
async function handleSubmit(event) {
  event.preventDefault();
  var status = document.getElementById("my-form-status");
  var data = new FormData(event.target);
  fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
        'Accept': 'application/json'
    }
  });
}
form.addEventListener("submit", handleSubmit)

form.addEventListener('submit', (e) => {
  e.preventDefault();
  isValidationOn = true;
  validateInputs();
  if(isFormValid) {
    form.reset();
    thankYou.classList.remove('hidden');
    setTimeout(function(){
      location.reload();
    }, 3000);
  }
});
inputs.forEach(input => {
  input.addEventListener("input", () => {
      validateInputs();
  });
});
});
