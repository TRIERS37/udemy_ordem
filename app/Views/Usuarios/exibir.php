<?php echo $this->extend('Layout/principal');?>

<?php echo $this->section('titulo');?>

<?php echo $titulo;?>

<?php echo $this->endSection();?>

<?php echo $this->section('estilos');?>



<?php echo $this->endSection();?>


<?php echo $this->section('conteudo');?>

<div class="row">

    <div class="col-lg-4">

        <div class="block">
            
            
            <?php echo session('sucesso');?>

            <div class="text-center">

                <?php if($usuario->imagem == null):?>

                <img src="<?php echo site_url('recursos/img/usuario_sem_imagem.png');?>" class="card-img-top"
                    style="width: 90%;" alt="Usuário sem imagem">

                <?php else:?>

                <img src="<?php echo site_url("usuarios/imagem/$usuario->imagem");?>" class="card-img-top"
                    style="width: 90%;" alt="<?php echo esc($usuario->nome);?>">

                <?php endif;?>

                <a href="<?php echo site_url("usuarios/editarimagem/$usuario->id");?>"
                    class="btn btn-outline-primary btn-sm mt-3">Alterar imagem</a>

            </div>
            <hr class="border-secundary">

            <h5 class="card-title mt-2"><?php echo esc($usuario->nome);?></h5>
            <p class="card-text"><?php echo esc($usuario->email);?></p>
            <p class="card-text"><?php echo ($usuario->ativo == true ? 'Usuário ativo' : 'Usuário inativo');?></p>
            <p class="card-text">Criado <?php echo $usuario->criado_em->humanize();?></p>
            <p class="card-text">Atualizado <?php echo $usuario->atualizado_em->humanize();?></p>

            <!-- Exemplo de único botão danger -->
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url("usuarios/editar/$usuario->id");?>">Editar usuário</a>
                    
                    <div class="dropdown-divider"></div>
                    
                </div>
            </div>

            <a href="<?php echo site_url("usuarios");?>"
                    class="btn btn-secondary ml-2">Voltar</a>

        </div>
        <!--block-->

    </div>

</div>

<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>



<?php echo $this->endSection();?>