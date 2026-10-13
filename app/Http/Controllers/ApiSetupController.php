<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiSetupController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'titulo' => [
                'atividade' => 'Atividade Prática - Servidores',
                'tecnologia' => 'PHP',
                'framework' => 'Laravel',
                'participantes' => [
                    'Matheus Vaz',
                    'Mauricio Vaz'
                ],
                'disciplina' => 'Programação Web',
                'instituicao' => 'Universidade do Vale do Itajaí - UNIVALI',
                'professor' => 'Welington Gadelha'
            ],

            'descricao' => [
                'tecnologia' => 'PHP é uma linguagem de programação utilizada no desenvolvimento web no lado do servidor. Laravel é um framework PHP que oferece ferramentas para desenvolver aplicações web e APIs.',
                'objetivo' => 'Apresentar as características, vantagens, requisitos de instalação, implementação e conclusão sobre o uso de PHP com Laravel.'
            ],

            'pontos_fortes_e_filosofia' => [
                'pontos_fortes' => [
                    [
                        'titulo' => 'Produtividade no desenvolvimento',
                        'descricao' => 'O Laravel disponibiliza recursos para roteamento, validação de dados e respostas JSON.'
                    ],
                    [
                        'titulo' => 'Arquitetura organizada',
                        'descricao' => 'Incentiva a separação de responsabilidades por meio de rotas, controllers e models.'
                    ],
                    [
                        'titulo' => 'Ecossistema integrado',
                        'descricao' => 'Oferece ferramentas para banco de dados, migrations, autenticação e filas.'
                    ],
                    [
                        'titulo' => 'Desenvolvimento de APIs',
                        'descricao' => 'Permite criar endpoints HTTP que retornam respostas em JSON.'
                    ],
                    [
                        'titulo' => 'Comunidade e documentação',
                        'descricao' => 'Possui documentação oficial e uma comunidade ativa de desenvolvedores.'
                    ]
                ],
                'filosofia' => 'O Laravel busca tornar o desenvolvimento web mais produtivo e organizado.',
                'caso_de_uso_ideal' => 'Sistemas web, APIs REST, plataformas administrativas e aplicações comerciais.'
            ],

            'pre_requisitos_e_setup' => [
                'softwares_necessarios' => [
                    [
                        'nome' => 'PHP',
                        'finalidade' => 'Executar o código da aplicação.'
                    ],
                    [
                        'nome' => 'Composer',
                        'finalidade' => 'Gerenciar as dependências PHP.'
                    ],
                    [
                        'nome' => 'Laravel',
                        'finalidade' => 'Framework utilizado na construção do servidor.'
                    ],
                    [
                        'nome' => 'Visual Studio Code',
                        'finalidade' => 'Editar os arquivos do projeto.'
                    ],
                    [
                        'nome' => 'Navegador ou cliente HTTP',
                        'finalidade' => 'Acessar e testar a API.'
                    ]
                ],
                'comandos_instalacao' => [
                    [
                        'descricao' => 'Verificar PHP',
                        'comando' => 'php -v'
                    ],
                    [
                        'descricao' => 'Verificar Composer',
                        'comando' => 'composer --version'
                    ],
                    [
                        'descricao' => 'Criar projeto Laravel',
                        'comando' => 'laravel new example-app'
                    ],
                    [
                        'descricao' => 'Entrar na pasta do projeto',
                        'comando' => 'cd example-app'
                    ],
                    [
                        'descricao' => 'Instalar o suporte a API',
                        'comando' => 'php artisan install:api'
                    ],
                    [
                        'descricao' => 'Iniciar servidor',
                        'comando' => 'php artisan serve'
                    ]
                ],
                'observacao' => 'A versão do PHP deve ser compatível com a versão do Laravel utilizada.'
            ],

            'codigo_do_servidor' => [
                'arquivo' => 'routes/api.php',
                'descricao' => 'A rota principal retorna esta documentação como resposta HTTP em JSON.',
                'codigo_fonte' => <<<'PHP'
                <?php

                use Illuminate\Support\Facades\Route;
                use App\Http\Controllers\ApiSetupController;

                Route::get('/', ApiSetupController::class);
                PHP,
                'comando_execucao' => 'php artisan serve',
                'url_principal' => 'http://127.0.0.1:8000/',
                'protocolo' => 'HTTP',
                'metodo_http' => 'GET',
                'formato_resposta' => 'application/json',
                'funcionamento' => [
                    'O cliente envia uma requisição GET.',
                    'O Laravel identifica a rota principal.',
                    'A aplicação processa os dados.',
                    'O servidor retorna a resposta em JSON.'
                ]
            ],

            'conclusao' => [
                'principal_dificuldade' => 'Uma dificuldade inicial possível é compreender a estrutura do Laravel e configurar o suporte a API na aplicação.',
                'recomendacao_final' => 'PHP com Laravel é uma opção adequada para desenvolver aplicações web e APIs com produtividade e organização.',
            ]
        ]);
    }
}
