@include('inclusao.head')

<div style="height: 100dvh" class="container d-table d-md-flex justify-content-center align-items-center ">
    <div class="text-center  col-md-4" style="font-size: 10px">
        @include('inclusao.logotipo')
        <h1 class="pt-2" style="font-size: 20px; color: cornflowerblue;">ESTRELINHAS DO FUTURO</h1>
    </div>

    <div class=" col-md-4 p-4" style="border: 3px solid  cornflowerblue">
        <form class="row g-3 " action="/inicio" method="get">
            <label for="">Email ou telefone:</label>
            <input type="text" name="" id="">

            <label for="">Senha:</label>
            <input type="password" name="" id="">

            <button type="submit">Logar</button>
        </form>
    </div>
</div>
@include('inclusao.foot')
