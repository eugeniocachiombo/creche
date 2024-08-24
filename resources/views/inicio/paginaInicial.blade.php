@include('inclusao.head')
@include('inclusao.header')

<style>
    .texto {
        animation: texto 2s;
    }

    @keyframes texto {
        from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
<main>
    <div class="container">
        @include('inclusao.logotipo')
        <div class="pt-3 texto">
            <p>Estrelinhas do Futuro é uma instituição de controlo de crianças apartir dos 6 meses até os 4 anos de
                idade. Este sistema visa facilitar o serviço deste centro permitindo que os encarregados tenham acesso
                das informações da criança enquanto matriculada.</p>
        </div>

        <div class="pt-5 pb-3">
            <center><img src="{{ asset('assets/img/logotipo.jpg') }}" ></center>
            <p class="pt-3 texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem et quis architecto dolorum, eum sapiente nostrum, nisi distinctio eveniet consequatur quam earum porro magnam possimus. Aut temporibus voluptatum error et!</p>
        </div>
    </div>

    <div class="" style="background: cornflowerblue">
        <div class="container">
            <center><img class="pt-5 pb-2" src="{{ asset('assets/img/logotipo.jpg') }}" ></center>
        <p class="pt-3 pb-5 texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem et quis architecto dolorum, eum sapiente nostrum, nisi distinctio eveniet consequatur quam earum porro magnam possimus. Aut temporibus voluptatum error et!</p>
        </div>
    </div>

    <div class="container">
        @include('inclusao.logotipo')
        <div class="pt-3 texto">
            <p>Estrelinhas do Futuro é uma instituição de controlo de crianças apartir dos 6 meses até os 4 anos de
                idade. Este sistema visa facilitar o serviço deste centro permitindo que os encarregados tenham acesso
                das informações da criança enquanto matriculada.</p>
        </div>

        <div class="pt-5 pb-3">
            <center><img src="{{ asset('assets/img/logotipo.jpg') }}" ></center>
            <p class="pt-3 texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem et quis architecto dolorum, eum sapiente nostrum, nisi distinctio eveniet consequatur quam earum porro magnam possimus. Aut temporibus voluptatum error et!</p>
        </div>
    </div>

    <div class="" style="background: yellow">
        <div class="container">
            <center><img class="pt-5 pb-2" src="{{ asset('assets/img/logotipo.jpg') }}" ></center>
        <p class="pt-3 pb-5 texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem et quis architecto dolorum, eum sapiente nostrum, nisi distinctio eveniet consequatur quam earum porro magnam possimus. Aut temporibus voluptatum error et!</p>
        </div>
    </div>

    <div class="container">
        @include('inclusao.logotipo')
        <div class="pt-3 texto">
            <p>Estrelinhas do Futuro é uma instituição de controlo de crianças apartir dos 6 meses até os 4 anos de
                idade. Este sistema visa facilitar o serviço deste centro permitindo que os encarregados tenham acesso
                das informações da criança enquanto matriculada.</p>
        </div>

        <div class="pt-5 pb-3">
            <center><img src="{{ asset('assets/img/logotipo.jpg') }}" ></center>
            <p class="pt-3 texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem et quis architecto dolorum, eum sapiente nostrum, nisi distinctio eveniet consequatur quam earum porro magnam possimus. Aut temporibus voluptatum error et!</p>
        </div>
    </div>
</main>
@include('inclusao.footer')
@include('inclusao.foot')
