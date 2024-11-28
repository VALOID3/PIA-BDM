
function validateForm(event) {

    event.preventDefault();

    const profilePic = document.getElementById('profile-pic');
    const fullName = document.getElementById('input_fullname').value.trim();
    const birthdate = document.getElementById('input_fechaNac').value;

    if (fullName == "" || birthdate =="") {
        showError('No puede dejar espacios vacíos');
        return false;
    }
    

    //Validar imagen
    /*function validateForm(event) {
        const fileInput = document.getElementById('profile-pic');
        const errorMessage = document.getElementById('error-message');
        const filePath = fileInput.value;
    
        // Extensiones permitidas
        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    
        if (!allowedExtensions.exec(filePath)) {
            errorMessage.innerText = 'Por favor, carga una imagen en formato .jpg o .png.';
            fileInput.value = ''; 
            event.preventDefault(); 
            return false;
        } else {
            errorMessage.innerText = ''; 
        }
        
        return true; 
    }*/
    

    // Validar nombre completo (solo letras)
    const namePattern = /^[a-zA-Z\s]+$/;
    if (!namePattern.test(fullName)) {
        showError('El nombre completo solo puede contener letras.');
        return false;
    }

    // Validar fecha de nacimiento (no puede ser futura)
    const today = new Date();
    const bDate = new Date(birthdate);
    if (bDate > today) {
        showError('La fecha de nacimiento no puede ser en el futuro.');
        return false;
    }
    console.log()
    
    event.target.submit();
    return true;
}

function showError(message) {
    const errorMessage = document.getElementById('error-message');
    errorMessage.innerHTML = message;

    // Hacer desaparecer el mensaje después de 5 segundos
    setTimeout(() => {
        errorMessage.innerHTML = '';
    }, 5000);
}