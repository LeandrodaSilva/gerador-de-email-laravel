<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmailTemplate extends Component
{
    use WithFileUploads;

    public $csv;
    public string $template = "";
    public array $headerBgImages = [];

    public string $preHeaderText = "";
    public string $preHeaderLink = "";
    public string $preHeaderLargura = "";

    public string $headerBgImage_link = "";
    public string $headerBgImage_imagem = "";

    public array $sessoes = [];
    public string $section_titulo = "";
    public string $section_descricao = "";

    public string $item_section = "";
    public string $item_imagem = "";
    public string $item_titulo = "";
    public string $item_desconto = "";
    public string $item_preco_anterior = "";
    public string $item_preco_atual = "";
    public string $item_link = "";

    public array $tabelas = [];
    public $csv_table;
    public $selectedTable;

    public string $validade = "";

    public array $pre_headers = [];

    public function mount()
    {
        $this->pre_headers = [
          [
              'text' => "O Clã agora tá de roupa nova!",
              'link' => "",
              'largura' => '360',
          ],
          [
              'text' => "veja no navegador",
              'link' => "",
              'largura' => '200',
          ]
        ];
        $this->headerBgImages = [
            [
                'href' => "https://www.uphillstore.com.br/nova-colecao-2021",
                'src' => "http://www.zazumaster.com/images/logo.png",
                'style' => "max-width: 200px;"
            ],
            [
                'href' => "https://www.uphillstore.com.br/nova-colecao-2021",
                'src' => "http://www.zazumaster.com/images/up_hills_.jpg",
                'style' => "width: 100%;"
            ]
        ];

        $this->sessoes = [
            [
                'titulo' => "MAIS OFERTAS",
                'descricao' => "APROVEITE OS DESCONTOS",
                'itens' => [
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ]
                ]
            ],
            [
                'titulo' => "MAIS OFERTAS 2",
                'descricao' => "APROVEITE OS DESCONTOS",
                'itens' => [
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ],
                    [
                        'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                        'titulo' => "Camiseta Masculina Uphill Aqui se Fabrica lendas",
                        'desconto' => "",
                        'preco-anterior' => "",
                        'preco' => "59,90",
                        'link' => "https://www.uphillstore.com.br/camiseta-masculina-uphill-aqui-se-fabrica-lendas"
                    ]
                ]
            ]
        ];

        $this->validade = date('d-m-Y');

        $this->updateTemplate();
    }

    private function updateTemplate()
    {
        $this->template = view('template.email', [
            'pre_headers' => $this->pre_headers,
            'headerBgImages' => $this->headerBgImages,
            'sessoes' => $this->sessoes,
            'validade' => $this->validade
        ])->render();
    }

    public function importCSV()
    {
        $this->validate([
            'csv' => 'required|max:1024', // 1MB Max
        ]);

        $planilha = str_getcsv($this->csv->get());
        $tabelas = [];
        $data = "";
        foreach ($planilha as $index => $linha) {
            if (preg_match("/EMAIL ([0123456789])*\/([0123456789])*\w+/", $linha)) {
                $data = $linha;
                $data = str_replace(array("\r\n", "\n", "\r"), '', $data);
                $tabelas[$data]['banners'] = [];
                $tabelas[$data]['itens'] = [];
            }
            if (preg_match("/ASSUNTO: .*/", $linha)) {
                $tabelas[$data]['assunto'] = str_replace("ASSUNTO: ", '', $linha);
            }
            if (preg_match("/CABEÇALHO: .*/", $linha)) {
                $tabelas[$data]['cabecalho'] = str_replace("CABEÇALHO: ", '', $linha);
            }
            if (preg_match("/.*\r\nBanner [1234567890].*/", $linha)) {
                $url = $index + 6;
                preg_match_all('/https?:\/\/[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|\/))*/', $planilha[$url], $link);
                array_push($tabelas[$data]['banners'], [
                    'href' => implode("", $link[0])
                ]);
            }
            if (preg_match("/.*\r\nProduto [1234567890].*/", $linha)) {
                $nome = $index + 1;
                $preco_anterior = $index + 2;
                $preco_atual = $index + 3;
                $desconto = $index + 4;
                $parcelamento = $index + 5;
                $url = $index + 6;
                preg_match_all('/https?:\/\/[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|\/))*/', $planilha[$url], $linkProduto);
                array_push($tabelas[$data]['itens'], [
                    'titulo' => $planilha[$nome],
                    'preco-anterior' => $planilha[$preco_anterior],
                    'preco' => $planilha[$preco_atual],
                    'desconto' => $planilha[$desconto],
                    'parcelamento' => $planilha[$parcelamento],
                    'link' => implode("", $linkProduto[0])
                ]);
            }
        }

        $this->tabelas = $tabelas;

        session()->flash('message', 'Arquivo importado com sucesso!!');
    }

    public function changeTable($index) {
        $this->selectedTable = $this->tabelas[$index];

        $this->headerBgImages = [];

        foreach ($this->selectedTable['banners'] as $banner) {
            array_push($this->headerBgImages, [
               'href' =>  $banner['href'],
               'src' => "",
               'style' => "width: auto;"
            ]);
        }

        $this->sessoes = [
            [
                'titulo' => $this->selectedTable['assunto'],
                'descricao' => $this->selectedTable['cabecalho'],
                'itens' => []
            ]
        ];

        foreach ($this->selectedTable['itens'] as $item) {
            array_push($this->sessoes[0]['itens'], [
                'imagem' => "https://cdn.awsli.com.br/800x800/1733/1733261/produto/8769117389f3bc6bfe.jpg",
                'titulo' => $item['titulo'],
                'desconto' => $item['desconto'],
                'preco-anterior' => $item['preco-anterior'],
                'preco' => $item['preco'],
                'link' => $item['link']
            ]);
        }

        $this->updateTemplate();
    }

    public function changePreHeaderText($index, $src) {
        $this->pre_headers[$index]['text'] = $src;
        $this->updateTemplate();
    }

    public function changePreHeaderLink($index, $value) {
        $this->pre_headers[$index]['link'] = $value;
        $this->updateTemplate();
    }

    public function changePreHeaderLargura($index, $value) {
        $this->pre_headers[$index]['largura'] = $value;
        $this->updateTemplate();
    }

    public function changeValidade($value) {
        $this->validade = $value;
        $this->updateTemplate();
    }

    public function changeBannerImage($index, $src) {
        $this->headerBgImages[$index]['src'] = $src;
        $this->updateTemplate();
    }

    public function changeBannerStyle($index, $value) {
        $this->headerBgImages[$index]['style'] = $value;
        $this->updateTemplate();
    }

    public function changeBannerLink($index, $value) {
        $this->headerBgImages[$index]['href'] = $value;
        $this->updateTemplate();
    }

    public function changeSectionTitle($index, $title) {
        $this->sessoes[$index]['titulo'] = $title;
        $this->updateTemplate();
    }

    public function changeSectionDescription($index, $description) {
        $this->sessoes[$index]['descricao'] = $description;
        $this->updateTemplate();
    }

    public function changeItemImagem($index, $item, $title) {
        $this->sessoes[$index]['itens'][$item]['imagem'] = $title;
        $this->updateTemplate();
    }

    public function changeItemTitulo($index, $item, $title) {
        $this->sessoes[$index]['itens'][$item]['titulo'] = $title;
        $this->updateTemplate();
    }

    public function changeItemDesconto($index, $item, $title) {
        $this->sessoes[$index]['itens'][$item]['desconto'] = $title;
        $this->updateTemplate();
    }

    public function changeItemPrecoAnterior($index, $item, $title) {
        $this->sessoes[$index]['itens'][$item]['preco-anterior'] = $title;
        $this->updateTemplate();
    }

    public function changeItemPreco($index, $item, $title) {
        $this->sessoes[$index]['itens'][$item]['preco'] = $title;
        $this->updateTemplate();
    }

    public function changeItemLink($index, $item, $title) {
        $this->sessoes[$index]['itens'][$item]['link'] = $title;
        $this->updateTemplate();
    }

    public function addHeaderBgImage()
    {
        $validatedData = $this->validate([
            'headerBgImage_link' => 'required',
            'headerBgImage_imagem' => 'required'
        ]);

        array_push($this->headerBgImages, [
            'href' => $validatedData['headerBgImage_link'],
            'src' => $validatedData['headerBgImage_imagem']
        ]);

        $this->updateTemplate();

        $this->headerBgImage_imagem = "";
        $this->headerBgImage_link = "";
    }

    public function addPreHeader()
    {
        $validatedData = $this->validate([
            'preHeaderText' => 'required',
            'preHeaderLink' => 'nullable',
            'preHeaderLargura' => 'nullable'
        ]);

        array_push($this->pre_headers, [
            'text' => $validatedData['preHeaderText'],
            'link' => $validatedData['preHeaderLink'],
            'largura' => $validatedData['preHeaderLargura']
        ]);

        $this->updateTemplate();

        $this->preHeaderText = "";
        $this->preHeaderLink = "";
        $this->preHeaderLargura = "";
    }

    public function addSection()
    {
        $validatedData = $this->validate([
            'section_titulo' => 'required',
            'section_descricao' => 'required'
        ]);

        array_push($this->sessoes, [
            'titulo' => $validatedData['section_titulo'],
            'descricao' => $validatedData['section_descricao'],
            'itens' => []
        ]);

        $this->updateTemplate();

        $this->headerBgImage_imagem = "";
        $this->headerBgImage_link = "";
    }

    public function removeHeaderBgImage($index)
    {
        if (isset($this->headerBgImages[$index])) unset($this->headerBgImages[$index]);

        $this->updateTemplate();
    }

    public function removePreHeader($index)
    {
        if (isset($this->pre_headers[$index])) unset($this->pre_headers[$index]);

        $this->updateTemplate();
    }

    public function exportToHTML()
    {
        return response()->streamDownload(function () {
            echo $this->template;
        }, 'template.html');
    }

    public function removeSection($index)
    {
        if (isset($this->sessoes[$index])) unset($this->sessoes[$index]);

        $this->updateTemplate();
    }

    public function removeSectionItem($indexSection, $indexItem)
    {
        if (isset($this->sessoes[$indexSection]['itens'][$indexItem]))
            unset($this->sessoes[$indexSection]['itens'][$indexItem]);

        $this->updateTemplate();
    }

    public function addSectionItem()
    {
        $validatedData = $this->validate([
            'item_section' => 'required',
            'item_imagem' => 'required',
            'item_titulo' => 'required',
            'item_desconto' => 'nullable',
            'item_preco_anterior' => 'nullable',
            'item_preco_atual' => 'required',
            'item_link' => 'required',
        ]);

        array_push($this->sessoes[(int)$validatedData['item_section']]['itens'], [
            'imagem' => $validatedData['item_imagem'],
            'titulo' => $validatedData['item_titulo'],
            'desconto' => $validatedData['item_desconto'],
            'preco-anterior' => $validatedData['item_preco_anterior'],
            'preco' => $validatedData['item_preco_atual'],
            'link' => $validatedData['item_link']
        ]);

        $this->updateTemplate();

        $this->item_section = "";
        $this->item_imagem = "";
        $this->item_titulo = "";
        $this->item_desconto = "";
        $this->item_preco_anterior = "";
        $this->item_preco_atual = "";
        $this->item_link = "";
    }

    public function render()
    {
        return view('livewire.email-template', [
            'template' => $this->template
        ]);
    }
}
