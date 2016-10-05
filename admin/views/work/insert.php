
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-6 col-md-offset-3">
            <?php echo $this->alert->flash(['error', 'success']); ?>


            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Kayıt Ekle</div>
                <div class="panel-body">

                    <?php echo bsFormText('title', 'Başlık', array('required' => true)) ?>
                    <?php echo bsFormText('site', 'Site', array('required' => true)) ?>
                    <?php echo bsFormText('link', 'Link') ?>
                    <?php echo bsFormTextarea('detail', 'Detay', array('required' => true)) ?>
                    <?php echo bsFormImage('image', 'Resim', array('required' => true)) ?>

                </div>

                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Gönder</button>
                    <a class="btn btn-default" href="<?php echo moduleUri('records') ?>">Vazgeç</a>
                </div>

        </div>
        </div>



    </form>
</div>