var valores;
//index;

function insetetb(tpcarga, coeCusto, unidade, eixo2, eixo3, eixo4, eixo5, eixo6, eixo7, eixo9) {
    var tb = document.getElementById("tbfrete");
    var qtdlinhas = tb.rows.length;
    var linha = tb.insertRow(qtdlinhas);

    var linhas = linha.insertcell(0)
    var tpcarga = linha.insertcell(1);
    var coeCusto = linha.insertcell(2);
    var unidade = linha.insertcell(3);
    var ei2 = linha.insertcell(4);
    var ei3 = linha.insertcell(5);
    var ei4 = linha.insertcell(6);
    var ei5 = linha.insertcell(7);
    var ei6 = linha.insertcell(8);
    var ei7 = linha.insertcell(9);
    var ei9 = linha.insertcell(10);

    linhas.innerHTML = qtdlinhas;
    tpcarga.innerHTML = tpcarga;
    coeCusto.innerHTML = coeCusto;
    unidade.innerHTML = unidade;
    ei2.innerHTML = eixo2;
    ei3.innerHTML = eixo3;
    ei4.innerHTML = eixo4;
    ei5.innerHTML = eixo5;
    ei6.innerHTML = eixo6;
    ei7.innerHTML = eixo7;
    ei9.innerHTML = eixo9;

}

function update(eixo2, eixo4, eixo5, eixo6, eixo7, eixo9) {
    var tb = document.getElementsByid("tbfrete");
    var qtdlinhas = tb.rows.length;
    var linha = tb.insertRow(qtdlinhas);



}