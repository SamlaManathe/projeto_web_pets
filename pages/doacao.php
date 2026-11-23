<!DOCTYPE html>
<html lang="pt-br" class="light">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Doe para Peludos Unipê</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,0..200" rel="stylesheet"/>

<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: {
                        DEFAULT: "#2563EB",    
                        light: "#93C5FD",      
                    },
                    secondary: "#F97316",      
                    accent: "#FFEAD2",

                    /* Base */
                    "background-light": "#F9FAFB",
                    "background-dark": "#111827",

                    "text-dark": "#1F2937",
                    "text-light": "#F8FAFC",

                    "subtext-light": "#6B7280",
                    "subtext-dark": "#9CA3AF",

                    /* Cor oficial do rodapé */
                    "footer-blue": "#163A67",
                },

                fontFamily: {
                    display: ["Manrope", "sans-serif"]
                },

                borderRadius: {
                    DEFAULT: "0.5rem",
                    lg: "1rem",
                    xl: "1.5rem",
                    full: "9999px"
                },

                boxShadow: {
                    "roxinho": "0 0 18px 0 rgba(37, 99, 235, 0.45)"
                }
            }
        }
    }
</script>



<style>
.material-symbols-outlined {
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24;
}
</style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-text-dark dark:text-text-light">

<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">

<?php include('../includes/menu.php'); ?>
<!-- ============================= -->
<!-- COMO AJUDAR -->
<!-- ============================= -->
<section class="w-full py-16 lg:py-24">
<div class="mx-auto max-w-6xl px-4">

<div class="flex flex-col gap-4 text-center mb-12">
    <h2 class="text-3xl font-bold tracking-tight text-text-dark dark:text-text-light">Como Você Pode Ajudar</h2>
    <p class="text-subtext-light dark:text-subtext-dark max-w-2xl mx-auto">
        Existem várias maneiras de contribuir. Cada gesto faz a diferença.
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- CARD 1 -->
    <div class="flex flex-col gap-4 rounded-xl border border-secondary bg-white dark:bg-background-dark p-6 text-center items-center shadow-lg">
        <div class="flex items-center justify-center size-12 rounded-full bg-secondary/10 text-secondary">
            <span class="material-symbols-outlined">payments</span>
        </div>

        <h3 class="text-xl font-bold text-text-dark dark:text-text-light">Doação Financeira</h3>
        <p class="text-subtext-light dark:text-subtext-dark text-sm">
            Sua contribuição ajuda com custos veterinários, alimentação e manutenção.
        </p>

        <div class="mt-2 w-full rounded-lg bg-background-light dark:bg-white/10 p-3 flex items-center justify-between border border-secondary/50">
            <span class="font-mono text-sm text-subtext-light dark:text-subtext-dark">peludosunipe@hotmail.com</span>
            <button class="text-primary hover:text-secondary" title="Copiar PIX">
                <span class="material-symbols-outlined text-base">content_copy</span>
            </button>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="flex flex-col gap-4 rounded-xl border border-secondary bg-white dark:bg-background-dark p-6 text-center items-center shadow-lg">
        <div class="flex items-center justify-center size-12 rounded-full bg-secondary/10 text-secondary">
            <span class="material-symbols-outlined">volunteer_activism</span>
        </div>

        <h3 class="text-xl font-bold text-text-dark dark:text-text-light">Doar Itens</h3>
        <p class="text-subtext-light dark:text-subtext-dark text-sm">
            Ração, cobertores e medicamentos são essenciais.
        </p>

 <a href="index.php#contato"
   class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-secondary text-white text-base font-bold shadow-lg hover:bg-secondary/90 transition-colors duration-300">
    <span class="truncate">Agendar entrega</span>
</a>


    </div>

    <!-- CARD 3 -->
    <div class="flex flex-col gap-4 rounded-xl border border-secondary bg-white dark:bg-background-dark p-6 text-center items-center shadow-lg">
        <div class="flex items-center justify-center size-12 rounded-full bg-secondary/10 text-secondary">
            <span class="material-symbols-outlined">groups</span>
        </div>

        <h3 class="text-xl font-bold text-text-dark dark:text-text-light">Apoiar o Projeto</h3>
        <p class="text-subtext-light dark:text-subtext-dark text-sm">
            Seja voluntário, proponha parceria ou adote com responsabilidade.
        </p>

        <a href="index.php#contato"
   class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-secondary text-white text-base font-bold shadow-lg hover:bg-secondary/90 transition-colors duration-300">
    <span class="truncate">Ver formulário</span>
</a>


</div>

</div>
</section>

<!-- ============================= -->
<!-- ÍCONES DE IMPACTO -->
<!-- ============================= -->
<section class="w-full py-16 lg:py-24 bg-background-light dark:bg-background-dark/50">
<div class="mx-auto max-w-4xl px-4 text-center">

<h2 class="text-3xl font-bold tracking-tight mb-12 text-text-dark dark:text-text-light">
    Sua ajuda garante um futuro melhor
</h2>

<div class="grid grid-cols-2 md:grid-cols-4 gap-8">

    <div class="flex flex-col items-center gap-3">
        <span class="material-symbols-outlined text-4xl text-secondary">health_and_safety</span>
        <p class="font-semibold">Tratamentos Veterinários</p>
    </div>

    <div class="flex flex-col items-center gap-3">
        <span class="material-symbols-outlined text-4xl text-secondary">pet_supplies</span>
        <p class="font-semibold">Alimentação de Qualidade</p>
    </div>

    <div class="flex flex-col items-center gap-3">
        <span class="material-symbols-outlined text-4xl text-secondary">sanitizer</span>
        <p class="font-semibold">Castrações e Vacinas</p>
    </div>

    <div class="flex flex-col items-center gap-3">
        <span class="material-symbols-outlined text-4xl text-secondary">cottage</span>
        <p class="font-semibold">Abrigo Seguro e Limpo</p>
    </div>

</div>

</div>
</section>

<!-- ============================= -->
<!-- FAQ -->
<!-- ============================= -->
<section class="w-full py-16 lg:py-24">
<div class="mx-auto max-w-3xl px-4">

<div class="flex flex-col gap-4 text-center mb-12">
    <h2 class="text-3xl font-bold tracking-tight">Perguntas Frequentes (FAQ)</h2>
    <p class="text-subtext-light dark:text-subtext-dark">
        Tire suas dúvidas sobre como ajudar.
    </p>
</div>

<div class="space-y-4">

    <details class="group rounded-lg bg-white dark:bg-background-dark p-4 border border-secondary/50 shadow-md">
        <summary class="flex cursor-pointer items-center justify-between font-semibold">
            Como posso doar?
            <span class="material-symbols-outlined group-open:rotate-180 text-primary transition-transform duration-300">expand_more</span>
        </summary>
        <p class="mt-4 text-subtext-light dark:text-subtext-dark text-sm">
            Você pode doar via PIX ou entregar itens como ração e medicamentos.
        </p>
    </details>

    <details class="group rounded-lg bg-white dark:bg-background-dark p-4 border border-secondary/50 shadow-md">
        <summary class="flex cursor-pointer items-center justify-between font-semibold">
            Minha doação é dedutível?
            <span class="material-symbols-outlined group-open:rotate-180 text-primary transition-transform duration-300">expand_more</span>
        </summary>
        <p class="mt-4 text-subtext-light dark:text-subtext-dark text-sm">
            No momento, não emitimos recibos para dedução fiscal.
        </p>
    </details>

    <details class="group rounded-lg bg-white dark:bg-background-dark p-4 border border-secondary/50 shadow-md">
        <summary class="flex cursor-pointer items-center justify-between font-semibold">
            Como os fundos são utilizados?
            <span class="material-symbols-outlined group-open:rotate-180 text-primary transition-transform duration-300">expand_more</span>
        </summary>
        <p class="mt-4 text-subtext-light dark:text-subtext-dark text-sm">
            100% das doações vão para os animais: tratamentos, alimentação e melhorias.
        </p>
    </details>

</div>

</div>
</section>

</main>

<script src="../assets/js/patinhas.js"></script>
<?php include('../includes/rodape.php'); ?>
</div>

</body>
</html>

