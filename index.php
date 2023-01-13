<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pré-Ficha Acampamento São Padre Pio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
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
            <form action="" method="post">
                <div class="row g-3">
                    <!-- row -->
                    <div class="form-group col-md-7">
                        <label for="name"><b>Nome Completo:</b></label>
                        <input type="text" class="form-control" id="name" placeholder="Nome Completo" name="name" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="cpf"><b>CPF:</b></label>
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-6">
                        <label for="street"><b>Rua:</b></label>
                        <input type="text" class="form-control" id="street" placeholder="Rua" name="street" required>
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
                        <input type="text" class="form-control" id="district" placeholder="Bairro" name="district" required>
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
                        <label for="phone"><b>Telefone(whatsapp):</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-whatsapp"></i></div>
                            <input type="text" class="form-control" id="phone" placeholder="Telefone(Whatsapp)" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="instagram"><b>Instagram:</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                            <input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email"><b>Email:</b></label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <label for="date-birthday"><b>Data de Nascimento:</b></label>
                        <input type="date" class="form-control" id="date-birthday" name="date-birthday" required>
                    </div>

                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="gender"><b>Sexo:</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male_gen" required>
                                <label class="form-check-label" for="male_gen">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="fem_gen" required>
                                <label class="form-check-label" for="fem_gen">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <label for="religion"><b>Qual sua Religião?</b></label>
                        <input type="text" class="form-control" id="religion" placeholder="Religião" name="religion" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="parish"><b>Paróquia que participa?</b></label>
                        <input type="text" class="form-control" id="parish" placeholder="Paróquia" name="parish">
                    </div>
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label><b>Civil:</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_married" name="is_married">
                                <label class="form-check-label" for="is_married">
                                    É casado
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_second_union" name="is_second_union">
                                <label class="form-check-label" for="is_second_union">
                                    Vive em segunda união
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-5">
                        <label for="spouse_name"><b>Nome do(a) esposo(a):</b></label>
                        <input type="text" class="form-control" id="spouse_name" placeholder="Nome do(a) esposo(a):" name="spouse_name" required>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="gender"><b>Ele(a) já é campista?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_spouse_camper" id="is_spouse_camper_yes" required>
                                <label class="form-check-label" for="is_spouse_camper_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_spouse_camper" id="is_spouse_camper_no" required>
                                <label class="form-check-label" for="is_spouse_camper_no">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="gender"><b>Você tem algum vício?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_addicted" id="is_addicted_yes" required>
                                <label class="form-check-label" for="is_addicted_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_addicted" id="is_addicted_no" required>
                                <label class="form-check-label" for="is_addicted_no">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="addiction"><b>Qual vício?</b></label>
                        <input type="text" class="form-control" id="addiction" placeholder="Vício" name="addiction" required>
                    </div>
                    <div class="col-md-5"></div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="form-group col-md-3">
                        <div class="container" style="border: solid 1px; border-radius: 8px;">
                            <label for="gender"><b>Você tem alguma restrição médica?</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="has_medical_attention" id="has_medical_attention_yes" required>
                                <label class="form-check-label" for="has_medical_attention_yes">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="has_medical_attention" id="has_medical_attention_no" required>
                                <label class="form-check-label" for="has_medical_attention_no">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="addiction"><b>Quais restrições?</b></label>
                        <textarea class="form-control" name="medical_attention" id="medical_attention" cols="30" rows="2"></textarea>
                    </div>
                    <!-- end row -->
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/assets/js/functions.js"></script>
</body>

</html>