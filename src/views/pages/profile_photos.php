<?=$render('header', ['loggedUser' => $loggedUser]);?>
<section class="container main">
    <?=$render('sidebar', ['activeMenu'=>'photos']);?>
    <section class="feed">
        
        <?=$render('perfil-header', ['user' => $user, 'loggedUser' => $loggedUser, 'isFollowing' => $isFollowing]);?>
        <div class="row">
                            
            <div class="column">
                    
                <div class="box">
                    <div class="box-body">

                        <div class="full-user-photos">

                            <?php if(count($user->photos) === 0): ?>
                                Este usuário não possui fotos.
                            <?php endif; ?>

                            <?php foreach($user->photos as $photo): ?>
                                <div class="user-photo-item">
                                    <a href="#modal-1" rel="modal:open">
                                        <img src="<?=$base;?>/media/uploads/<?=$photo->body;?>" />
                                    </a>
                                    <div id="modal-1" style="display:none">
                                        <img src="<?=$base;?>/media/uploads/<?=$photo->body;?>" />
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        

                    </div>
                </div>

            </div>
            
        </div>

    </section>
</section>
    
    <div class="modal">
        <div class="modal-inner">
            <a rel="modal:close">&times;</a>
            <div class="modal-content"></div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/vanillaModal.js"></script>

<?=$render('footer')?>