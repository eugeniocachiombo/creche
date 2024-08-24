
    <main>
        <div style="background-color: rgb(255, 206, 115); color: white;">
            <h1 style="margin-top: 20px;">Estrelinhas do futuro</h1>
        </div>
        <div style="margin-top: 20px;">
            <hr style="background: rgb(255, 206, 115);" size="3px">
        </div>

        <form action="">
            <h1 style="margin: 10px;">Cadastro de criança</h1>

            <div id="verde">
                <div id="inputes">
                    <input type="text" placeholder="Nome da criança"  id="nome">
                    <input type="text" placeholder="Sobrenome" id="sobrenome">
                    <input type="date" id="data">
                    <select id="genero">
                        <option value="Genéro">Genéro</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <div id="selectmoment">
                    <input type="text" placeholder="Nome do pai" id="nomePai">
                    <input type="text" placeholder="Nome da mãe" id="nomeMae">
                    <select id="estadoSaude">
                        <option value="Estado de saúde">Estado de saúde</option>
                        <option value="Tem patologia">Tem patologia</option>
                        <option value="Dificiente de membros(Especiais)">Dificiente de membros(Especiais)</option>
                        <option value="Dificiente de mente">Dificiente de mente</option>
                    </select>

                    <select id="nacionalidade">
                        <option>Nacionalidade</option>
                        <option>Estados-unidos-de-America</option>
                        <option>Angola</option>
                        <option>Brasil</option>
                        <option>Portugal</option>
                        <option>Russia</option>
                        <option>Espanha</option>
                        <option>London</option>
                        <option>Italia</option>
                        <option>Africa-do-Sul</option>
                        <option>Etiopia</option>
                        <option>Romenia</option>
                        <option>China</option>
                        <option>Moçambique</option>
                        <option>Marroco</option>
                        <option>japão</option>
                        <option>Turquia</option>
                        <option>Ucrania</option>
                        <option>França</option>
                        <option>Barçelona</option>
                        <option>Argentina</option>
                        <option>Afgnistão</option>
                        <option>Egipto</option>
                        <option>Borussia</option>
                        <option>Santomé-Principe</option>
                        <option>Zambia</option>
                        <option>Ungria</option>
                        <option>Emirabiles-Arabes-Unidos</option>
                        <option>Beijaquistão</option>
                        <option>Gabão</option>
                        <option>Polonia</option>
                        <option>Mexíco</option>
                        <option>Colombia</option>
                        <option>Namibia</option>
                        <option>Usbgnistão</option>
                        <option>Damasco</option>
                        <option>Corea-do-sul</option>
                        <option>Corea-do-Norte</option>
                    </select>
                </div>

            </div>
            <div>
                <button onclick="clicar()" type="button" style="margin-bottom: 40px;">
                    <h1>Cadastrar</h1>
                </button>
            </div>

            <div>
                <h1>Resultado: </h1>
                <div id="resultado">Será exibido aqui os resultados</div>
                <br><br><br>
            </div>
        </form>

    </main>
