<div class="w-100 d-flex justify-content-center" style="margin-top:6em;">

<h3 class= "w-100 d-flex text-center justify-content-center">
 
 Realize o pagamento(PIX) para finalizar a compra </h3>

 </div>

 <div class= " d-flex scol-12">
 <div class="col-6 d-flex justify-content-end text-center flex-wrap" >

 <?php echo $this->Html->image('qrcode-pix.png', ['class' => 'card-img-top', 'style' => 'height: 300px; width:300px;']); 
?><p class="card-text text-end w-100 "  style="margin-right:2em;">
<?php echo "Pagamento QR code"; ?>
</p>



</div>




<div class="col-6 d-flex justify-content-start flex-wrap ">
<div class=" d-flex  text-center flex-wrap">
            <div class = "card text-bg-light" style="width: 18rem; --bs-card-border-radius:0;">
                <div class="d-flex card-body  flex-wrap" style="width: 18rem;">

                    
                    <?php echo $this->Html->image($compra->imagem, ['class' => 'card-img-top', 'style' => 'height: 300px;']); ?>
                    <h5 class="card-title w-100 text-center"> <?= ($compra['nome_produto']); ?></h5>
                    <p class="card-text text-center w-100 "> <?= h($compra->descricao) ?></p>

                    </div>
                    
                   </div> </div>
   
                  
</div></div>
