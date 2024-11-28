<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pré-Ficha Acampamento São Padre Pio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>
    <div class="container mt-2" id="info" style="display: none; border: solid 1px; border-radius: 8px;background-color: #aae7e7">
        <p>Caso o seu CPF já esteja cadastrado é muito provável que já tenha cadastro na nossa plataforma de campistas, então para colocar a sua ficha na lista de
            epera de algum acampamento basta acessar pelo endereço: <a href="https://admin.movimentocampista.com.br/login">https://admin.movimentocampista.com.br/login</a>.
            <br>
            <br>
            O seu login e senha será seu CPF, da seguinte forma:
            <li>
                <b>login:</b> 00000000000
            </li>
            <li>
                <b>senha:</b> 00000000000
            </li>
            <br>
            <b>Em caso de dúvidas, entre em contato pelo número: (48) 99695-4410</b>
        </p>
    </div>
    <div class="container mt-2 pb-2" style="border: solid 1px;">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="/assets/img/Arquidiocese-florianopolis.png" alt="Brasão da Arquidiocese de Florianópolis" height="250x" width="250px">
                </div>
                <div class="col align-self-center">
                    <h1>ACAMPAMENTO</h1>
                    <h4>SÃO PE. PIO DE PIETRELCINA</h4>
                    <h5>Foranias: Santo Amaro, Palhoça e São José</h5>
                </div>
                <div class="col">
                    <img src="/assets/img/padrepio.png" alt="Logo do acampamento São Padre Pio" height="250x" width="250px">
                </div>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <h4><b>FICHA DE PRÉ-INSCRIÇÃO</b></h4>
        </div>
        <div class="container">
            <form action="" method="post" id="form" name="form">
                <input type="hidden" name="ip" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
                <div class="row g-3">
                    <!-- row -->
                    <div class="form-group col-md-12" style="cursor: pointer" id="div_check_fila_espera">
                        <div class="container" style="border: solid 1px; border-radius: 8px; padding: 15px;">
                            <label style="padding-bottom: 10px; font-size: 20px; cursor: pointer"><b>Importante!</b></label>
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       value="1"
                                       id="check_fila_espera"
                                       name="check_fila_espera"
                                       style="cursor: pointer"
                                       required>
                                <label class="form-check-label" for="check_fila_espera" style="cursor: pointer">
                                    Entendo que estou entrando em uma <strong>lista de espera</strong> e que o
                                    preenchimento dessa pré-ficha não significa que estarei automaticamente participando
                                    do próximo acampamento. Compreendo que quando chegar a minha vez de participar,
                                    alguém irá entrar em contato comigo por telefone.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="name"><b>Nome Completo:</b></label>
                        <input type="text" class="form-control" id="name" placeholder="Nome Completo" name="name" onkeyup="validaCampo(this, 'name-error')" required>
                        <div class="alert alert-danger mt-1" role="alert" id="name-error" style="display: none">
                            Nome deve ser preenchido corretamente!
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cpf"><b>CPF:</b></label>
                        <input type="text" class="form-control" maxlength="14" id="cpf" placeholder="XXX.XXX.XXX-XX" name="cpf" OnKeyPress="formatar('###.###.###-##', this)" required>
                        <div class="alert alert-danger mt-1" role="alert" id="cpf-error" style="display: none">
                            CPF incorreto ou inválido!
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-6">
                        <label for="street"><b>Rua:</b></label>
                        <input type="text" class="form-control" id="street" placeholder="Rua" name="street" onkeyup="validaCampo(this, 'street-error')" required>
                        <div class="alert alert-danger mt-1" role="alert" id="street-error" style="display: none">
                            Rua deve ser preenchido corretamente!
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="number"><b>Nº:</b></label>
                        <input type="number" class="form-control" id="number" placeholder="Nº" name="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="complement"><b>Complemento:</b></label>
                        <input type="text" class="form-control" id="complement" placeholder="Complemento" name="complement">
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-5">
                        <label for="district"><b>Bairro:</b></label>
                        <input type="text" class="form-control" id="district" placeholder="Bairro" name="district" onkeyup="validaCampo(this, 'district-error')" required>
                        <div class="alert alert-danger mt-1" role="alert" id="district-error" style="display: none">
                            Bairro deve ser preenchido corretamente!
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="state"><b>Estado:</b></label>
                        <select class="form-control" id="state" name="state" onchange="fetchMunicipios(this.value)" required></select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="city"><b>Cidade:</b></label>
                        <select class="form-control" id="city" name="city" required disabled></select>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <label for="contact"><b>Telefone(whatsapp):</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-whatsapp"></i></div>
                            <input type="text" class="form-control" id="contact" placeholder="XX XXXXX-XXXX" onkeyup="validaCampo(this, 'contact-error')" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" name="contact" OnKeyPress="formatar('## #####-####', this)" required>
                            <div class="alert alert-danger mt-1" role="alert" id="contact-error" style="display: none">
                                Telefone deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="instagram"><b>Instagram:</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                            <input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="facebook"><b>Facebook:</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-facebook"></i></div>
                            <input type="text" class="form-control" id="facebook" placeholder="Facebook" name="facebook">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email"><b>Email:</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <label for="date_birthday"><b>Data de Nascimento:</b></label>
                        <input type="date" class="form-control" id="date_birthday" name="date_birthday" onkeyup="validaCampo(this, 'birthday-error')" required>
                        <div class="alert alert-danger mt-1" role="alert" id="birthday-error" style="display: none">
                            Data de Nascimento ser preenchida corretamente!
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="gender"><b>Sexo:</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male_gen" value="0" onclick="validaCampo(this, 'gender-error', 1)" required>
                                <label class="form-check-label" for="male_gen">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="fem_gen" value="1" onclick="validaCampo(this, 'gender-error', 1)" required>
                                <label class="form-check-label" for="fem_gen">
                                    Feminino
                                </label>
                            </div>
                            <div class="alert alert-danger mt-1" role="alert" id="gender-error">
                                Gênero deve ser selecionado corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <label for="religion"><b>Qual sua Religião?</b></label>
                        <input type="text" class="form-control" id="religion" placeholder="Religião" name="religion" onkeyup="validaCampo(this, 'religion-error')" required>
                        <div class="alert alert-danger mt-1" role="alert" id="religion-error" style="display: none">
                            Religião deve ser preenchido corretamente!
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="parish"><b>Paróquia que participa?</b></label>
                        <input type="text" class="form-control" id="parish" placeholder="Paróquia" name="parish">
                    </div>
                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label><b>Formação:</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_baptized" name="is_baptized">
                                <label class="form-check-label" for="is_baptized">
                                    É batizado
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_eucharist" name="is_eucharist">
                                <label class="form-check-label" for="is_eucharist">
                                    Fez 1ª comunhão
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_confirmed" name="is_confirmed">
                                <label class="form-check-label" for="is_confirmed">
                                    É crismado
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 form-group">
                        <label><b>Estado Civil</b></label>
                        <select name="marital_status" id="marital_status" class="form-select" onchange="handleChange(this); validaCampo(this, 'marital_status-error', 1)" required>
                            <option>Selecione</option>
                            <option value="0">Solteiro</option>
                            <option value="1">Casado</option>
                            <option value="2">Separado</option>
                            <option value="3">Divorciado</option>
                            <option value="4">Viúvo</option>
                            <option value="5">Amasiado</option>
                            <option value="6">Padre</option>
                            <option value="7">Freira</option>
                        </select>
                        <div class="alert alert-danger mt-1" role="alert" id="marital_status-error">
                            Estado Civil deve ser selecionado corretamente!
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div id="spouse" style="display: none;">
                        <div class="form-group col-md-5 p-1">
                            <label for="spouse_name"><b>Nome do(a) esposo(a):</b></label>
                            <input type="text" class="form-control" id="spouse_name" placeholder="Nome do(a) esposo(a):" name="spouse_name" onkeyup="validaCampo(this, 'spouse_name-error')">
                            <div class="alert alert-danger mt-1" role="alert" id="spouse_name-error" style="display: none">
                                Nome do(a) esposo(a) ser preenchido corretamente!
                            </div>
                        </div>
                        <div class="form-group col-md-3 p-1">
                            <div class="container" style="border: solid 1px; border-radius: 8px;">
                                <label for="gender"><b>Ele(a) já é campista?</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_spouse_camper" id="is_spouse_camper_yes" onclick="validaCampo(this, 'is_spouse_camper-error',1)" value="1">
                                    <label class="form-check-label" for="is_spouse_camper_yes">
                                        Sim
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_spouse_camper" id="is_spouse_camper_no" onclick="validaCampo(this, 'is_spouse_camper-error',1)" value="0">
                                    <label class="form-check-label" for="is_spouse_camper_no">
                                        Não
                                    </label>
                                </div>
                                <div class="alert alert-danger mt-1" role="alert" id="is_spouse_camper-error">
                                    Deve ser preenchido corretamente!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="is_addicted"><b>Você tem algum vício?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_addicted" id="is_addicted_yes" value="1" onchange="handleChange(this); validaCampo(this, 'is_addicted-error', 1)" required>
                                <label class="form-check-label" for="is_addicted_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_addicted" id="is_addicted_no" value="0" onchange="handleChange(this); validaCampo(this, 'is_addicted-error', 1)" required>
                                <label class="form-check-label" for="is_addicted_no">
                                    Não
                                </label>
                            </div>
                            <div class="alert alert-danger mt-1" role="alert" id="is_addicted-error">
                                Vício deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div id="div-addiction" style="display: none;">
                            <label for="addiction"><b>Qual vício?</b></label>
                            <input type="text" class="form-control" id="addiction" placeholder="Vício" name="addiction" onkeyup="validaCampo(this, 'addiction-error')">
                            <div class="alert alert-danger mt-1" role="alert" id="addiction-error" style="display: none">
                                Vício deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="gender"><b>Você tem alguma restrição médica?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="has_medical_attention" id="has_medical_attention_yes" value="1" onchange="handleChange(this); validaCampo(this, 'has_medical_attention-error', 1)" required>
                                <label class="form-check-label" for="has_medical_attention_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="has_medical_attention" id="has_medical_attention_no" value="0" onchange="handleChange(this); validaCampo(this, 'has_medical_attention-error', 1)" required>
                                <label class="form-check-label" for="has_medical_attention_no">
                                    Não
                                </label>
                            </div>
                            <div class="alert alert-danger mt-1" role="alert" id="has_medical_attention-error">
                                Restrição deve ser preenchida corretamente!
                            </div>
                        </div>  
                    </div>
                    <div class="form-group col-md-4">
                        <div id="div-medical" style="display: none;">
                            <label for="medical_attention"><b>Quais restrições?</b></label>
                            <textarea class="form-control" name="medical_attention" id="medical_attention" cols="30" rows="2" onkeyup="validaCampo(this, 'medical_attention-error')"></textarea>
                            <div class="alert alert-danger mt-1" role="alert" id="medical_attention-error" style="display: none">
                                Restrição deve ser preenchida corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-4">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label><b>Você tem algum parente ou amigo que fez o acampamento?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="has_familiar_camper" id="has_familiar_camper_yes" value="1" onchange="handleChange(this); validaCampo(this, 'has_familiar_camper-error', 1)" required>
                                <label class="form-check-label" for="has_familiar_camper_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="has_familiar_camper" id="has_familiar_camper_no" value="0" onchange="handleChange(this); validaCampo(this, 'has_familiar_camper-error', 1)" required>
                                <label class="form-check-label" for="has_familiar_camper_no">
                                    Não
                                </label>
                            </div>
                            <div class="alert alert-danger mt-1" role="alert" id="has_familiar_camper-error">
                                Campo deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                    <!-- end row -->

                    <div id="parents" style="display: none;">
                        <!-- row -->
                        <div class="form-group col-md-6 p-1">
                            <label for="familiar_1"><b>Quem?</b></label>
                            <input type="text" class="form-control" id="familiar_1" placeholder="Nome do familiar ou amigo" name="familiar_1">
                        </div>
                        <div class="form-group col-md-6 p-1">
                            <label for="familiar_1"><b>Grau de parentesco:</b></label>
                            <input type="text" class="form-control" id="relationship_1" placeholder="Grau de parentesco" name="relationship_1">
                        </div>
                        <!-- end row -->
                        <!-- row -->
                        <div class="form-group col-md-6 p-1">
                            <label for="familiar_2"><b>Quem?</b></label>
                            <input type="text" class="form-control" id="familiar_2" placeholder="Nome do familiar ou amigo" name="familiar_2">
                        </div>
                        <div class="form-group col-md-6 p-1">
                            <label for="familiar_2"><b>Grau de parentesco:</b></label>
                            <input type="text" class="form-control" id="relationship_2" placeholder="Grau de parentesco" name="relationship_2">
                        </div>
                        <!-- end row -->
                        <!-- row -->
                        <div class="form-group col-md-6 p-1">
                            <label for="familiar_3"><b>Quem?</b></label>
                            <input type="text" class="form-control" id="familiar_3" placeholder="Nome do familiar ou amigo" name="familiar_3">
                        </div>
                        <div class="form-group col-md-6 p-1">
                            <label for="familiar_3"><b>Grau de parentesco:</b></label>
                            <input type="text" class="form-control" id="relationship_3" placeholder="Grau de parentesco" name="relationship_3">
                        </div>
                        <!-- end row -->
                    </div>


                    <!-- row -->
                    <div class="form-group col-md-4">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label><b>Você já participou de algum retiro?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_retreatant" id="is_retreatant_yes" value="1" onchange="handleChange(this); validaCampo(this, 'is_retreatant-error', 1)" required>
                                <label class="form-check-label" for="is_retreatant_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_retreatant" id="is_retreatant_no" value="0" onchange="handleChange(this); validaCampo(this, 'is_retreatant-error', 1)" required>
                                <label class="form-check-label" for="is_retreatant_no">
                                    Não
                                </label>
                            </div>
                            <div class="alert alert-danger mt-1" role="alert" id="is_retreatant-error">
                                Campo deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <div id="div-retreat" style="display: none;">
                            <label for=""><b>Qual?</b></label>
                            <input type="text" class="form-control" id="retreat" placeholder="Qual retiro?" name="retreat" onkeyup="validaCampo(this, 'retreat-error')">
                            <div class="alert alert-danger mt-1" role="alert" id="retreat-error" style="display: none">
                                Campo deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-6">
                        <label for="how_find_camp"><b>Como ficou sabendo do acampamento?</b></label>
                        <textarea class="form-control" name="how_find_camp" id="how_find_camp" cols="30" rows="2" onkeyup="validaCampo(this, 'how_find_camp-error')" required></textarea>
                        <div class="alert alert-danger mt-1" role="alert" id="how_find_camp-error" style="display: none">
                            Campo deve ser preenchido corretamente!
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="why_camp"><b>O que levou você a desejar participar do acampamento?</b></label>
                        <textarea class="form-control" name="why_camp" id="why_camp" cols="30" rows="2" onkeyup="validaCampo(this, 'why_camp-error')" required></textarea>
                        <div class="alert alert-danger mt-1" role="alert" id="why_camp-error" style="display: none">
                            Restrição deve ser preenchido corretamente!
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-4">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label><b>Você deseja se inscrever para qual modalidade?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modality" id="modality_mirim" value="0" onchange="validaCampo(this, 'modality-error', 1)" required>
                                <label class="form-check-label" for="modality_mirim">
                                    Mirim (de 09 a 12 anos)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modality" id="modality_fac" value="1" onchange="validaCampo(this, 'modality-error', 1)" required>
                                <label class="form-check-label" for="modality_fac">
                                    FAC (de 14 a 18 anos)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modality" id="modality_juvenil" value="2" onchange="validaCampo(this, 'modality-error', 1)" required>
                                <label class="form-check-label" for="modality_juvenil">
                                    Juvenil (de 19 a 24 anos)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modality" id="modality_senior" value="3" onchange="validaCampo(this, 'modality-error', 1)" required>
                                <label class="form-check-label" for="modality_senior">
                                    Sênior (a partir de 25 anos)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modality" id="modality_casais" value="4" onchange="validaCampo(this, 'modality-error', 1)" required>
                                <label class="form-check-label" for="modality_casais">
                                    Casais
                                </label>
                            </div>
                            <div class="alert alert-danger mt-1" role="alert" id="modality-error">
                                Modalidade deve ser preenchido corretamente!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                    <!-- end row -->
                    <br>
                    <div class="row">
                        <p><b>Obs: No acampamento acontecem atividades físicas moderadas, por isso não é permitido a participação de
                                gestantes e pessoas com problemas de saúde com restrição médica grave.</b></p>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <div class="container text-center" style="border: solid 1px; border-radius: 8px;">
                            <b>O Titular autoriza a utilização dos seus dados pessoais em nossa base de dados,
                                onde serão utilizados unicamente para os fins do acampamento e estes dados não serão
                                expostos publicamente em hipotese alguma.</b>
                            <div class="form-check">
                                <input class="form-check-input" style="background-color: red;" type="checkbox" value="1" id="accept" name="accept" onclick="handleAccept(this)">
                                <label class="form-check-label" for="accept">
                                    Eu aceito conceder meus dados pessoais.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <br>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4 text-center">
                        <button type="submit" id="btn-submit" class="btn btn-success" disabled>Enviar Pré-Ficha</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="/assets/js/functions.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>