<div class="container-fluid col-12">
    <div class="row justify-content-center"
         style="overflow-y: hidden; display: flex; flex-direction: row;">
        <div class="col-4 bg-white py-2" style="overflow-y: auto; height: calc(100vh - 4.5rem);">
            <form wire:submit.prevent="importCSV">
                <div class="w-100">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div wire:loading class="w-100">
                    <div class="alert alert-success">
                        Carregando...
                    </div>
                </div>
                <div wire:offline class="w-100">
                    <div class="alert alert-danger">
                        Sem conexão com a Internet
                    </div>
                </div>
                <fieldset>
                    <legend>Opções:</legend>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="mb-2">
                                <button type="button"
                                        class="btn btn-primary w-100"
                                        data-toggle="modal" data-target="#importCSV">
                                    Importar CSV
                                </button>

                                    <div class="modal fade"
                                         wire:ignore
                                         id="importCSV"
                                         tabindex="-1"
                                         aria-labelledby="importCSVLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="importCSVLabel">Importar CSV</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">selecione o arquivo .csv</label>
                                                        <input type="file"
                                                               class="form-control-file"
                                                               wire:model="csv"
                                                               accept=".txt,.csv"
                                                               name="csv"
                                                               id="exampleFormControlFile1">
                                                        @error('csv')
                                                        <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button"
                                                            class="btn btn-danger"
                                                            data-dismiss="modal">Cancelar</button>
                                                    <button type="submit"
                                                            data-toggle="modal"
                                                            data-target="#importCSV"
                                                            class="btn btn-success">Importar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            @if($tabelas)
                                <div class="mb-2 mt-3">
                                    <div class="form-group">
                                        <select class="form-control w-100"
                                                style="width: 150px;"
                                                wire:change="changeTable($event.target.value)"
                                                wire:model="csv_table">
                                            <option value="">Usar Tabela</option>
                                            @foreach($tabelas as $index => $tabela)
                                                <option value="{{$index}}">{{$index}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-2">
                                <button type="button"
                                        class="btn btn-success w-100"
                                        wire:loading.attr="disabled"
                                        wire:click="exportToHTML">
                                    Exportar HTML
                                </button>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Elementos:</legend>

                    <div class="mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Pré Cabeçalho</h5>

                                <button type="button"
                                        data-toggle="modal" data-target="#addPreHeader"
                                        class="btn btn-primary w-100" >Adicionar</button>

                                <form wire:submit.prevent="submit">
                                    <!-- Modal -->
                                    <div class="modal fade"
                                         wire:ignore
                                         id="addPreHeader"
                                         tabindex="-1"
                                         aria-labelledby="addPreHeaderLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addPreHeaderLabel">Adicionar Pré Cabeçalho</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="pre-header-text" class="form-label">Texto</label>
                                                        <input id="pre-header-text"
                                                               type="text"
                                                               wire:model="preHeaderText"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="pre-header-text" class="form-label">Link</label>
                                                        <input id="pre-header-link"
                                                               type="text"
                                                               wire:model="preHeaderLink"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="pre-header-largura" class="form-label">Largura</label>
                                                        <input id="pre-header-largura"
                                                               type="text"
                                                               wire:model="preHeaderLargura"
                                                               class="form-control">
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button"
                                                            class="btn btn-danger"
                                                            data-dismiss="modal">Cancelar</button>
                                                    <button type="button"
                                                            data-toggle="modal"
                                                            data-target="#addPreHeader"
                                                            wire:click="addPreHeader"
                                                            class="btn btn-success">Adicionar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Banner Promocional</h5>

                                <button type="button"
                                        data-toggle="modal" data-target="#addBanner"
                                        class="btn btn-primary w-100" >Adicionar</button>

                                <form wire:submit.prevent="submit">
                                    <!-- Modal -->
                                    <div class="modal fade"
                                         wire:ignore
                                         id="addBanner"
                                         tabindex="-1"
                                         aria-labelledby="addBannerLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addBannerLabel">Adicionar Banner</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Imagem</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               wire:model="headerBgImage_imagem"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Link</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               wire:model="headerBgImage_link"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                            class="btn btn-danger"
                                                            data-dismiss="modal">Cancelar</button>
                                                    <button type="button"
                                                            data-toggle="modal"
                                                            data-target="#addBanner"
                                                            wire:click="addHeaderBgImage"
                                                            class="btn btn-success">Adicionar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Seção</h5>

                                <button type="button"
                                        data-toggle="modal" data-target="#addSection"
                                        class="btn btn-primary w-100" >Adicionar</button>

                                <form wire:submit.prevent="submit">
                                    <!-- Modal -->
                                    <div class="modal fade"
                                         wire:ignore
                                         id="addSection"
                                         tabindex="-1"
                                         aria-labelledby="addSectionLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addSectionLabel">Adicionar Seção</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Título</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               wire:model="section_titulo"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Descrição</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               wire:model="section_descricao"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                            class="btn btn-danger"
                                                            data-dismiss="modal">Cancelar</button>
                                                    <button type="button"
                                                            data-toggle="modal"
                                                            data-target="#addSection"
                                                            wire:click="addSection"
                                                            class="btn btn-success">Adicionar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>

                                <button type="button"
                                        data-toggle="modal" data-target="#addItem"
                                        class="btn btn-primary w-100" >Adicionar</button>

                                <form wire:submit.prevent="submit">
                                    <!-- Modal -->
                                    <div class="modal fade"
                                         wire:ignore
                                         id="addItem"
                                         tabindex="-1"
                                         aria-labelledby="addItemLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addItemLabel">Adicionar Produto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Seção</label>

                                                            <select class="form-control"
                                                                    wire:model="item_section"
                                                                    id="exampleFormControlSelect1">
                                                                <option value="">Selecione a seção do item</option>
                                                                @foreach($sessoes as $index => $sessao)
                                                                    <option value="{{$index}}">{{$sessao['titulo']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Imagem</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               required
                                                               wire:model="item_imagem"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Título</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               required
                                                               wire:model="item_titulo"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Desconto</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               wire:model="item_desconto"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Preço Anterior</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               wire:model="item_preco_anterior"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Preço Atual</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               required
                                                               wire:model="item_preco_atual"
                                                               class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="header-bg-image" class="form-label">Link</label>
                                                        <input id="header-bg-image"
                                                               type="text"
                                                               required
                                                               wire:model="item_link"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                            class="btn btn-danger"
                                                            data-dismiss="modal">Cancelar</button>
                                                    <button type="button"
                                                            data-toggle="modal"
                                                            data-target="#addItem"
                                                            wire:click="addSectionItem"
                                                            class="btn btn-success">Adicionar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>
                        Elementos Adicionados:
                    </legend>

                    <div class="mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Validade das Ofertas</h5>

                                <form wire:submit.prevent="submit">
                                    <div class="mb-3">
                                        <label for="validade-{{$index}}" class="form-label">Data</label>
                                        <input type="date"
                                               id="validade-{{$index}}"
                                               value="{{date('Y-m-d', strtotime($validade))}}"
                                               pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}"                                               wire:change="changeValidade($event.target.value)"
                                               class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if($pre_headers)
                        @foreach($pre_headers as $index => $pre_header)
                            <div class="mb-3" wire:key="{{$index}}">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Pré Header {{$index + 1}}</h5>

                                        <form wire:submit.prevent="submit">
                                            <div class="mb-3">
                                                <label for="pre-header-text-{{$index}}" class="form-label">Texto</label>
                                                <input type="text"
                                                       id="pre-header-text-{{$index}}"
                                                       value="{{$pre_header['text']}}"
                                                       wire:change="changePreHeaderText({{$index}}, $event.target.value)"
                                                       class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label for="pre-header-link-{{$index}}" class="form-label">Link</label>
                                                <input id="pre-header-link-{{$index}}"
                                                       type="text"
                                                       value="{{$pre_header['link']}}"
                                                       wire:change="changePreHeaderLink({{$index}}, $event.target.value)"
                                                       class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label for="pre-header-largura-{{$index}}" class="form-label">Largura</label>
                                                <input id="pre-header-largura-{{$index}}"
                                                       type="number"
                                                       value="{{$pre_header['largura']}}"
                                                       wire:change="changePreHeaderLargura({{$index}}, $event.target.value)"
                                                       class="form-control">
                                            </div>

                                            <button type="button"
                                                    class="btn btn-danger w-100 mt-2"
                                                    wire:loading.attr="disabled"
                                                    wire:click="removePreHeader({{$index}})">Remover</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @if($headerBgImages)
                        @foreach($headerBgImages as $index => $headerBgImage)
                            <div class="mb-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Banner {{$index + 1}}</h5>

                                        <form wire:submit.prevent="submit">
                                            <div class="mb-3">
                                                <label for="header-bg-image-{{$index}}" class="form-label">Imagem</label>
                                                <input type="text"
                                                       id="header-bg-image-{{$index}}"
                                                       value="{{$headerBgImage['src']}}"
                                                       wire:change="changeBannerImage({{$index}}, $event.target.value)"
                                                       class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label for="header-bg-link-{{$index}}" class="form-label">Link</label>
                                                <input id="header-bg-link-{{$index}}"
                                                       type="text"
                                                       value="{{$headerBgImage['href']}}"
                                                       wire:change="changeBannerLink({{$index}}, $event.target.value)"
                                                       class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label for="header-bg-style-{{$index}}" class="form-label">Estilo</label>
                                                <input id="header-bg-style-{{$index}}"
                                                       type="text"
                                                       value="{{$headerBgImage['style']}}"
                                                       wire:change="changeBannerStyle({{$index}}, $event.target.value)"
                                                       class="form-control">
                                            </div>

                                            <button type="button"
                                                    class="btn btn-danger w-100 mt-2"
                                                    wire:loading.attr="disabled"
                                                    wire:click="removeHeaderBgImage({{$index}})">Remover</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @foreach($sessoes as $index => $sessao)
                        <div class="mb-3">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Seção "{{$sessao['titulo']}}"</h5>

                                    <form wire:submit.prevent="submit">
                                        <div class="mb-3">
                                            <label for="section-title-{{$index}}" class="form-label">Título</label>
                                            <input type="text"
                                                   id="section-title-{{$index}}"
                                                   value="{{$sessao['titulo']}}"
                                                   wire:change="changeSectionTitle({{$index}}, $event.target.value)"
                                                   class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="section-description-{{$index}}" class="form-label">Subtítulo</label>
                                            <input id="section-description-{{$index}}"
                                                   type="text"
                                                   value="{{$sessao['descricao']}}"
                                                   wire:change="changeSectionDescription({{$index}}, $event.target.value)"
                                                   class="form-control">
                                        </div>

                                        <button type="button"
                                                class="btn btn-danger w-100"
                                                wire:loading.attr="disabled"
                                                wire:click="removeSection({{$index}})">Remover</button>
                                    </form>

                                    <div class="mt-3">
                                        <ul class="list-group">
                                            @if(isset($sessao['itens']))
                                                @foreach($sessao['itens'] as $indexItem => $item)
                                                    <li class="list-group-item">
                                                        <form wire:submit.prevent="submit">
                                                            <setction>
                                                                <legend>Produto {{$indexItem+1}}</legend>

                                                                <div class="mb-3">
                                                                    <label for="item-image-{{$index}}" class="form-label">Imagem</label>
                                                                    <input type="text"
                                                                           id="item-image-{{$index}}"
                                                                           value="{{$item['imagem']}}"
                                                                           wire:change="changeItemImagem({{$index}}, {{$indexItem}}, $event.target.value)"
                                                                           class="form-control">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="item-title-{{$index}}" class="form-label">Nome</label>
                                                                    <input type="text"
                                                                           id="item-title-{{$index}}"
                                                                           value="{{$item['titulo']}}"
                                                                           wire:change="changeItemTitulo({{$index}}, {{$indexItem}}, $event.target.value)"
                                                                           class="form-control">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="item-desconto-{{$index}}" class="form-label">Desconto</label>
                                                                    <input type="text"
                                                                           id="item-desconto-{{$index}}"
                                                                           value="{{$item['desconto']}}"
                                                                           wire:change="changeItemDesconto({{$index}}, {{$indexItem}}, $event.target.value)"
                                                                           class="form-control">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="item-preco-de-{{$index}}" class="form-label">Preço DE</label>
                                                                    <input type="text"
                                                                           id="item-preco-de-{{$index}}"
                                                                           value="{{$item['preco-anterior']}}"
                                                                           wire:change="changeItemPrecoAnterior({{$index}}, {{$indexItem}}, $event.target.value)"
                                                                           class="form-control">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="item-preco-por-{{$index}}" class="form-label">Preço POR</label>
                                                                    <input type="text"
                                                                           id="item-preco-por-{{$index}}"
                                                                           value="{{$item['preco']}}"
                                                                           wire:change="changeItemPreco({{$index}}, {{$indexItem}}, $event.target.value)"
                                                                           class="form-control">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="item-link-{{$index}}" class="form-label">URL/Link</label>
                                                                    <input type="text"
                                                                           id="item-link-{{$index}}"
                                                                           value="{{$item['link']}}"
                                                                           wire:change="changeItemLink({{$index}}, {{$indexItem}}, $event.target.value)"
                                                                           class="form-control">
                                                                </div>

                                                                <button type="button"
                                                                        class="btn btn-danger w-100 mt-2"
                                                                        wire:loading.attr="disabled"
                                                                        wire:click="removeSectionItem({{$index}}, {{$indexItem}})">Remover</button>
                                                            </setction>
                                                        </form>
                                                    </li>
                                                @endforeach
                                            @else
                                                <li class="list-group-item">
                                                    <span>Nenhum item adicionado</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </fieldset>
            </form>
        </div>
        <div class="col-8">
            <iframe srcDoc="{{$template}}" width="100%" height="100%"></iframe>
        </div>
    </div>
</div>
