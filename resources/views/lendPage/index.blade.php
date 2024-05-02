<x-layout>
    <x-slot name="title">Minha lend Page</x-slot>
    
    <section class="sobre" id="sobre">
        <div class="title">
            <h1>Conheça nossa empresa</h1>
            <div class="title__line"></div>
        </div>
    <div class="container">
        <x-sobre title="Experiência" ico="ri-customer-service-line" descricao="Contamos com uma equipe de profissionais altamente qualificados e experientes no setor de telecomunicações." />

        <x-sobre title="Soluções Personalizadas" ico="ri-pencil-line" descricao="Desenvolvemos soluções sob medida para atender às necessidades específicas de cada cliente, garantindo resultados eficazes." />

        <x-sobre title="Parceria" ico="ri-team-fill" descricao="Valorizamos a parceria com nossos clientes e trabalhamos em conjunto para alcançar o sucesso mútuo." />
    </div>
</section>

<section class="servico" id="servico">
    <div class="title">
        <h1>Saiba sobre os nosso serviços</h1>
        <div class="title__line"></div>
    </div>
    {{-- <div class="container">
        <x-servico titulo="300BM" preco="200" descricao="Lorem ipsum dolor sit amet consectetur adipisicing elit." />

        <x-servico titulo="400BM" preco="270" descricao="Lorem ipsum dolor sit amet consectetur adipisicing elit." />

        <x-servico titulo="460BM" preco="600" descricao="Lorem ipsum dolor sit amet consectetur adipisicing elit." />
    </div> --}}
</section>
</x-layout>
