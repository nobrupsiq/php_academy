<?php
// 1. Visão geral
// Os arquivos DEVEM usar apenas as tags <?php e <?=.

// Os arquivos DEVEM usar apenas UTF-8 sem BOM para código PHP.

// Os arquivos DEVEM declarar símbolos (classes, funções, constantes, etc.) ou causar efeitos colaterais (por exemplo, gerar saída, alterar configurações .ini, etc.), mas NÃO DEVEM fazer as duas coisas.
// - Exemplo, um arquivo cria a classe e o outro arquivo faz as implementações dessa classe, os efeitos colaterais no caso.

// Os namespaces e classes DEVEM seguir um PSR de "carregamento automático": [PSR-0, PSR-4].

// Os nomes de classe DEVEM ser declarados em StudlyCaps.
class MatematicaBasica {}
// As constantes de classe DEVEM ser declaradas em letras maiúsculas com separadores de sublinhado.
const VERSION = '1.0';
// Os nomes de método DEVEM ser declarados em camelCase.
