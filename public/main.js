let emailServices = document.querySelector('#email');
let registerButton  = document.querySelector('#register');
let errorEmail = document.querySelector('#errorEmail');
registerButton.addEventListener('click',validateRegisterForm)

function validateRegisterForm(e){
   
    if(emailServices.value==''){
        e.preventDefault();
        errorEmail.innerText = 'Email is Required'
        emailServices.style.border = '1px solid red'
    }else{

        

    }
}