const signupButton = document.getElementById('signup-button'),
loginButton = document.getElementById('login-button'),
userForms = document.getElementById('user_options-forms')
/* Add event listener to the "Sign Up" button */
signupButton.addEventListener('click', () => {
userForms.classList.remove('bounceRight')
userForms.classList.add('bounceLeft')
}, false)
/* Add event listener to the "Login" button*/
loginButton.addEventListener('click', () => {
userForms.classList.remove('bounceLeft')
userForms.classList.add('bounceRight')
}, false) 

//nxt script
let btn1 = document.querySelector('#btn2');
let btn4 = document.querySelector('#btn4');
let base = document.querySelector('.thecard')
btn2.addEventListener('click', function(e){
    console.log('btnflip working');
    e.preventDefault();
//    base.classList.add('animatethecard');
    base.style.transform="rotateY(180deg)";
});

btn4.addEventListener('click', function(e){
    console.log('btnflip working');
    e.preventDefault();
//    base.classList.add('animatethecard');
    base.style.transform="rotateY(0deg)";
});
if(false){
    console.log('jbj');
}
else{
    console.log('fads');
}

//nxt script
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

//nxt script
const inputs = document.querySelectorAll(".input");

function addcl(){
let parent = this.parentNode.parentNode;
parent.classList.add("focus");}

function remcl(){
let parent = this.parentNode.parentNode;
if(this.value == ""){
parent.classList.remove("focus");}}

inputs.forEach(input => {
input.addEventListener("focus", addcl);
input.addEventListener("blur", remcl);});

//nxt script
function setRole(role) {
const roleInput = document.querySelector('input[name="role"]');
roleInput.value = role;}