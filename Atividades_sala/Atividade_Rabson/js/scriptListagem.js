const tbody = document.querySelector("tbody");
const cadForm = document.getElementById("cad-usuario-form");
const msgAlerta = document.getElementById("msgAlerta");
const visu = document.getElementById('visu'); 

listarClientes();

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dadosForm = new FormData(cadForm);
    dadosForm.append("add", 1);
    console.log(dadosForm);

    const dados = await fetch("cadastro.php", {
        method: "POST",
        body: dadosForm,
    });

    const resposta = await dados.json();
    console.log(resposta);
});

function apagar(id) {
    if (confirm("Tem certeza que deseja excluir este cliente?")) {
        fetch(`../php/apagar.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                alert(data.msg);
                if (data.reload) {
                    setTimeout(() => {
                        location.reload(); 
                    }, 100); 
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert("Ocorreu um erro ao tentar excluir o cliente.");
            });
    }
}

function abrir(nome, email, senha, endereco, cartao) {
    document.getElementById('modalNome').innerText = nome;
    document.getElementById('modalEmail').innerText = email;
    document.getElementById('modalSenha').innerText = senha;
    document.getElementById('modalEndereco').innerText = endereco;
    document.getElementById('modalCartao').innerText = cartao;
}
