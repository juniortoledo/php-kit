<?= $this->layout('web/_template'); ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-12">
      <h5>Create controller</h5>

      <!-- form -->
      <form action="<?= URL ?>controller/create" method="post">
        <input type="text" name="name" class="form-control mt-3" placeholder="Name: ExempleController">
        <button class="btn btn-primary mt-3">Create</button>
      </form>
      <!-- col -->
    </div>

    <?php if (isset($_GET['success'])) : ?>
      <div class="col-12 mt-3">
        <div class="alert alert-primary" role="alert">
          Controller created
        </div>
      </div>
    <?php endif ?>
  </div>
</div>