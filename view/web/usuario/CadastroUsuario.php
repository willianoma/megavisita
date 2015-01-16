
<div style="
     margin: 20px">
    <form method="POST" action="?controller=Usuario&acao=cadastrarUsuario">
        <table>
            <tr>
                <td>
                    <label>Nome:</label>
                </td>
                <td>
                    <input type="text" name="nomeUsuario">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Senha:</label>
                </td>
                <td>
                    <input type="password" name="senhaUsuario">
                </td>
            </tr>

            <tr>
                <td>
                    <label>CPF:</label>
                </td>
                <td>
                    <input type="text" name="cpfUsuario">
                </td>
            </tr>

            <tr>
                <td>
                    <label>E-Mail:</label>
                </td>
                <td>
                    <input type="text" name="emailUsuario">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Empresa:</label>
                </td>
                <td>
                    <select  name="funcaoUsuario" required="">
                        <option selected value="">Empresas</option>

                        <?php
                        $listaEmpresa = $_REQUEST['listaEmpresa'];
                        foreach ($listaEmpresa as $empresa) {
                            $razao = $empresa->getRazaoSocial();
                            echo "<option value='$razao'>$razao</option>";
                        }
                        ?>
                    </select>

                </td>
            </tr>

            <tr>
                <td>
                    <label>Permicao:</label>
                </td>
                <td>
                    <select name="permicaoUsuario">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                        <option value="clientes">clientes</option>
                    </select>
                    <!--<input type="text" name="permicaoUsuario">-->
                </td>
            </tr>

        </table>











        <input type="submit" value="Cadastrar" name="botao"/>
    </form>

</div>