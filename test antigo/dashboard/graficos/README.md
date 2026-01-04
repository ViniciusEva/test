# Dashboard Interativa

Este projeto apresenta uma dashboard moderna e interativa, inspirada no design **"Purity UI Dashboard"**. Ela foi desenvolvida para a visualização de dados em tempo real, combinando tecnologias de front-end e back-end para criar uma experiência dinâmica e responsiva.

---

### Tecnologias Utilizadas

* **HTML:** Utilizado para estruturar o esqueleto da página e os componentes da dashboard.
* **CSS:** Responsável pela estilização, cores e layout, garantindo um design limpo e profissional.
* **PHP:** Linguagem de back-end que processa a lógica de negócios e interage com o banco de dados. Sua principal função é gerar os dados dinâmicos em formato JSON.
* **JavaScript:** Atua no front-end, tornando a interface interativa. Ele é utilizado para buscar os dados via PHP e renderizar os gráficos e listas de forma dinâmica.

---

### Funcionalidades

#### Visualização de Dados e Gráficos
A dashboard utiliza bibliotecas JavaScript, como **Chart.js** ou **D3.js**, para a criação de gráficos interativos.
-   **Fluxo de Dados:** O PHP busca os dados mais recentes do banco de dados (ex: MySQL) e os formata em JSON. O JavaScript, por sua vez, consome esse JSON e usa a biblioteca de gráficos para exibir as informações em tempo real, como no gráfico de linha "Sales overview".

#### Ranking de Produtos e Projetos
As seções "Projects" e "Orders overview" exibem rankings e listas de itens mais relevantes.
-   **Geração Dinâmica:** O PHP executa consultas no banco de dados para identificar os produtos e projetos mais populares. Em seguida, ele utiliza um loop `foreach` para gerar o código HTML de cada item, garantindo que o ranking esteja sempre atualizado sem a necessidade de intervenção manual.

---

### Como Rodar o Projeto

1.  Clone este repositório.
2.  Configure um ambiente de servidor local com suporte a PHP (como **XAMPP** ou **WAMP**).
3.  Crie e configure um banco de dados, e atualize os arquivos PHP para que a conexão seja estabelecida corretamente.
4.  Coloque os arquivos do projeto no diretório raiz do seu servidor.
5.  Abra seu navegador e navegue até a URL do projeto (ex: `http://localhost/dashboard/`).