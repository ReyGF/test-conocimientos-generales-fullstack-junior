
function usingLocalStorage(clave = "clave", valor = "valor"){
    
    localStorage.setItem(clave, valor)

    let restore = localStorage.getItem(valor)

    alert(restore)
}



