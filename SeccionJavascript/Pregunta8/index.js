
function GetApiData(){
    fetch('https://examples.com/api/example')
    .then((response) => response.json())
    .then((data) => {
        const resultElement = document.getElementById('result');
        resultElement.textContent = JSON.stringify(data);
    })
    .catch((error) => {
        console.error('Error al obtener los datos:', error);
    });
}