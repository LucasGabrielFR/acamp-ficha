const urlEstados =
  "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome";

const selectEstados = document.querySelector("#state");
const selectMunicipios = document.querySelector("#city");

var estados = [];

async function fetchEstados() {
  await fetch(urlEstados)
    .then((resp) => resp.json())
    .then(function (data) {
      let response = data;
      return response.map(function (estado) {
        estados.push({ sigla: estado.sigla, nome: estado.nome });
      });
    });
}

function adicionaOptionsEstado() {
  estados.forEach((estado) => {
    selectEstados.options[selectEstados.options.length] = new Option(
      estado.nome,
      estado.sigla
    );
  });
}

function adicionaOptionsMunicipios(municipios) {
  while (selectMunicipios.length > 0) {
    selectMunicipios.remove(0);
  }
  municipios.forEach((municipio) => {
    selectMunicipios.options[selectMunicipios.options.length] = new Option(
      municipio,
      municipio
    );
  });
}

window.onload = async (event) => {
  await fetchEstados();
  adicionaOptionsEstado();
};

async function fetchMunicipios(option) {
  selectMunicipios.disabled = true;
  const urlMunicipios = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${option}/municipios`;
  var municipios = [];
  await fetch(urlMunicipios)
    .then((resp) => resp.json())
    .then(function (data) {
      let response = data;
      return response.map(function (municipio) {
        municipios.push(municipio.nome);
      });
    });

  adicionaOptionsMunicipios(municipios);
  selectMunicipios.disabled = false;
}
