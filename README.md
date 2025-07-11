# PDFBuilder - Geração de PDFs com Laravel + Snappy (wkhtmltopdf)

Este projeto tem como objetivo gerar arquivos PDF a partir de layouts HTML/CSS com alta fidelidade visual, utilizando Laravel e o pacote `barryvdh/laravel-snappy`, que integra o `wkhtmltopdf` ao framework.

---

## Requisitos

* PHP >= 8.1
* Composer
* Laravel >= 10
* Docker (utilizado para garantir compatibilidade com o wkhtmltopdf)

---

## Instalação e Execução com Docker

> Este projeto foi configurado para rodar preferencialmente em ambiente Docker, garantindo compatibilidade total com o `wkhtmltopdf`.

1. **Clone o repositório:**

```bash
git clone https://github.com/seuusuario/pdfbuilder.git
cd pdfbuilder
```

2. **Build e subida dos containers:**

```bash
docker-compose up -d --build
```

3. **Execute comandos dentro do container:**

```bash
docker exec -it pdfbuilder-app bash
composer install
php artisan key:generate
```

4. **Acesse o projeto:**

```
http://localhost:8000/gerar-pdf
```

---

## Gerando um PDF

A rota principal para geração do PDF é:

```
GET http://localhost:8000/gerar-pdf
```

O PDF será renderizado diretamente no navegador ou baixado, dependendo do cabeçalho HTTP configurado na resposta. A geração usa dados mockados definidos no controlador.

> **Nota:** Caso queira alterar os dados mockados que serão renderizados no PDF, acesse o arquivo `app/Http/Controllers/PdfController.php` e edite a constante da classe `PdfMockData` na linha 10. Isso permite trocar rapidamente entre diferentes modelos de dados para testes.

---

## Estrutura do Projeto

* `routes/web.php` - Define a rota `/gerar-pdf` para geração do PDF
* `app/Http/Controllers/PdfController.php` - Controlador responsável pela lógica de geração
* `resources/views/pdf` - Contém os arquivos Blade com o layout do PDF
* `public/assets` - Imagens e arquivos estáticos usados no PDF