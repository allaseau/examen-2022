## Ennoncé de l'examen

### Consignes

**Forkez** ce repositiry sur votre compte Github et clonez ce nouveau repository sur votre machine.

Committez et poussez vos changements après **chaque** point de l'exercice.

Respectez au mieux le MVC.

Attention à utiliser les bonnes balises HTML5.

Si vous passez trop de temps sur un sous point, passer au suivant et revenez dessus après. Ne restez pas bloquer trop de temps sur un sous point ! Il vaut mieux avoir presque fait les 3 points que d'en avoir fait un seul mais entier.

### Exercice

1. Afficher la liste des transactions bancaires de l'année (donc **uniquement de 2022**):
    - La date de la transaction
    - Le nom et prénom du **destinataire** si le montant est **négatif**, ou le nom et prénom de l'**émetteur** si le montant est **positif** (tout en majuscule)
    - Le numéro de compte bancaire de la personne concernée (voir point précédent) sous ce format: **"BE00 XXXX XXXX 0000"** (un espace tous les 4 caractères et replacer du 5ième au 12ième chiffre par des "X". *En d'autres termes: ne garder que les 4 premiers et les 4 derniers caractères*)
    - Le montant est affiché en **gris** s'il est negatif ou en **vert** s'il est positif
    - **Triée** de la plus récente à la plus ancienne (par rapport à la date de la transaction)

2. Créer une page de formulaire qui permettra de créer une nouvelle transaction (accessible depuis un lien sur la première page):
    - Une liste déroulante avec les contacts (destinataire)
    - Un champ montant (nombre avec possibilité de mettre 2 chiffres après la virgule)
    - Un champ date avec la date du jour préremplie
    - La personne "connectée" est David Gilson, ça sera donc lui l'émetteur. (mettre son id en dur dans un champ caché)

3. Interception du POST (de la page formulaire du point 2):
    - Vérifier que le destinataire reçu soit **connu** dans les contacts
    - Vérifier qu'il s'agit d'un montant valide
    - Vérifier que la date est valide et n'est **pas dans le passé**
    - Si toutes les vérifications sont **ok**, afficher la **liste** (exercice 1)
    - Si une des vérifications n'est **pas ok**, retour sur le **formulaire prérempli** avec un **message d'erreur** en dessous du formulaire expliquant le problème

Encore un peu de temps ?
- Formatez l'affichage du montant pour toujours avoir **deux chiffres après la virgule**, exemple: "5,00€"
- Enlevez l'émetteur de la liste des destinataires possibles
- Ajouter une communication structurée à vos transactions

Un effort sur la présentation donnera des points bonus.

Bon travail
