@include('inclusao.head')
@include('inclusao.header')

<main>
    <div style="background-color: rgb(255, 206, 115); color: white;">
        <h1 class="ps-4" style="margin-top: 20px;">Estrelinhas do futuro</h1>
    </div>

    <div style="margin-top: 20px;">
        <hr style="background: rgb(255, 206, 115);" size="3px">
    </div>

    <div class="container">
        <h1 style="margin: 10px;">Cadastro de Aluno</h1>
        <hr>
        <form action="" class="row g-3 d-table d-md-flex ">
            <div class="col-4">
                <input type="text" placeholder="Nome da aluno" id="nome">
                <input type="text" placeholder="Sobrenome" id="sobrenome">
                <input type="date" id="data">
            </div>

            <div class="col-4">
                
                <select id="genero">
                    <option class="d-none">Selecione o Genéro</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <input type="text" placeholder="Nome do pai" id="nomePai">
                <input type="text" placeholder="Nome da mãe" id="nomeMae">
            </div>

            <div class="col-4">
                <select id="estadoSaude">
                    <option class="d-none">Selecione o Estado de saúde</option>
                    <option value="Tem patologia">Tem patologia</option>
                    <option value="Dificiente de membros(Especiais)">Dificiente de membros(Especiais)</option>
                    <option value="Dificiente de mente">Dificiente de mente</option>
                </select>

                <select id="nacionalidade">
                    <option class="d-none">Selecione a Nacionalidade</option>
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
            </div><hr>


            <div class="pb-5">
                <button style="min-width: 35vh; font-size: 20px" onclick="clicar()" type="button" >
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</main>

@include('inclusao.footer')
@include('inclusao.foot')
