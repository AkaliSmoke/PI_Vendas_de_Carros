let veiculos = Array.isArray(window.veiculos) ? window.veiculos.map(Number) : [];

function fnAtualizarCarrinho() {
    const campo = document.getElementById('veiculos');
    const contador = document.getElementById('numero_de_produtos');

    if (campo) campo.value = veiculos.join(',');
    if (contador) contador.textContent = veiculos.length;
}

function fnAdicionarNoCarrinho(idCarro) {
    idCarro = Number(idCarro);

    if (!veiculos.includes(idCarro)) {
        veiculos.push(idCarro);
        fnAtualizarCarrinho();
    }
}

function fnExcluir(idCarro) {
    idCarro = Number(idCarro);
    veiculos = veiculos.filter(id => id !== idCarro);
    document.getElementById(`linha${idCarro}`)?.remove();
    fnAtualizarCarrinho();

    // Reenvia os IDs atualizados para a página recalcular o total no PHP.
    document.getElementById('veiculos-formulario').submit();
}

function fnFecharCompra() {
    if (veiculos.length === 0) {
        alert('Adicione pelo menos um veículo ao carrinho.');
        return;
    }

    document.getElementById('veiculos_venda').value = veiculos.join(',');
    document.getElementById('total_venda').value = document.getElementById('total').dataset.valor;
    document.getElementById('form_venda').submit();
}

document.addEventListener('DOMContentLoaded', fnAtualizarCarrinho);
