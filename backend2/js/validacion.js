const nombre = document.getElementById("nombre")
const email = document.getElementById("email")
const direccion = document.getElementById("direccion")
const form = document.getElementById("Contacto")
const advertencia = document.getElementById("advertencia")

form.addEventListener('submit', e=>{
    e.preventDefault()
    let mensaje = ""
    let entrar = false
    let regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
    let regexName = /^[a-zA-Z\s]+$/
    let regexDireccion = /[=%$@/?¿]/
    
    if(nombre.value.length <6 || !regexName.test(nombre.value)){                 //nombre mayor a 6 caracter
        mensaje += "nombre invalido, "
        entrar = true
    }
    if(!regexEmail.test(email.value)){          //validar email
        mensaje += "email es invalido, "
        entrar = true
    }
    if(direccion.value.length <6 || !regexDireccion.test(direccion.value)){              //direccion mayor a 6 caracter
        mensaje += "direccion invalida"
        entrar = true
    }

    if(entrar){
        advertencia.innerHTML = mensaje
    }
})