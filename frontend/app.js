async function getData(){
    const URL = "http://127.0.0.1:8000";

    try{
        const res = await fetch(URL);
        const data = await res.json();

        render(data);
    }catch(err){
        console.error(err);
    }
}

function setText(id, text){
    document.getElementById(id).textContent = text;
}

function createElement(tag, text){
    const element = document.createElement(tag);
    if(text !== undefined) element.textContent = text;
    return element;
}

function render(data){
    const { titulo, descricao, pontos_fortes_e_filosofia, pre_requisitos_e_setup, codigo_do_servidor, conclusao } = data;

    setText("atividade", titulo.atividade);
    setText("subtitulo", `${titulo.tecnologia} com ${titulo.framework}`);
    setText("participantes", "Participantes: " + titulo.participantes.join(", "));
    setText("info-academica", `${titulo.disciplina} — ${titulo.instituicao} — Prof. ${titulo.professor}`);

    setText("descricao-tecnologia", descricao.tecnologia);
    setText("descricao-objetivo", descricao.objetivo);

    const pontosFortes = document.getElementById("pontos-fortes");
    pontos_fortes_e_filosofia.pontos_fortes.forEach(ponto => {
        const card = createElement("article");
        card.append(createElement("h3", ponto.titulo), createElement("p", ponto.descricao));
        pontosFortes.append(card);
    });
    setText("filosofia", pontos_fortes_e_filosofia.filosofia);
    setText("caso-de-uso", pontos_fortes_e_filosofia.caso_de_uso_ideal);

    const softwares = document.getElementById("softwares");
    pre_requisitos_e_setup.softwares_necessarios.forEach(software => {
        const linha = createElement("tr");
        linha.append(createElement("td", software.nome), createElement("td", software.finalidade));
        softwares.append(linha);
    });

    const comandos = document.getElementById("comandos");
    pre_requisitos_e_setup.comandos_instalacao.forEach(item => {
        const li = createElement("li", item.descricao + ": ");
        li.append(createElement("code", item.comando));
        comandos.append(li);
    });
    setText("observacao", pre_requisitos_e_setup.observacao);

    setText("arquivo", codigo_do_servidor.arquivo);
    setText("codigo-descricao", codigo_do_servidor.descricao);
    setText("codigo-fonte", codigo_do_servidor.codigo_fonte);
    setText("comando-execucao", codigo_do_servidor.comando_execucao);
    const url = document.getElementById("url-principal");
    url.textContent = codigo_do_servidor.url_principal;
    url.href = codigo_do_servidor.url_principal;
    setText("protocolo", codigo_do_servidor.protocolo);
    setText("metodo", codigo_do_servidor.metodo_http);
    setText("formato", codigo_do_servidor.formato_resposta);

    const funcionamento = document.getElementById("funcionamento");
    codigo_do_servidor.funcionamento.forEach(passo => {
        funcionamento.append(createElement("li", passo));
    });

    setText("dificuldade", conclusao.principal_dificuldade);
    setText("recomendacao", conclusao.recomendacao_final);
}

getData();
