# maker-bundle

Agregar al composer.json del proyecto los siguientes repositorios:

    "repositories":[
        {
            "type": "vcs",
            "url": "https://github.com/GALes/PetkoparaMultiSearchBundle.git"
        },
        {
            "type": "path",
            "url": "../00_Bundles/make-bundle"
        }
    ],
    
Agregar con composer los siguientes Bundles:

composer require gales/maker-bundle:*@dev

Luego hacer un:

composer dump-autoload

Agregar en la configuracion de Twig que use Bootstrap 4 Form Theme

# config/packages/twig.yaml
twig:
    form_themes: ['bootstrap_4_layout.html.twig']
