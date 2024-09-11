<?php

$saldo = 0;
do {
    echo "***************\n";
    echo "Seja Bem-vindo \n";
    echo "***************\n";
    echo "Menu de opções \n";
    echo "1 - Depositar valor \n";
    echo "2 - Saldo \n";
    echo "3 - Sacar valor \n";
    echo "4 - Sair \n";

    echo "Escolha uma opção: ";
    $opcao = (int)(fgets(STDIN));

    switch ($opcao) {
        case 1:
            echo "Deposite um valor: ";
            $valor = (float)(fgets(STDIN));
            $saldo += $valor;
            echo "Depósito realiazado com suecesso! Seu novo saldo é $saldo \n";
            break;
        case 2:
            echo "Seu Saldo Atual é: R$ $saldo \n";
            break;
        
        case 3:
            echo "Digite o valor a ser sacado: \n";
            $valor = floatval(fgets(STDIN));
            if ($valor <= $saldo){
                $saldo -= $valor;
                echo "Saque realizado com sucesso! Saldo atual: R$ $saldo \n";
            }else{
                echo "Saldo Insuficiente \n";
            }
            break;
        case 4:
            echo "Saindo... \n";
            break;
        default:
            echo "Opção inválida! \n";      
    };
} while ($opcao !== 4);
