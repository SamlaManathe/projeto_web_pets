<?php
include '../admin/config.inc.php'; // Conexão com o banco
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peludos Unipê</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

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



</head>

<body>
<?php include('../includes/menu.php'); ?>
<?php 
// ----------------------------------------------------
// Bloco PHP/HTML para exibir a caixa de feedback
// ----------------------------------------------------
if (isset($_GET['status'])): ?>
    
  <div class="feedback-alert max-w-xl mx-auto mt-8 p-4 rounded-lg shadow-lg text-center"
     role="alert">

        <?php if ($_GET['status'] === 'sucesso'): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 py-3 rounded-lg">
                <span class="font-bold text-lg">Sucesso! 🐾</span>
                <p>Sua mensagem/candidatura foi enviada. Aguarde nosso contato!</p>
            </div>

        <?php elseif ($_GET['status'] === 'erro'): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 py-3 rounded-lg">
                <span class="font-bold text-lg">Erro! 🙁</span>
                <p>Não foi possível enviar sua mensagem. Tente novamente.</p>
                <?php if (isset($_GET['msg'])) echo '<p class="mt-1 text-xs">' . htmlspecialchars($_GET['msg']) . '</p>'; ?>
            </div>
            
        <?php endif; ?>
        
    </div>
    
<?php endif; ?>

<main class="home">

    <section id="topo" class="hero-img">
        <img src="../assets/img/Banner.png" alt="Banner">
    </section>

    <section class="carousel-section">
    <h2 class="carousel-title">Conheça Alguns Animais</h2>

    <div class="carousel">
        <div class="carousel-track">

            <div class="carousel-item"><img src="../assets/img/peludo1.png" alt="Peludo 1"></div>
            <div class="carousel-item"><img src="../assets/img/peludo2.png" alt="Peludo 2"></div>
            <div class="carousel-item"><img src="../assets/img/peludo3.png" alt="Peludo 3"></div>
            <div class="carousel-item"><img src="../assets/img/peludo4.png" alt="Peludo 4"></div>

            <div class="carousel-item"><img src="../assets/img/peludo1.png" alt="Peludo 1"></div>
            <div class="carousel-item"><img src="../assets/img/peludo2.png" alt="Peludo 2"></div>
            <div class="carousel-item"><img src="../assets/img/peludo3.png" alt="Peludo 3"></div>
            <div class="carousel-item"><img src="../assets/img/peludo4.png" alt="Peludo 4"></div>

        </div>
    </div>
</section>

    <section id="acoes" class="py-16 px-4 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-3 gap-8">
        
        <div class="bg-background-light border border-accent rounded-2xl p-8 shadow-md flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div>
                <span class="material-symbols-outlined text-5xl text-secondary mb-4 block">volunteer_activism</span>
                
                <h3 class="text-xl font-semibold text-secondary mb-2">Faça uma Doação</h3>
                
                <p class="text-text-dark/80 mb-6">
                    Sua contribuição ajuda a cobrir custos de veterinário, comida e cuidados para nossos animais.
                </p>
            </div>
            <a href="doacao.php" 
                class="block w-full text-center py-3 rounded-md font-semibold text-white bg-primary transition-colors duration-300 hover:bg-secondary">
                Doar Agora
            </a>
        </div>
        
        <div class="bg-background-light border border-accent rounded-2xl p-8 shadow-md flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div>
                <span class="material-symbols-outlined text-5xl text-secondary mb-4 block">pets</span>
                
                <h3 class="text-xl font-semibold text-secondary mb-2">Seja Padrinho/Madrinha</h3>
                
                <p class="text-text-dark/80 mb-6">
                    Apoie um peludo mensalmente e receba atualizações sobre ele.
                </p>
            </div>
            <a href="apadrinhar.php" 
                class="block w-full text-center py-3 rounded-md font-semibold text-white bg-primary transition-colors duration-300 hover:bg-secondary">
                Apadrinhar
            </a>
        </div>
        
        <div class="bg-background-light border border-accent rounded-2xl p-8 shadow-md flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div>
                <span class="material-symbols-outlined text-5xl text-secondary mb-4 block">groups</span>
                
                <h3 class="text-xl font-semibold text-secondary mb-2">Quero Ser Voluntário!</h3>
                
                <p class="text-text-dark/80 mb-6">
                    Ajude a cuidar, divulgar e apoiar nossos peludos!
                </p>
            </div>
            <a href="voluntario.php" 
                class="block w-full text-center py-3 rounded-md font-semibold text-white bg-primary transition-colors duration-300 hover:bg-secondary">
                Participar
            </a>
        </div>
        
    </div>
</section>
    <div class="max-w-3xl mx-auto space-y-16 text-center">

<section id="sobre" class="space-y-4">
    <h3 class="text-2xl md:text-3xl font-bold text-primary">
        Nosso Propósito
    </h3>

    <p class="text-lg leading-relaxed text-text-dark/90">
        O <strong class="text-secondary font-extrabold">Peludos Unipê</strong> nasceu dentro do
        <strong class="text-secondary font-extrabold">Centro Universitário de João Pessoa</strong> como uma iniciativa de amor e empatia.
        Inspirado pelo perfil do Instagram <a href="https://instagram.com/peludosunipe" target="_blank" class="underline hover:text-primary">
    <em>@peludosunipe</em>
</a>, o projeto foi trazido para o ambiente web
        com o objetivo de ampliar o alcance das adoções e conectar ainda mais pessoas à causa animal.<br>
        Nosso objetivo é construir uma ponte entre animais abandonados e pessoas dispostas a transformar vidas.
        Através do site, você pode conhecer cada peludo, saber sua história e dar o primeiro passo para uma
        adoção responsável e cheia de amor. ❤️
    </p>
</section>

<div class="space-y-4">
    <h3 class="text-2xl md:text-3xl font-bold text-primary">
        Para Além dos Muros da Faculdade
    </h3>

    <p class="text-lg leading-relaxed text-text-dark/90">
        O projeto é aberto a toda a comunidade!
        Pessoas de fora do Unipê também podem adotar, ajudar com doações ou participar da divulgação.
        Juntos, criamos uma rede de cuidado e carinho pelos nossos amigos de quatro patas 🐾
    </p>
    <br>
    <br>
</div>

</div>

   <section class="w-full py-20 bg-footer-blue">
  <div class="max-w-5xl mx-auto px-6 text-center">

    <h3 class="text-3xl font-extrabold text-white mb-12">
      Como Funciona a Adoção?
    </h3>

    <div class="grid md:grid-cols-3 gap-12">

      <div class="flex flex-col items-center">
        <div class="w-16 h-16 flex items-center justify-center
                    bg-white
                    text-footer-blue
                    rounded-full
                    text-2xl font-extrabold mb-4 shadow-xl">
          1
        </div>
        <h4 class="text-xl font-semibold text-white mb-2">
          Escolha seu Pet
        </h4>
        <p class="text-white/80">
          Navegue pelos perfis dos nossos peludos e se apaixone.
        </p>
      </div>

      <div class="flex flex-col items-center">
        <div class="w-16 h-16 flex items-center justify-center
                    bg-white
                    text-footer-blue
                    rounded-full
                    text-2xl font-extrabold mb-4 shadow-xl">
          2
        </div>
        <h4 class="text-xl font-semibold text-white mb-2">
          Fale Conosco
        </h4>
        <p class="text-white/80">
          Conte sobre você, sua rotina e o pet escolhido.
        </p>
      </div>

      <div class="flex flex-col items-center">
        <div class="w-16 h-16 flex items-center justify-center
                    bg-white
                    text-footer-blue
                    rounded-full
                    text-2xl font-extrabold mb-4 shadow-xl">
          3
        </div>
        <h4 class="text-xl font-semibold text-white mb-2">
          Leve para Casa
        </h4>
        <p class="text-white/80">
          Após a aprovação, receba seu novo melhor amigo!
        </p>
      </div>

    </div>

  </div>
</section>


    <section class="py-12 md:py-20 " id="adocao">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-extrabold text-primary">
            Nossos Peludos Esperando um Lar
        </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">

<?php 
$stmt = $pdo->query("SELECT * FROM adocao ORDER BY nome");
$peludos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($peludos as $peludo): 

    
    $stmtFotos = $pdo->prepare("SELECT caminho_foto FROM adocao_fotos WHERE id_animal = ?");
    $stmtFotos->execute([$peludo['id']]);
    $fotos = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);

    
    if(empty($peludo['imagem']) && empty($fotos)) {
        $fotos = [['caminho_foto' => '../assets/img/default.png']];
    } else {

        
        if(!empty($peludo['imagem'])) {
            array_unshift($fotos, ['caminho_foto' => '../' . $peludo['imagem']]);
        }

        
        foreach($fotos as $i => $f) {
            if(strpos($f['caminho_foto'], '../') !== 0) {
                $fotos[$i]['caminho_foto'] = '../' . $f['caminho_foto'];
            }
        }
    }
?>

<div class="card-peludo">


    <div class="carousel-animal relative w-full h-64 overflow-hidden bg-gray-100">

        <?php foreach($fotos as $index => $foto): ?>
            <img src="<?= $foto['caminho_foto'] ?>"
     class="carousel-item absolute w-full h-full object-cover object-center transition-opacity <?= $index === 0 ? 'opacity-100' : 'opacity-0' ?>">
        <?php endforeach; ?>

   <button class="prev absolute left-2 top-1/2 -translate-y-1/2 bg-[#F97316] hover:bg-[#EA580C] 
        text-white text-sm font-bold h-8 px-3 rounded-lg shadow-lg z-10 opacity-100">&lt;</button>

<button class="next absolute right-2 top-1/2 -translate-y-1/2 bg-[#F97316] hover:bg-[#EA580C] 
        text-white text-sm font-bold h-8 px-3 rounded-lg shadow-lg z-10 opacity-100">&gt;</button>

    </div>

    <div class="p-4">
        <h3 class="text-lg font-bold mb-1"><?= htmlspecialchars($peludo['nome']) ?></h3>
        <p class="text-sm opacity-70 mb-3"><?= htmlspecialchars($peludo['sexo']) ?>, <?= htmlspecialchars($peludo['idade']) ?></p>

        <a href="animal-detalhe.php?id=<?= $peludo['id'] ?>">
           <button class="btn-perfil mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 
               text-white text-sm font-bold transition">
    Ver Perfil
</button>

        </a>
    </div>
</div>

<?php endforeach; ?>
</div>
</section>

<script>
document.querySelectorAll('.carousel-animal').forEach(carousel => {
const items = carousel.querySelectorAll('.carousel-item');
let current = 0;

const prevBtn = carousel.querySelector('.prev');
const nextBtn = carousel.querySelector('.next');

prevBtn.addEventListener('click', () => {
items[current].classList.remove('opacity-100');
items[current].classList.add('opacity-0');
current = (current - 1 + items.length) % items.length;
items[current].classList.remove('opacity-0');
items[current].classList.add('opacity-100');
});

nextBtn.addEventListener('click', () => {
items[current].classList.remove('opacity-100');
items[current].classList.add('opacity-0');
current = (current + 1) % items.length;
items[current].classList.remove('opacity-0');
items[current].classList.add('opacity-100');
});
});
</script>

   <section id="contato" class="py-12 text-center max-w-2xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-orange-500">
        Fale Conosco
    </h2>
    
    <p class="text-lg mb-6 text-orange-900/80">
        Tem alguma dúvida ou quer saber mais sobre nosso trabalho?<br>Mande uma mensagem.
    </p>

    <?php
// Define variáveis para armazenar o ID e o nome do animal, caso sejam passados pela URL
$animal_id = null;
$animal_nome = '';

// Verifica se os parâmetros 'adotar' (ID) e 'nome' foram enviados na URL
if (isset($_GET['adotar']) && is_numeric($_GET['adotar']) && isset($_GET['nome'])) {
    // 1. Sanitiza e armazena o ID
    $animal_id = (int)$_GET['adotar'];
    // 2. Sanitiza e armazena o nome (decodifica a URL, caso tenha espaços)
    $animal_nome = htmlspecialchars(urldecode($_GET['nome']));
}
?>

<section id="contato">
    <form action="processa_contato.php" method="POST" class="form-contato flex flex-col gap-4 bg-orange-50 p-8 rounded-2xl shadow-lg border border-orange-300">
        
        <?php if ($animal_nome): ?>
            <p class="text-xl font-bold text-primary mb-2 p-2 rounded-lg border border-primary/20 bg-primary/10">
                Você está se candidatando para adotar: 
                <strong class="text-secondary"><?= $animal_nome ?></strong> 🐾
            </p>
            
            <input type="hidden" name="id_animal_adotado" value="<?= $animal_id ?>">
        <?php endif; ?>

        <input id="name" name="nome" type="text" placeholder="Seu nome" required
            class="p-3 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all">

        <input id="email" name="email" type="email" placeholder="Seu email" required
            class="p-3 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all">

        <input id="telefone" name="telefone" type="tel" placeholder="Seu telefone" pattern="[0-9\s()+-]{10,20}" title="Informe um telefone válido" required
            class="p-3 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all">

        <input id="subject" name="assunto" type="text" 
            placeholder="Assunto(não esqueça de mencionar o peludo que deseja!)"
            value="<?= $animal_nome ? 'Candidato à adoção: ' . $animal_nome : '' ?>"
            class="p-3 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all">

        <textarea id="message" name="mensagem" rows="4" placeholder="Sua mensagem (fale sobre sua rotina e por que deseja adotar!)" required
            class="p-3 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500 transition-all"></textarea>
        
        <button type="submit" class="btn-enviar-form bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-lg font-semibold transition-colors duration-300 shadow-md">
            Enviar mensagem
        </button>
    </form>
</section>

</main>
<script>
    // ------------------------------------------------------------------
    // LÓGICA PARA FAZER A CAIXA DE SUCESSO/ERRO SUMIR
    // ------------------------------------------------------------------
    document.addEventListener('DOMContentLoaded', function() {
        const feedbackBox = document.querySelector('.feedback-alert');
        
        // Verifica se a caixa de feedback existe na página
        if (feedbackBox) {
            // Define um temporizador de 5000 milissegundos (5 segundos)
            setTimeout(() => {
                feedbackBox.style.transition = 'opacity 0.5s ease-out';
                feedbackBox.style.opacity = '0';
                
                // Remove o elemento completamente após o fade-out
                setTimeout(() => {
                    feedbackBox.remove();
                }, 500);
                
                // Remove a variável 'status' da URL para que a mensagem não reapareça ao atualizar
                if (history.replaceState) {
                    const url = new URL(window.location.href);
                    url.searchParams.delete('status');
                    url.searchParams.delete('msg'); // Se estiver usando a mensagem de erro
                    history.replaceState(null, '', url.toString());
                }
            }, 5000); // 5 segundos de exibição
        }
    });
</script>
<script src="../assets/js/patinhas.js"></script>
<?php include('../includes/rodape.php'); ?>

</body>
</html>
