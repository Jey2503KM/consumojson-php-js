
fetch('datos.json')
    .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
    .then(data => {
        const perros = data.perros;
        perros.forEach(perros => {
            let N = perros.nombre;
            let E = perros.edad;
            let R = perros.raza;
          

            console.log("nombre: ",N);
            console.log("edad: ",E);
            console.log("raza: ",R);
        });
    })
    .catch(error => console.error('error al cargar los datos', error));

function clic(){
    console.log("clic!")
}
