<?php
    require('scr/php/Utils.php');
    require('src/php/Database.php');

    if(!empty($_REQUEST['mdl']) && !empty($_REQUEST['file'])) {

        require("pages/{$_REQUEST['mdl']}/{$_REQUEST['file']}");

    } else {
        require('src/pages/header.php');
        require('src/pages/menu.php');
        echo '<main role="main" class="container">';

        if(!empty($_REQUEST['page'])) {

            switch($_REQUEST['page']) {

                case 'relVeiculo':
                    require('src/pages/relVeiculo/veiculo.php');
                    JSRequire('relVeiculo', 'RelVeiculo.js');
                    break;

                case 'relFuncionario':
                    require('src/pages/relFuncionario/funcionario.php');
                    JSRequire('relFuncionario', 'RelFuncionario.js');
                    break;

            }

        } else {
            require('src/pages/home/home.php');
        }

        echo '</main>';
        require('src/pages/footer.php');
    }
