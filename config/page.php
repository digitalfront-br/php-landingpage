<?php include '../includes/header.php'; ?>
<div class="uk-container uk-height-viewport uk-flex uk-flex-center uk-flex-middle">
  <div class="uk-vertical-align-middle" style="width: 450px;">

    
    <form action="config/action.php" method="POST" enctype="multipart/form-data" class="uk-card uk-card-body uk-card-default uk-form">
    <h3>Configuração do projeto</h3>
    <?php include '../includes/messages.php'; ?> 
    <div class="uk-margin">
        <input class="uk-width-1-1 uk-input uk-form-large" required value="<?= isset($user->email)  ? $user->email : '' ;?>" name="email" type="email" placeholder="Email">
      </div>
      <div class="uk-margin">
        <input class="uk-width-1-1 uk-input uk-form-large" required  value="<?= isset($user->email) ? $user->password : '' ;?>" type="password" placeholder="Senha">
      </div>
      <div class="uk-margin" uk-margin>
        <div class="uk-width-1-1" uk-form-custom="target: true">
            <input type="file" name="file_logo" >
            <input class="uk-input uk-form-large" name="old_logo" value="<?= $data ? $data->file_logo : '' ;?>" type="text" placeholder="Logo" disabled>
          </div>
          <input type="hidden" name="logo" value="<?= $data ? $data->logo : '' ;?>"  />
    </div>
    <div class="uk-margin" uk-margin>
        <div class="uk-width-1-1" uk-form-custom="target: true">
            <input type="file" name="file_banner" >
            <input class="uk-input uk-form-large" name="old_banner" value="<?= $data ? $data->old_banner : '' ;?>" type="text" placeholder="Banner" disabled>
          </div>
          <input type="hidden" name="banner" />
    </div>
      <div class="uk-margin uk-flex uk-flex-middle">
        <label class="uk-margin-right" for="bg_color">BgColor</label>
        <input class="uk-width-1-1 uk-input uk-form-large" required value="<?= $data ? $data->bg_color : '' ;?>"  name="bg_color" type="color" placeholder="#dedede">
      </div>
      <div class="uk-margin uk-flex uk-flex-middle">
      <label class="uk-margin-right" for="bg_color">TxtColor</label>
        <input class="uk-width-1-1 uk-input uk-form-large" required value="<?= $data ? $data->txt_color : '' ;?>" name="txt_color" type="color" placeholder="#ffffff">
      </div>
      <div class="uk-margin">
        <input class="uk-width-1-1 uk-input uk-form-large" required value="<?= $data ? $data->link : '' ;?>" name="link" type="text" placeholder="Link">
      </div>
      <div class="uk-margin">
        <input class="uk-width-1-1 uk-input uk-form-large" required value="<?= $data ? $data->cupom : '' ;?>" name="cupom" type="text" placeholder="AAAA-0000">
      </div>
      <div class="uk-margin">
        <textarea rows="5" class="uk-width-1-1 uk-textarea uk-form-large" name="ads" type="email" placeholder="ADS CODE SNIPPETS"><?= $data ? $data->ads : '' ?></textarea>
      </div>
      <div class="uk-margin">
        <input type="hidden" name="user_id" value="1" />
        <div class="uk-flex uk-flex-middle">
          <a href="/config/logout.php" class="uk-width-1-3 uk-button uk-button-danger uk-button-small">sair</a>
          <button type="submit" class="uk-width-2-3 uk-button uk-button-primary uk-button-large">Salvar</button>
        </div>
      </div>
    </form>

  </div>
</div>
<?php include '../includes/footer.php'; ?>