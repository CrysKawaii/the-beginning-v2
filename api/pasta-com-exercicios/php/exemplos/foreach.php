
<?php
        $lista = [];
            
        for ($i = 0; $i <= 50; $i += 5)
        {
            $lista[] += $i;
        }

        foreach ($lista as $chave => $valor)
        {
            echo "$chave => $valor";
        }
    ?>
                    