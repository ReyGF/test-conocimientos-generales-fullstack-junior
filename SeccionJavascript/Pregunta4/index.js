// Recorremos el array de numeros y comprbamos si el numero es divisible por 2 y si asi asi lo imprimimos
// Complejidad O(n)

let numeros = [1,2,3,4,5,6,7,8,9,10]

function EvenNumbers(numeros){
    
    for(let numero of numeros){
        if(numero % 2 == 0)
            console.log(numero)
    }
}

EvenNumbers(numeros)





