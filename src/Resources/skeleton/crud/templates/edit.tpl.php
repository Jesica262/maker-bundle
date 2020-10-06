<?= $helper->getHeadPrintCode('Edición de ' . $entity_class_name) ?>

{% block body %}
<div class="row mt-5">
<?php include 'others/flash_messages.tpl.php' ?>
    <div class="col-lg-12">
        <h4>Edici&oacute;n de <?= $entity_twig_var_singular ?> <span class="fa fa-pencil" aria-hidden="true"></span> </h4>
    </div>
</div>

<div class="">
    {{ form_start(form) }}

    {{ form_widget(form) }}
    <p>
        <button type="submit" class="btn btn-primary">
            <span class="fa fa-check" aria-hidden="true"></span> Guardar
        </button>
    </p>
    {{ form_end(form) }}

    <hr/>

    {% set hide_edit, hide_delete, hide_new = true, false, false %}
<?php include 'others/record_actions.tpl.php' ?>
</div>
{% endblock %}
