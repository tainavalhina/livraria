$(document).ready(function () {
    $("#produtoid").on("change", function () {

        var imagemproduto = $("#produtoid").val();
        //console.log(imagemproduto);

        var urlEnviada = document.getElementById("urlproduto").value;
        // alert(imagemproduto);
        $.ajax({
            url: urlEnviada,
            method: "get",
            data: {
                id: imagemproduto
            },
            success: function (resposta) {
                $("#produtoimagem").html(resposta);
                console.log(resposta);
            }

        });
    });

});

