<?php

require_once 'vendor/autoload.php'

// Criar o objeto de envio
 $produto = new MadeiraMadeira\Marketplace\Dominio\Produto\Produto();
 $produto->setSku('15586');
 $produto->setNome('Suporte de Parede Articulado ELG para TV de 50" a 60" F500 Preto');
 $produto->setDescricao('Suporte de Parede Articulado ELG para TV de 50" a 60" F500 Preto excelente para sua bla');
 $produto->setIdCategoria('245'); // Suportes Para TV < Suportes < Ferragens
 $produto->setEan('7898378705916');
 $produto->setMarca('ELG');
 $produto->setPrecoDe(149.99);
 $produto->setPrecoPor(129);
 $produto->setEstoque(0);
 $produto->setAltura(44);
 $produto->setLargura(34);
 $produto->setProfundidade(87.5);
 $produto->setPeso(4.5);

// Imagens
$produto->addImagem('http://static-img.cissamagazine.com.br/img/2017/07/produto/51616/suporte-de-parede-elg-para-tv-de-50-a-60-f500-preto.jpg');

// Atributos
$produto->addAtributo('Cor', 'Preto');
$produto->addAtributo('Suporte - Ajuste de Inclinação', '8° à -7°');
$produto->addAtributo('Características - Material', 'Alumínio');
$produto->addAtributo('Suporte - Aplicação', 'Parede');
$produto->addAtributo('Suporte - Giro Horizontal', '180° (Esquerda / Direita - Limitado ao Tamanho da Tela da TV)');
$produto->addAtributo('Suporte - Rotação de Tela', '3° à -3°');
$produto->addAtributo('Características - Ajustável', 'Sim');
$produto->addAtributo('Suporte - Regulagem de Altura', 'Sim');
$produto->addAtributo('Suporte - Compatibilidade', 'TVs Plasma/3D/LCD/LED;');
$produto->addAtributo('Suporte - Carga Máxima', 'Suporta Até 14 a 23 kg para Cada TV;');

$lote = new MadeiraMadeira\Marketplace\Dominio\Lote();
$lote->add($produto);
$sender = $this->getSender();
$envio = $sender->enviarProdutoLote($lote);
if ($envio->isSuccess()) {
    echo 'Registros Enviado!' . PHP_EOL;
} else {
    echo 'ERRO : ' . $envio->getResponseString() . PHP_EOL;
}