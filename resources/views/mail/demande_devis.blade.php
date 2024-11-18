<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Devis</title>
</head>
<body>
    <h1>Nouvelle demande de devis</h1>

    <p><strong>Société:</strong> {{ $societe ?? 'Non renseigné' }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Nom:</strong> {{ $nom }}</p>
    <p><strong>Prénoms:</strong> {{ $prenoms }}</p>
    <p><strong>Adresse d'intervention:</strong> {{ $adresseintervention }}</p>
    <p><strong>Description du projet:</strong> {{ $projetMessage }}</p> <!-- Utiliser $projetMessage ici -->

    @if($plan_topographique)
        <p><strong>Plan topographique:</strong> 
        <a href="{{ asset('storage/' . $plan_topographique) }}" download>Télécharger le fichier</a></p>
    @endif
    @if($autre_document)
        <p><strong>Autre document technique:</strong> 
        <a href="{{ asset('storage/' . $autre_document) }}" download>Télécharger le fichier</a></p>
    @endif

</body>
</html>
