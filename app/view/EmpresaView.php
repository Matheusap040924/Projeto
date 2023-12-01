<?php

class EmpresaView
{

    // Método para exibir a lista de empresas
    public function exibirEmpresas()
    {

        echo "<h3>Lista de Empresas</h3>";
        echo "<table border='1'>";

        echo "<tr> 

                <th>Cnpj</th>
                <th>Nome</th> 
                <th>Endereco</th>
                <th>Telefone</th>
                
            </tr>    
        ";
        echo "</table>";
    }


}



?>