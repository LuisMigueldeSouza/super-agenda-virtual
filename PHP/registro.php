<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <main>
        <section>
            <form action="../index.php" method="post">
                <label for="nome">Nome Próprio:</label>
                <input type="text" name="nome" id="nome">

                <label for="apelido">Apelido:</label>
                <input type="text" name="apelido" id="apelido">
                
                <label for="curso">Selecione seu curso:</label>
                <select name="curso" id="curso">
                        <option value="PI">Programador Informático</option>
                        <option value="TD">Técnico Desporto</option>
                        <option value="TM">Técnico Multimédia</option>
                        <option value="CMRPP">Marketing</option>
                        <option value="TMD">Teatro</option>
                        <option value="OE">Organizador de Eventos</option>
                        <option value="AT">Animações Turísticas</option>
                </select>    
                
                <select name="ano_letivo" id="ano_letivo">
                        <option value="1º">10º ano</option>
                        <option value="2º">11º ano</option>
                        <option value="3º">12º ano</option>
                </select>

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
                    
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required minlength=8 maxlength=64>

                <input type="submit" value="Registrar">
            </form>
        </section>
    </main>
</body>
</html>

<?php

?>