<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        // Produtos com categorias e marcas (dados estáticos)
        $produtos = [
            [
                'nome' => 'Shampoo Hidratante',
                'preco' => '49,90',
                'imagem' => 'shampoo-lowell1.webp',
                'descricao' => 'Ideal para cabelos secos',
                'categoria' => 'cabelos',
                'marca' => 'Lowell'
            ],
            [
                'nome' => 'Condicionador Reconstrutor',
                'preco' => '59,90',
                'imagem' => 'shampoo-lowell2.webp',
                'descricao' => 'Reconstrução profunda',
                'categoria' => 'cabelos',
                'marca' => 'Lowell'
            ],
            [
                'nome' => 'Kit Barba Completo',
                'preco' => '89,90',
                'imagem' => 'shampoo-lowell3.webp',
                'descricao' => '3 itens para barba perfeita',
                'categoria' => 'barba',
                'marca' => 'The Gentlemen'
            ],
            [
                'nome' => 'Máscara Capilar Profissional',
                'preco' => '79,90',
                'imagem' => 'shampoo-lowell4.webp',
                'descricao' => 'Para cabelos danificados',
                'categoria' => 'cabelos',
                'marca' => 'Lowell'
            ],
            [
                'nome' => 'Loção Pós-Barba',
                'preco' => '39,90',
                'imagem' => 'condicionador-lowell1.jpg',
                'descricao' => 'Hidratação pós-barba',
                'categoria' => 'barba',
                'marca' => 'The Gentlemen'
            ],
            [
                'nome' => 'Loção Pós-Barba',
                'preco' => '39,90',
                'imagem' => 'condicionador-lowell2.webp',
                'descricao' => 'Hidratação pós-barba',
                'categoria' => 'barba',
                'marca' => 'The Gentlemen'
            ],
            [
                'nome' => 'Loção Pós-Barba',
                'preco' => '39,90',
                'imagem' => 'condicionador-lowell3.webp',
                'descricao' => 'Hidratação pós-barba',
                'categoria' => 'barba',
                'marca' => 'Mr. Beard'
            ],
            [
                'nome' => 'Loção Pós-Barba',
                'preco' => '39,90',
                'imagem' => 'condicionador-lowell4.webp',
                'descricao' => 'Hidratação pós-barba',
                'categoria' => 'barba',
                'marca' => 'Mr. Beard'
            ]
        ];

        // Filtros vindos da URL
        $categoria = $request->input('categoria');
        $marcas = array_map('trim', (array) $request->input('marca', []));
        $busca = trim($request->input('busca'));

        // Aplicando filtro
        $produtosFiltrados = array_filter($produtos, function ($produto) use ($categoria, $marcas, $busca) {
            $matchCategoria = !$categoria || $produto['categoria'] === $categoria;
            $matchMarca = empty($marcas) || in_array($produto['marca'], $marcas);
            $matchBusca = !$busca || stripos($produto['nome'], $busca) !== false;
            return $matchCategoria && $matchMarca && $matchBusca;;
        });

        // Configuração da paginação
        $perPage = 4; // Produtos por página
        $page = $request->input('page', 1); // Página atual

        $produtosPaginados = new LengthAwarePaginator(
            array_slice($produtosFiltrados, ($page - 1) * $perPage, $perPage),
            count($produtosFiltrados),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->except('page')]
        );

        return view('produto', compact('produtosPaginados', 'categoria', 'marcas', 'busca'));
    }
}