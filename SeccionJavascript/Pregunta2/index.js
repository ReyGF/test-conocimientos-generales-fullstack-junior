// Recorremos la cadena de caracteres de atras hacia adelante 
// y vamos sumando los caracteres a una cadena auxiliar

// Complejidad O(n)

function reverseString(cdn){
    let reverse = ""
    for(let i = cdn.length-1; i >= 0;i--){
        reverse += cdn[i]
    }
    return reverse
}