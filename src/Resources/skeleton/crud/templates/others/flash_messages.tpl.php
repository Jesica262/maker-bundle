    <div id="alert-container" class="col-md-12">
        {% for type, flashMessages in app.session.flashbag.all() %}
        {% for flashMessage in flashMessages %}
        <div class="alert alert-{{ type }}">
            {{ flashMessage|raw }}
        </div>
        {% endfor %}
        {% endfor %}
    </div>
