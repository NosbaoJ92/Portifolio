@extends('principal')
@section('titulo', 'Front_JoabsonNogueira')
@section('conteudo')
  
<section class="mt-10 flex flex-col items-center w-full gap-4 pr-5 pl-5">
    <div class="menu-links-visible hidden h-auto " id='menu-links-visible'>
        <button  id="btnMenuFechar" class="btnMenuFechar absolute z-10 top-5 right-5 min-[641px]:hidden" onclick="FecharMenu()"> X</button>
        <div id="menu-links-visible" class="menu-links-visible flex absolute w-full right-0 z-0 top-16 rounded-b-2xl bg-gradient-to-b from-lime-600 to-lime-300 min-[641px]:hidden">
            <ul class="menu-links-visible w-full h-12 items-center flex justify-evenly font-medium">
                <a href="" class="links"><li>Projetos</li></a>
                <a href="" class="links"><li>Sobre</li></a>
                <a href="" class="links"><li>Contato</li></a>  
            </ul>
        </div>
    </div>

<!-- Start bloco 1 -->
    <div class="texto-principal border rounded-ss-3xl rounded-br-3xl border-lime-400 w-full flex max-[634px]:flex-col min-[634px]:items-center min-[1080px]:w-6/12 max-[350px]:mt-10">
        <h1 class="Boas-vindas w-full max-[349px]:text-2xl max-[634px]:w-full  text-center p-6 text-zinc-200 drop-shadow-2xl min-[635px]:w-6/12 min-[635px]:text-3xl max-[734px]:text-3xl max-[734px]:w-4/12 min-[735px]:text-4xl min-[735px]:w-8/12">Olá, seja bem-vindo ao meu 
        <span class="before:animate-pulse before:block before:absolute before:blur-xl before:-inset-0 before:-skew-y-3 before:bg-lime-400 relative inline-block drop-shadow">
            <span class="relative font-medium">portifólio</span>
        </span>
        </h1>
        <div class="image w-full relative h-80 bg-cover rounded-br-3xl bg-center bg-white" style="background-image: url(/src/img/retrato.jpg)">
        </div>
        
    </div>
<!-- End bloco 1 -->

<!-- Start bloco 2 -->
    <div class="divSkills flex mt-4 flex-col items-center">
        <h3 class="FirstSkills text-lime-400">Principais habilidades</h3>
        <p class="Skills border-r-2 whitespace-nowrap overflow-hidden typing-animation text-lg text-zinc-200  max-[349px]:text-sm">Tailwind CSS | Php | Laravel | React Native </p>
    </div>
    <div class="divProjetos flex justify-center w-screen bg-lime-400 mt-4 h-56  flex-col items-center min-[635px]:h-auto ">
        <h3 class="FirstProjects text-xl font-medium">Principais projetos</h3>
        <div class="cards w-full flex justify-center gap-3 p-2 min-[635px]:w-full">
            <a href="#" class="hover:bg-sky-700"><div class="card bg-cover bg-center max-[634px]:w-44 h-44  min-[635px]:w-56 min-[635px]:h-56 " style="background-image: url(https://st4.depositphotos.com/14953852/22772/v/600/depositphotos_227725020-stock-illustration-image-available-icon-flat-vector.jpg)"></div></a>
        </div>
    </div>
<!-- End bloco 2 -->
</section>
@stop
