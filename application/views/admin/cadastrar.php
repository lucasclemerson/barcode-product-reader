<section class="grid content-center w-full my-4">
    <div class="w-11/12 sm:w-1/2 md:w-1/3 mx-auto py-5 bg-gray-50 border-gray-200 border-[1px]">
        <form class="px-4 w-full" action="<?=base_url()?>" method="POST">
            <div class="grid mb-2">
                <label for="email">Nome completo:</label>
                <input class="focus:outline-none py-2 px-1 border-gray-200 border-[1px] text-gray-500" type="text" name="nome" id="nome" placeholder="Digite seu nome completo" >
            </div>
            <div class="grid mb-2">
                <label for="email">Email:</label>
                <input class="focus:outline-none py-2 px-1 border-gray-200 border-[1px] text-gray-500" type="email" name="email" id="email" placeholder="Digite seu email" >
            </div>
            <div class="grid mb-2">
                <label for="email">Data nascimento:</label>
                <input class="focus:outline-none py-2 px-1 border-gray-200 border-[1px] text-gray-500" type="date" name="data" id="data" placeholder="01/01/2001" >
            </div>
            <div class="flex gap-2 mb-2">
                <a href="<?=base_url('login')?>" class="bg-red-500 hover:bg-red-600 px-5 text-gray-50 py-2">Voltar</a>
                <button class="bg-indigo-500 hover:bg-indigo-600 px-5 text-gray-50 py-2">Cadastrar</button>
            </div>
        </form>
    </div>
</section>
