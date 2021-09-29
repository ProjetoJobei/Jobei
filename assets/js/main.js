function confirma() {
    var nome = document.getElementById('nome_user').value();
    var nomeCompleto = document.getElementByName('nome_completo_user').value();
    var email = document.getElementByName('_user').value();
    var nascimentoUser = document.getElementByName('nascimento_user').value();
    var cidade = document.getElementByName('cidade_user').value();
    var estado = document.getElementByName('estado_user').value();	
    
    var revisa = (
        `<ul id="ConfirmaDados" class="register-info">
            <li>
                <div class="row">
                    <div class="col-sm-4 weight-600"> Nome completo </div>
                    <div class="col-sm-8"> ${nomeCompleto} </div>
                </div>
            </li>													
            <li>
                <div class="row">
                    <div class="col-sm-4 weight-600"> Nome de usuário </div>
                    <div class="col-sm-8"> ${nome}</div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-sm-4 weight-600"> Email </div>
                    <div class="col-sm-8"> ${email} </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-sm-4 weight-600"> Data de Nascimento </div>
                    <div class="col-sm-8"> ${nascimentoUser} - .....000 </div>
                </div>
            </li>												
            <li>
                <div class="row">
                    <div class="col-sm-4 weight-600"> Localização </div>
                    <div class="col-sm-8"> ${cidade} - ${estado} </div>
                </div>
            </li>
        </ul>`
    );
    
    document.getElementById('ConfirmaDados').innerHTML = revisa;
}