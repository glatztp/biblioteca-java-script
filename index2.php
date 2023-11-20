<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Biblioteca Digital</title>
    <style>
       
        
    </style>
</head>
<body>
    <div class="container">
        <div class="start-section">
            <div class="graphic-box">
             </div>   
            <h3>Biblioteca Digital</h3>

            



            <p>Explore nossa coleção de livros e mergulhe em mundos fascinantes.</p>
        </div>

        <h2>Lista de Livros</h2>

       <?php
class Livro {
    public $titulo;
    public $autor;
    public $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }
}

class Biblioteca {
    public $livros = [];

    public function adicionarLivro($livro) {
        $this->livros[] = $livro;
    }

    public function retirarLivro($titulo) {
        foreach ($this->livros as $livro) {
            if ($livro->titulo === $titulo && $livro->disponivel) {
                $livro->disponivel = false;
                return true;
            }
        }
        return false;
    }

    public function devolverLivro($titulo) {
        foreach ($this->livros as $livro) {
            if ($livro->titulo === $titulo && !$livro->disponivel) {
                $livro->disponivel = true;
                return true;
            }
        }
        return false;
    }
}

// Criar livros
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");
$livro2 = new Livro("Harry Potter e a Pedra Filosofal", "J.K. Rowling");

// Criar biblioteca
$biblioteca = new Biblioteca();
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

// Retirar um livro
$retirado = $biblioteca->retirarLivro("O Senhor dos Anéis");
if ($retirado) {
    echo "Livro retirado com sucesso!\n";
} else {
    echo "Livro não disponível para retirada.\n";
}

// Devolver um livro
$devolvido = $biblioteca->devolverLivro("O Senhor dos Anéis");
if ($devolvido) {
    echo "Livro devolvido com sucesso!\n";
} else {
    echo "Livro não encontrado para devolução.\n";
}
?>


<h2>Informe seu nome e idade:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="text" name="idade"><br><br>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php
// Exibir as informações do usuário após o envio do formulário
if ($nome != "" && $idade != "") {
    echo "<h2>Informações do usuário:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos";
}



            ?>


        <ul class="book-list">
            <li>
                <img class="book-image" src="https://a-static.mlcdn.com.br/800x560/livro-o-sol-e-para-todos/magazineluiza/222645700/55bca320180ae14fa89273215accd4bb.jpg" alt="O Sol é para Todos">
                <div>
                    <span>O Sol é para Todos - Harper Lee</span>
                    <p>Sinopse: Uma história inspiradora sobre justiça e moralidade.</p>
                </div>
                <button>Retirar</button>
            </li>
            <li>
                <img class="book-image" src="https://a-static.mlcdn.com.br/280x210/livro-cem-anos-de-solidao/magazineluiza/222755000/9e3f3317db12004144b4fd523061737f.jpg" alt="Cem Anos de Solidão">
                <div>
                    <span>Cem Anos de Solidão - Gabriel García Márquez</span>
                    <p>Sinopse: Um épico de realismo mágico que narra a história da família Buendía.</p>
                </div>
                <button>Retirar</button>
            </li>
            <li>
                <img class="book-image" src="https://a-static.mlcdn.com.br/800x560/livro-o-senhor-dos-aneis-as-duas-torres/magazineluiza/223950900/9f8ddbab8d0ee1abe923ffc5f1bd806c.jpg" alt="O Senhor dos Anéis">
                <div>
                    <span>O Senhor dos Anéis - J.R.R. Tolkien</span>
                    <p>Sinopse: Uma jornada épica de aventura e amizade através da Terra-média.</p>
                </div>
                <button>Retirar</button>
            </li>
            <li>
                <img class="book-image" src="https://a-static.mlcdn.com.br/800x560/livro-harry-potter-e-a-pedra-filosofal-j-k-rowling/magazineluiza/223260000/a30cc9c5b888e2caa2ef1d7a4d17f06b.jpg" alt="Harry Potter e a Pedra Filosofal">
                <div>
                    <span>Harry Potter e a Pedra Filosofal - J.K. Rowling</span>
                    <p>Sinopse: A mágica jornada de um jovem bruxo no mundo da magia e da aventura.</p>
                </div>
                <button>Retirar</button>
            </li>
            <li>
                <img class="book-image" src="https://a-static.mlcdn.com.br/800x560/livro-a-culpa-e-das-estrelas/magazineluiza/088603400/46c8f024167e7f6c3cb807806fa31c2f.jpg" alt="A Culpa é das Estrelas">
                <div>
                    <span>A Culpa é das Estrelas - John Green</span>
                    <p>Sinopse: Uma história emocionante sobre dois adolescentes com câncer que se apaixonam.</p>
                </div>
                <button>Retirar</button>
            </li>
            <!-- Adicione mais livros aqui -->
        </ul>

        <h2>Retirar Livro</h2>
        <form class="form-group">
            <label for="livro">Escolha um livro:</label>
            <select id="livro" name="livro">
                <option value="livro1">O Sol é para Todos - Harper Lee</option>
                <option value="livro2">Cem Anos de Solidão - Gabriel García Márquez</option>
                <option value="livro3">O Senhor dos Anéis - J.R.R. Tolkien</option>
                <option value="livro4">Harry Potter e a Pedra Filosofal - J.K. Rowling</option>
                <option value="livro5">A Culpa é das Estrelas - John Green</option>
            </select>
            <button type="submit">Retirar Livro</button>
        </form>
    </div>

     <footer>
        <h4>Contato</h4>
        <p>Email: contato@bibliotecadigital.com</p>
        <p>Telefone: (XX) XXXX-XXXX</p>
        <p>Endereço: Rua da Biblioteca, 123</p>
    </footer>
    
    <script>
        // Adicione scripts aqui, se necessário
    </script>
</body>
</html>


