import data from "./datos.json" assert {type:"json"};

// const dataArray = Object.entries(data);

const perros = data.perros;

perros.forEach(perro => {
    let nombre = perro.nombre;
    let edad = perro.edad;
    let raza = perro.raza;

    const infoContainer = document.createElement("div");
    infoContainer.innerHTML = `Nombre: ${nombre}<br>Edad: ${edad}<br>Raza: ${raza}<br><br>`;
    document.body.appendChild(infoContainer);
});


