## Trabalho A1_02

### Matéria: Prog. Full Stack

Trabalho feito por: Andrelise e Jurandi

## Instalação

1. Para utilização do sistema, primeiramente é preciso ter os seguintes recursos instalados na máquina:

- VS Code;
- PHP;
- PHP Composer;
- MySQL (com o banco devidamente configurado);

Após isso, renomeie o arquivo *.env.example* para *.env* e mude as seguintes variáveis conforme o seu ambiente:

```dotenv
DB_CONNECTION= sua conexão
DB_HOST= seu host
DB_PORT= sua porta
DB_DATABASE= seu database
DB_USERNAME= seu username
DB_PASSWORD= seu password
```

Após isso, entre na raiz do projeto e faça o seguinte:

Instale as bibliotecas do projeto:
```bash
composer install
```

Rode as migrations:
```bash
php artisan migrate
```

Inicie o servidor Laravel:
```bash
php artisan serve
```


Após isso, a seguinte mensagem deverá aparecer no terminal:

![img2_resultado_comando](https://cdn.discordapp.com/attachments/718230944062111807/1230305790548774923/image.png?ex=6632d68e&is=6620618e&hm=9249997eafb05470056b7de459a05a65c528df61dca092d0bb8a50448b6c3265&)

---

####  Quando acessado, a página terá essa interface e poderá ser utilizado:

![img1_tela_inicial](https://cdn.discordapp.com/attachments/718230944062111807/1230296535091118203/image.png?ex=6632cdef&is=662058ef&hm=2f83ca4e4814a1a24730d118612b27a9adc8f088ad6eaa5f3b2a83dbc020c987&)
