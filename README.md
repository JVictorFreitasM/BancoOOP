# 💰 BancoOOP - Simulador de Conta Bancária em PHP

Este projeto é uma simulação de uma conta bancária desenvolvida em PHP, com funcionalidades básicas como abertura de conta, depósitos, saques e pagamento de mensalidades. Ele serve como exemplo didático para introduzir conceitos de **Programação Orientada a Objetos (POO)** em PHP.

🔗 Repositório: [github.com/JVictorFreitasM/BancoOOP](https://github.com/JVictorFreitasM/BancoOOP)

![poo](https://github.com/user-attachments/assets/8f15e40d-e5d8-4d0b-9af0-dd3766173564)


## 📦 Funcionalidades

- Abrir conta (Corrente ou Poupança)
- Fechar conta (respeitando saldo existente)
- Depositar valores
- Sacar valores
- Pagar mensalidade da conta
- Controle de acesso a atributos com diferentes níveis de visibilidade (público, protegido e privado)

## 🛠️ Tecnologias Utilizadas

- PHP 7+
- Paradigma de Programação Orientada a Objetos (POO)

## 📄 Classe: `ContaBanco`

### Atributos

| Atributo     | Visibilidade | Descrição                                                   |
|--------------|--------------|---------------------------------------------------------------|
| `numConta`   | `public`     | Número da conta                                              |
| `tipo`       | `protected`  | Tipo da conta (`CC` para corrente ou `CP` para poupança)     |
| `dono`       | `private`    | Nome do titular da conta                                     |
| `saldo`      | `private`    | Saldo atual da conta                                         |
| `status`     | `private`    | Status da conta (ativa ou inativa)                          |

### Métodos Principais

| Método              | Descrição                                                                 |
|---------------------|---------------------------------------------------------------------------|
| `abrirConta($tipo)` | Abre uma conta com saldo inicial, baseado no tipo (`CC` ou `CP`)         |
| `fecharConta()`     | Fecha a conta se o saldo for igual a zero                                |
| `depositar($valor)` | Realiza um depósito na conta ativa                                       |
| `sacar($valor)`     | Efetua um saque, se houver saldo suficiente                              |
| `pagarMensal($valor)`| Desconta a mensalidade baseada no tipo da conta                         |
| Getters/Setters     | Permitem acesso controlado aos atributos da classe                       |

## 📚 Como Executar

1. Clone o repositório:
    ```bash
    git clone https://github.com/JVictorFreitasM/BancoOOP.git
    cd BancoOOP
    ```

2. Execute com um servidor local (exemplo com PHP embutido):
    ```bash
    php -S localhost:8000
    ```

3. Crie um arquivo de teste (ex.: `index.php`) com o seguinte exemplo:

    ```php
    <?php
    require_once 'Contabanco.php';

    $conta1 = new ContaBanco();
    $conta1->setDono("João");
    $conta1->abrirConta("CC");
    $conta1->depositar(100);
    $conta1->sacar(30);
    $conta1->fecharConta();
    ?>
    ```

## ✍️ Autor

Desenvolvido por [JVictorFreitasM](https://github.com/JVictorFreitasM) com fins educacionais.

---

