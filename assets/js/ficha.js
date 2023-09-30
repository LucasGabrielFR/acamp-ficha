const urlEstados =
  "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome";

const selectEstados = document.querySelector("#state");
const selectMunicipios = document.querySelector("#city");
const selectAcampamentos = document.querySelector("#camps_list");

var estados = [];
var acampamentos = [];
var acampamentosSelecionados = [];

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

async function fetchAcampamentos() {
  const apiAcampAdmin = "https://admin.movimentocampista.com.br/api/getAllCamps";
  await fetch(apiAcampAdmin)
    .then((resp) => resp.json())
    .then(function (data) {
      let response = data;
      return response.map(function (acampamento) {
        acampamentos.push({
          id: acampamento.id,
          nome: acampamento.name,
          data_inicio: acampamento.date_start,
          data_fim: acampamento.date_end,
        });
      });
    });
}

function adicionaOptionsAcampamentos() {
  while (selectAcampamentos.length > 0) {
    selectAcampamentos.remove(0);
  }
  acampamentos.forEach((acampamento) => {
    selectAcampamentos.options[selectAcampamentos.options.length] = new Option(
      acampamento.nome,
      acampamento.id
    );
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
  await fetchAcampamentos();
  adicionaOptionsEstado();
  adicionaOptionsAcampamentos();
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

function selectCamp(select) {
  if (!acampamentosSelecionados.includes(select.value)) {
    acampamentosSelecionados.push(select.value);
    adicionaAcampamento(select.value);
  }
}

function handleAccept(check) {
  var btnSubmit = document.querySelector("#btn-submit");
  if (check.checked) {
    check.style.backgroundColor = "green";
    btnSubmit.disabled = false;
  } else {
    check.style.backgroundColor = "red";
    btnSubmit.disabled = true;
  }
}

function validaCPF(strCPF) {
  var Soma;
  var Resto;
  Soma = 0;
  strCPF = strCPF.replaceAll(".", "");
  strCPF = strCPF.replaceAll("-", "");
  if (strCPF == "00000000000") return false;

  for (i = 1; i <= 9; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(strCPF.substring(9, 10))) return false;

  Soma = 0;
  for (i = 1; i <= 10; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(strCPF.substring(10, 11))) return false;
  return true;
}

$("form").submit(function (event) {
  event.preventDefault();
  const apiAcampAdmin = "http://admin.movimentocampista.com.br/api/register";
  const cpf = document.getElementById("cpf");
  const btnSubmit = document.getElementById("btn-submit");
  const divInfo = document.getElementById("info");
  btnSubmit.disabled = true;

  if (!validaCPF(cpf.value)) {
    $("#cpf").focus();
    $("#cpf-error").css({ display: "block" });
    btnSubmit.disabled = false;
  } else {
    var formData = serializeForm();
    fetch(apiAcampAdmin, {
      method: "POST",
      body: JSON.stringify(formData),
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status == 203) {
          divInfo.style.display = "block";
          window.scrollTo(0, 0);
          Toastify({
            text: data.message,
            style: {
              background: "linear-gradient(to right, #ba6868, #d42828)",
            },
            duration: 5000,
          }).showToast();
          btnSubmit.disabled = false;
        }

        if (data.status == 200) {
          Toastify({
            text: data.message,
            duration: 5000,
          }).showToast();
          window.location.href = "finish.html";
        }
      })
      .catch((error) => {
        console.error(error);
      });
  }
});

function clearForm() {
  const form = document.querySelector("form");
  form.reset();
}

function serializeForm() {
  var form = document.getElementById("form");

  var elements = form.elements;

  var params = {};
  for (var i = 0; i < elements.length; i++) {
    var field = elements[i];
    if (
      field.name &&
      !field.name.includes("familiar") &&
      !field.name.includes("relationship")
    ) {
      if (
        field.name == "modality" ||
        field.name == "is_baptized" ||
        field.name == "is_eucharist" ||
        field.name == "is_confirmed"
      ) {
        if (field.checked) {
          params[field.name] = field.value;
        }
      } else {
        params[field.name] = field.value;
      }
    }
  }
  let familiar_1 = document.getElementById("familiar_1").value;
  let relationship_1 = document.getElementById("relationship_1").value;
  let familiar_2 = document.getElementById("familiar_2").value;
  let relationship_2 = document.getElementById("relationship_2").value;
  let familiar_3 = document.getElementById("familiar_3").value;
  let relationship_3 = document.getElementById("relationship_3").value;
  let inputs = [
    familiar_1,
    relationship_1,
    familiar_2,
    relationship_2,
    familiar_3,
    relationship_3,
  ];
  let result = {};
  for (let i = 0; i < inputs.length; i += 2) {
    let key = i / 2 + 1;
    result[key] = {
      familiar: inputs[i],
      relationship: inputs[i + 1],
    };
  }
  params.familiar = JSON.stringify(result);
  return params;
}

function handleChange(src) {
  if (src.name == "marital_status") {
    var spouse = document.querySelector("#spouse");
    var spouseName = document.querySelector("#spouse_name");
    var is_spouse_camper_yes = document.querySelector("#is_spouse_camper_yes");
    var is_spouse_camper_no = document.querySelector("#is_spouse_camper_no");
    if (src.value != 1 && src.value != 5) {
      spouse.style.display = "none";
      spouseName.required = false;
      is_spouse_camper_no.required = false;
      is_spouse_camper_yes.required = false;
    } else {
      spouse.style.display = "flex";
      spouseName.required = true;
      is_spouse_camper_no.required = true;
      is_spouse_camper_yes.required = true;
    }
  }
  if (src.name == "is_addicted") {
    var divAddiction = document.querySelector("#div-addiction");
    var addiction = document.querySelector("#addiction");
    if (src.value != 0) {
      divAddiction.style.display = "grid";
      addiction.required = true;
    } else {
      divAddiction.style.display = "none";
      addiction.required = false;
    }
  }
  if (src.name == "has_medical_attention") {
    var divMedical = document.querySelector("#div-medical");
    var medical_attention = document.querySelector("#medical_attention");
    if (src.value != 0) {
      divMedical.style.display = "grid";
      medical_attention.required = true;
    } else {
      divMedical.style.display = "none";
      medical_attention.required = false;
    }
  }
  if (src.name == "is_retreatant") {
    var divRetreat = document.querySelector("#div-retreat");
    var retreat = document.querySelector("#retreat");
    if (src.value != 0) {
      divRetreat.style.display = "grid";
      retreat.required = true;
    } else {
      divRetreat.style.display = "none";
      retreat.required = false;
    }
  }
  if (src.name == "has_familiar_camper") {
    var divParents = document.querySelector("#parents");
    if (src.value != 0) {
      divParents.style.display = "contents";
    } else {
      divParents.style.display = "none";
    }
  }
}

function formatar(mascara, documento) {
  var i = documento.value.length;
  var saida = mascara.substring(0, 1);
  var texto = mascara.substring(i);

  if (isNaN(documento.value[i - 1])) {
    // impede entrar outro caractere que não seja número
    documento.value = documento.value.substring(0, i - 1);
    return;
  }

  if (texto.substring(0, 1) != saida) {
    documento.value += texto.substring(0, 1);
  }
}

$("#cpf").blur(function () {
  if (!validaCPF(this.value)) {
    $("#cpf").css({ border: "solid 1px red" });
    $("#cpf-error").css({ display: "block" });
  } else {
    $("#cpf").css({ border: "" });
    $("#cpf-error").css({ display: "none" });
  }
});

function adicionaAcampamento(acampamentoId) {
  const acampamento = acampamentos.find((camp) => camp.id == acampamentoId);
  const acampamentosDiv = document.getElementById("acampamentos");

  const item = document.createElement("div");
  item.classList.add(
    "list-group-item",
    "list-group-item-action",
    "d-flex",
    "gap-3",
    "py-3"
  );
  item.setAttribute("aria-current", "true");
  item.id = `acampamento-${acampamento.id}`;

  const inner = document.createElement("div");
  inner.classList.add("d-flex", "gap-2", "w-100", "justify-content-between");

  const info = document.createElement("div");
  const nome = document.createElement("h6");
  nome.classList.add("mb-0");
  nome.textContent = acampamento.nome;
  const data = document.createElement("p");
  data.classList.add("mb-0", "opacity-75");

  const data_inicio = new Date(acampamento.data_inicio);
  const data_fim = new Date(acampamento.data_fim);

  const data_inicio_formatada = data_inicio.toLocaleDateString("pt-BR");
  const data_fim_formatada = data_fim.toLocaleDateString("pt-BR");

  data.textContent = `${data_inicio_formatada} - ${data_fim_formatada}`;
  info.appendChild(nome);
  info.appendChild(data);

  const deleteBtn = document.createElement("small");
  deleteBtn.classList.add("opacity-50", "text-nowrap", "text-danger");
  deleteBtn.style.cursor = "pointer";
  const deleteIcon = document.createElement("i");
  deleteIcon.classList.add("fas", "fa-trash");
  deleteBtn.appendChild(deleteIcon);

  deleteBtn.addEventListener("click", removeItem(`acampamento-${acampamento.id}`));

  inner.appendChild(info);
  inner.appendChild(deleteBtn);
  item.appendChild(inner);

  acampamentosDiv.appendChild(item);
}

function removeItem(id) {
    return () => {
        const item = document.getElementById(id);
        item.remove();
    };
}
