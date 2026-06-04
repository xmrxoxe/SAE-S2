function showSignup(){
    document.getElementById('loginForm').classList.remove('active');
    document.getElementById('signupForm').classList.add('active');
}

document.getElementById('loginFormSubmit').addEventListener('submit', function(event){
    event.preventDefault();
});

document.getElementById('signupFormSubmit').addEventListener('submit', function(event){
    event.preventDefault();
});

function ValidateSignupForm(){
    const password = document.querySelector ('#signupForm input[type="password"]').value;
    const confirmPassword = document.querySelector('#signupForm input[type="password"]:last-of-type').value;
    if(password !== confirmPassword){
        alert('Les mots de passe ne correspondent pas. Veuillez réessayer.');
        return false;
    }

    if(password.length < 8){
        alert('Le mot de passe doit contenir au moins 8 caractères. Veuillez réessayer.');
        return false;
    }
    return true;
}
