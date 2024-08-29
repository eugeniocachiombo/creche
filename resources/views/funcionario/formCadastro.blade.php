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
        <h1 style="margin: 10px;">Cadastro de Funcionario</h1>
        

            @if (session('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @endif
 

        <form action="/funcionario/cadastro" method="POST" class="row g-3 d-table d-md-flex needs-validation" novalidate>
            @csrf
            <hr>
            <div class="col">
                <input class="form-control" required type="text" placeholder="Nome" name="nome">
                <input class="form-control" required type="text" placeholder="Sobrenome" name="sobrenome">
                <input class="form-control" required type="date" name="data">
            </div>

            <div class="col">

                <select required name="genero" class="form-select">
                    <option value="" disabled selected>Selecione o Genéro</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>

                <select required name="cargo" class="form-select">
                    <option value="" disabled selected>Selecione o cargo</option>
                    <option value="cuidador(a)">Cuidador(a)</option>
                    <option value="Admin">Administrador</option>
                    <option value="Professor(a)">Professor(a)</option>
                </select>

                <input class="form-control" required type="email" placeholder="Email" name="email">
            </div>

            <div class="col">
                <input class="form-control" required type="password" placeholder="Senha" name="senha">

                <input class="form-control" required type="number" placeholder="Telefone" name="telefone">

                <select required name="nacionalidade" class="form-select">
                    <option value="" disabled selected>Selecione a Nacionalidade</option>
                    <option value="Estados-unidos-de-America">Estados-unidos-de-America</option>
                    <option value="Angola">Angola</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Russia">Russia</option>
                    <option value="Espanha">Espanha</option>
                    <option value="London">London</option>
                    <option value="Italia">Italia</option>
                    <option value="Africa-do-Sul">Africa-do-Sul</option>
                    <option value="Etiopia">Etiopia</option>
                    <option value="Romenia">Romenia</option>
                    <option value="China">China</option>
                    <option value="Moçambique">Moçambique</option>
                    <option value="Marroco">Marroco</option>
                    <option value="japão">japão</option>
                    <option value="Turquia">Turquia</option>
                    <option value="Ucrania">Ucrania</option>
                    <option value="França">França</option>
                    <option value="Barçelona">Barçelona</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Afgnistão">Afgnistão</option>
                    <option value="Egipto">Egipto</option>
                    <option value="Borussia">Borussia</option>
                    <option value="Santomé-Principe">Santomé-Principe</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Ungria">Ungria</option>
                    <option value="Emirabiles-Arabes-Unidos">Emirabiles-Arabes-Unidos</option>
                    <option value="Beijaquistão">Beijaquistão</option>
                    <option value="Gabão">Gabão</option>
                    <option value="Polonia">Polonia</option>
                    <option value="Mexíco">Mexíco</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Usbgnistão">Usbgnistão</option>
                    <option value="Damasco">Damasco</option>
                    <option value="Corea-do-sul">Corea-do-sul</option>
                    <option value="Corea-do-Norte">Corea-do-Norte</option>
                </select>
            </div>
            <hr>

            <div class="pb-5">
                <button style="min-width: 35vh; font-size: 20px" type="submit">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</main>


@include('inclusao.footer')
@include('inclusao.foot')
